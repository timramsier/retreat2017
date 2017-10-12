#!/bin/bash



echo ""

[ -e /var/lib/mysql-files/snowboarding.temp.csv ] && rm /var/lib/mysql-files/snowboarding.temp.csv

[ -e "/var/app/current/reports/snowboarding.csv" ] && rm "/var/app/current/reports/snowboarding.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u $RDS_USERNAME -p$RDS_PASSWORD -h $RDS_HOSTNAME -P $RDS_PORT  << EOF
USE $RDS_DB_NAME;

SELECT  'Attendee',
        'Access Key',
        'Choice Number',
        'Need Equipment?',
        'Equipment Needed',
        'Lessons Wanted?',
        'Skill Level',
        'Injuries?',
        'Injury Description'
UNION
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        snowboarding_user,
        snowboarding_choiceNum,
        snowboarding_equipment,
        snowboarding_neededEquipment,
        snowboarding_lessons,
        snowboarding_skillLevel,
        snowboarding_injuries,
        snowboarding_injuryInfo
FROM activity_snowboarding
INNER JOIN activity_main
ON              (activity_snowboarding.snowboarding_user = activity_main.hashKey)

INTO OUTFILE '/var/lib/mysql-files/snowboarding.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n';

EOF

echo "Output File: /var/app/current/reports/snowboarding.csv"
echo ""
cp /var/lib/mysql-files/snowboarding.temp.csv "/var/app/current/reports/snowboarding.csv"
