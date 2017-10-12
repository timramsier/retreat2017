#!/bin/bash

fileDate=$(date +'%b%d_%Y_%H_%M')


echo ""

[ -e "/var/lib/mysql-files/dogsledding.temp.csv" ] && rm "/var/lib/mysql-files/dogsledding.temp.csv"

[ -e "/var/app/current/reports/dogsledding.csv" ] && rm "/var/app/current/reports/dogsledding.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u $RDS_USERNAME -p$RDS_PASSWORD -h $RDS_HOSTNAME -P $RDS_PORT  << EOF
USE $RDS_DB_NAME;


SELECT	'Attendee',
	'Access Key',
        'Choice Number',
        'Animal Comfort',
        'Dog Sledding Experience',
        'Injuries?',
        'Injury Description'

UNION
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        dogSledding_user,
        dogSledding_choiceNum,
        dogSledding_animalComfort,
        dogSledding_experience,
        dogSledding_injuries,
        dogSledding_injuryInfo
FROM activity_dogSledding
INNER JOIN activity_main
ON              (activity_dogSledding.dogSledding_user = activity_main.hashKey)


INTO OUTFILE '/var/lib/mysql-files/dogsledding.temp.csv'
FIELDS TERMINATED BY ","
ENCLOSED BY '"'
LINES TERMINATED BY '\n';

EOF

echo "Output File: /var/app/current/reports/dogsledding.csv"
echo ""
cp /var/lib/mysql-files/dogsledding.temp.csv "/var/app/current/reports/dogsledding.csv"
