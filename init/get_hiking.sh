#!/bin/bash


echo ""

[ -e /var/lib/mysql-files/hiking.temp.csv ] && rm /var/lib/mysql-files/hiking.temp.csv

[ -e "/ask/data/www/reports/hiking.csv" ] && rm "/ask/data/www/reports/hiking.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u sec_user -peKcGZr59zAa2BEWU << EOF
USE IAC_retreat;

SELECT	'Attendee',
	'Access Key',
        'Choice Number',
        'Equipment Needed?',
        'Needed Equipment',
        'Hi-Altitude Experience',
        'Hiking Comfort',
        'Better Experience',
        'Injuries?',
        'Injury Descriotion'
UNION
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        hiking_user,
        hiking_choiceNum,
        hiking_equipment,
        hiking_neededEquipment,
        hiking_experience,
        hiking_hikingComfort,
        hiking_help,
        hiking_injuries,
        hiking_injuryInfo
FROM activity_hiking
INNER JOIN activity_main
ON              (activity_hiking.hiking_user = activity_main.hashKey)

INTO OUTFILE '/var/lib/mysql-files/hiking.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n';

EOF

echo "Output File: /ask/data/www/reports/hiking.csv"
echo ""
cp /var/lib/mysql-files/hiking.temp.csv "/ask/data/www/reports/hiking.csv"
