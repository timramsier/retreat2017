#!/bin/bash

fileDate=$(date +'%b%d_%Y_%H_%M')


echo ""

[ -e /var/lib/mysql-files/artGallery.temp.csv ] && rm /var/lib/mysql-files/artGallery.temp.csv

[ -e "/var/app/current/reports/artGallery.csv" ] && rm "/var/app/current/reports/artGallery.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u $RDS_USERNAME -p$RDS_PASSWORD -h $RDS_HOSTNAME -P $RDS_PORT  << EOF
USE $RDS_DB_NAME;

SELECT	'Attendee',
	'Access Key',
        'Choice Number'
UNION
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        artGallery_user,
        artGallery_choiceNum
FROM activity_artGallery
INNER JOIN activity_main
ON              (activity_artGallery.artGallery_user = activity_main.hashKey)

INTO OUTFILE '/var/lib/mysql-files/artGallery.temp.csv'
FIELDS TERMINATED BY ","
ENCLOSED BY '"'
LINES TERMINATED BY '\n';

EOF

echo "Output File: /var/app/current/reports/artGallery.csv"
echo ""
cp /var/lib/mysql-files/artGallery.temp.csv "/var/app/current/reports/artGallery.csv"
