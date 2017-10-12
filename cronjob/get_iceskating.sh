#!/bin/bash



echo ""

[ -e /var/lib/mysql-files/iceskating.temp.csv ] && rm /var/lib/mysql-files/iceskating.temp.csv

[ -e "/var/app/current/reports/iceskating.csv" ] && rm "/var/app/current/reports/iceskating.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u $RDS_USERNAME -p$RDS_PASSWORD -h $RDS_HOSTNAME -P $RDS_PORT  << EOF
USE $RDS_DB_NAME;

SELECT	'Attendee',
	'Access Key',
        'Choice Number',
        'Skates Needed?',
        'Shoe Size',
        'Ice Skating Experience',
        'Ice Skating Comfort',
        'Want Lessons?',
        'Location Preference',
        'Injuries?',
        'Injury Descriotion'
UNION
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        iceSkating_user,
        iceSkating_choiceNum,
        iceSkating_equipment,
        iceSkating_shoeSize,
        iceSkating_experience,
        iceSkating_comfort,
        iceSkating_lessons,
        iceSkating_preference,
        iceSkating_injuries,
        iceSkating_injuryInfo
FROM activity_iceSkating
INNER JOIN activity_main
ON              (activity_iceSkating.iceSkating_user = activity_main.hashKey)

INTO OUTFILE '/var/lib/mysql-files/iceskating.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n';

EOF

echo "Output File: /ask/data/www/retreat/iceskating.csv"
echo ""
cp /var/lib/mysql-files/iceskating.temp.csv "/var/app/current/reports/iceskating.csv"
