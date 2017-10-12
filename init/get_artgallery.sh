#!/bin/bash

fileDate=$(date +'%b%d_%Y_%H_%M')


echo ""

[ -e /var/lib/mysql-files/artGallery.temp.csv ] && rm /var/lib/mysql-files/artGallery.temp.csv

[ -e "/ask/data/www/reports/artGallery.csv" ] && rm "/ask/data/www/reports/artGallery.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u sec_user -peKcGZr59zAa2BEWU << EOF
USE IAC_retreat;

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

echo "Output File: /ask/data/www/reports/artGallery.csv"
echo ""
cp /var/lib/mysql-files/artGallery.temp.csv "/ask/data/www/reports/artGallery.csv"
