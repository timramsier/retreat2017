#!/bin/bash



echo ""

[ -e /var/lib/mysql-files/flyfishing.temp.csv ] && rm /var/lib/mysql-files/flyfishing.temp.csv

[ -e "/var/app/current/reports/flyfishing.csv" ] && rm "/var/app/current/reports/flyfishing.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u $RDS_USERNAME -p$RDS_PASSWORD -h $RDS_HOSTNAME -P $RDS_PORT  << EOF
USE $RDS_DB_NAME;

SELECT	'Attendee',
	'Access Key',
        'Choice Number',
        'Equipment Needed?',
        'Needed Equipment',
        'Fly Fishing Experience',
        'Swimming Comfort',
        'Better Experience',
        'Injuries?',
        'Injury Description'

UNION
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        flyFishing_user,
        flyFishing_choiceNum,
        flyFishing_equipment,
        flyFishing_neededEquipment,
        flyFishing_experience,
        flyFishing_swimming,
        flyFishing_help,
        flyFishing_injuries,
        flyFishing_injuryInfo
FROM activity_flyFishing
INNER JOIN activity_main
ON              (activity_flyFishing.flyFishing_user = activity_main.hashKey)

INTO OUTFILE '/var/lib/mysql-files/flyfishing.temp.csv'
FIELDS TERMINATED BY ","
ENCLOSED BY '"'
LINES TERMINATED BY '\n';

EOF

echo "Output File: /var/app/current/reports/flyfishing.csv"
echo ""
cp /var/lib/mysql-files/flyfishing.temp.csv "/var/app/current/reports/flyfishing.csv"
