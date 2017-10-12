#!/bin/bash

fileDate=$(date +'%b%d_%Y_%H_%M')


echo ""

[ -e /var/lib/mysql-files/skiing.temp.csv ] && rm /var/lib/mysql-files/skiing.temp.csv

[ -e "/ask/data/www/reports/skiing.csv" ] && rm "/ask/data/www/reports/skiing.csv"

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
	'Need Lessons?',
        'Skiing Skill',
        'Injuries?',
        'Injury Description'
UNION ALL
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        skiing_user,
        skiing_choiceNum,
        skiing_equipment,
        skiing_neededEquipment,
        skiing_lessons,
        skiing_skillLevel,
        skiing_injuries,
        skiing_injuryInfo
FROM activity_skiing
INNER JOIN activity_main
ON              (activity_skiing.skiing_user = activity_main.hashKey)



INTO OUTFILE '/var/lib/mysql-files/skiing.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n';

EOF

echo "Output File: /ask/data/www/reports/skiing.csv"
echo ""

cp /var/lib/mysql-files/skiing.temp.csv "/ask/data/www/reports/skiing.csv"
