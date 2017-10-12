#!/bin/bash



echo ""

[ -e /var/lib/mysql-files/spa.temp.csv ] && rm /var/lib/mysql-files/spa.temp.csv

[ -e "/var/app/current/reports/spa.csv" ] && rm "/var/app/current/reports/spa.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u $RDS_USERNAME -p$RDS_PASSWORD -h $RDS_HOSTNAME -P $RDS_PORT  << EOF
USE $RDS_DB_NAME;

SELECT  'Attendee',
        'Access Key',
        'Choice Number',
        'First Choice',
        'Second Choice'
UNION
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        spa_user,
        spa_choiceNum,
        spa_choice1,
        spa_choice2
FROM activity_spa
INNER JOIN activity_main
ON              (activity_spa.spa_user = activity_main.hashKey)

INTO OUTFILE '/var/lib/mysql-files/spa.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"'
LINES TERMINATED BY '\n';

EOF

echo "Output File: /var/app/current/reports/spa.csv"
echo ""
cp /var/lib/mysql-files/spa.temp.csv "/var/app/current/reports/spa.csv"
