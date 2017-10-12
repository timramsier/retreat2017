#!/bin/bash



echo ""

[ -e /var/lib/mysql-files/snowshoeing.temp.csv ] && rm /var/lib/mysql-files/snowshoeing.temp.csv

[ -e "/var/app/current/reports/snowshoeing.csv" ] && rm "/var/app/current/reports/snowshoeing.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u $RDS_USERNAME -p$RDS_PASSWORD -h $RDS_HOSTNAME -P $RDS_PORT  << EOF
USE $RDS_DB_NAME;

SELECT  'Attendee',
        'Access Key',
        'Choice Number',
        'Shoes Needed?',
        'Use Poles?',
        'Poles Needed?',
        'Height',
        'Experienced?',
        'Skill Level',
        'Injuries?',
        'Injury Description'
UNION
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        snowshoeing_user,
        snowshoeing_choiceNum,
        snowshoeing_shoesNeeded,
        snowshoeing_usePole,
        snowshoeing_needPole,
        snowshoeing_height,
        snowshoeing_experience,
        snowshoeing_ability,
        snowshoeing_injuries,
        snowshoeing_injuryInfo
FROM activity_snowshoeing
INNER JOIN activity_main
ON              (activity_snowshoeing.snowshoeing_user = activity_main.hashKey)

INTO OUTFILE '/var/lib/mysql-files/snowshoeing.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n';

EOF

echo "Output File: /var/app/current/reports/snowshoeing.csv"
echo ""
cp /var/lib/mysql-files/snowshoeing.temp.csv "/var/app/current/reports/snowshoeing.csv"
