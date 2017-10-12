#!/bin/bash



echo ""

[ -e /var/lib/mysql-files/skeetshooting.temp.csv ] && rm /var/lib/mysql-files/skeetshooting.temp.csv

[ -e "/ask/data/www/reports/skeetshooting.csv" ] && rm "/ask/data/www/reports/skeetshooting.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u sec_user -peKcGZr59zAa2BEWU << EOF
USE IAC_retreat;

SELECT  'Attendee',
        'Access Key',
        'Choice Number',
        'Rifle Experience',
        'Rifle Comfort',
        'Able to Hold 15 lbs',
        'Wear Eye Glasses',
        'Loud Noise Sensitive',
        'Injuries?',
        'Injury Description'
UNION
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        skeetShooting_user,
        skeetShooting_choiceNum,
        skeetShooting_experience,
        skeetShooting_rifleComfort,
        skeetShooting_hold15lbs,
        skeetShooting_eyeGlasses,
        skeetShooting_loudNoises,
        skeetShooting_injuries,
        skeetShooting_injuryInfo
FROM activity_skeetShooting
INNER JOIN activity_main
ON              (activity_skeetShooting.skeetShooting_user = activity_main.hashKey)

INTO OUTFILE '/var/lib/mysql-files/skeetshooting.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n';

EOF

echo "Output File: /ask/data/www/reports/skeetshooting.csv"
echo ""
cp /var/lib/mysql-files/skeetshooting.temp.csv "/ask/data/www/reports/skeetshooting.csv"
