#!/bin/bash



echo ""

[ -e /var/lib/mysql-files/main.temp.csv ] && rm /var/lib/mysql-files/main.temp.csv

[ -e "/var/app/current/reports/main.csv" ] && rm "/var/app/current/reports/main.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u $RDS_USERNAME -p$RDS_PASSWORD -h $RDS_HOSTNAME -P $RDS_PORT  << EOF
USE $RDS_DB_NAME;

SELECT  'Attendee',
        'Access Key',
        'First Choice',
        'Second Choice',
        'Third Choice',
        'Morning Availability',
        'Mid-Day Availability',
        'Afternoon Availability'
        
UNION
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        hashKey,
        c1.key_name,
        c2.key_name,
        c3.key_name,
        morning,
        midDay,
        afternoon
FROM activity_main
INNER JOIN activity_key c1
ON     (activity_main.choice1 = c1.key_id)
INNER JOIN activity_key c2
ON     (activity_main.choice2 = c2.key_id)
INNER JOIN activity_key c3
ON     (activity_main.choice3 = c3.key_id)

INTO OUTFILE '/var/lib/mysql-files/main.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n';

EOF

echo "Output File: /var/app/current/reports/main.csv"
echo ""
cp /var/lib/mysql-files/main.temp.csv "/var/app/current/reports/main.csv"
