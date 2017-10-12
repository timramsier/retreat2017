#!/bin/bash


echo ""

[ -e /var/lib/mysql-files/foodtour.temp.csv ] && rm /var/lib/mysql-files/foodtour.temp.csv

[ -e "/ask/data/www/reports/foodtour.csv" ] && rm "/ask/data/www/reports/foodtour.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u sec_user -peKcGZr59zAa2BEWU << EOF
USE IAC_retreat;

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

echo "Output File: /ask/data/www/reports/foodtour.csv"
echo ""
cp /var/lib/mysql-files/foodtour.temp.csv "/ask/data/www/reports/foodtour.csv"
