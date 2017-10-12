#!/bin/bash


echo ""

[ -e /var/lib/mysql-files/foodtour.temp.csv ] && rm /var/lib/mysql-files/foodtour.temp.csv

[ -e "/var/app/current/reports/foodtour.csv" ] && rm "/var/app/current/reports/foodtour.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u $RDS_USERNAME -p$RDS_PASSWORD -h $RDS_HOSTNAME -P $RDS_PORT  << EOF
USE $RDS_DB_NAME;

SELECT	'Attendee',
	'Access Key',
        'Choice Number',
        'Food Restrictions'
UNION
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        foodTour_user,
        foodTour_choiceNum,
        foodTour_foodRestrictions
FROM activity_foodTour
INNER JOIN activity_main
ON              (activity_foodTour.foodTour_user = activity_main.hashKey)

INTO OUTFILE '/var/lib/mysql-files/foodtour.temp.csv'
FIELDS TERMINATED BY ","
ENCLOSED BY '"'
LINES TERMINATED BY '\n';

EOF

echo "Output File: /var/app/current/reports/foodtour.csv"
echo ""
cp /var/lib/mysql-files/foodtour.temp.csv "/var/app/current/reports/foodtour.csv"
