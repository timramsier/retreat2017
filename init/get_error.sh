#!/bin/bash


echo ""

[ -e /var/lib/mysql-files/errorLog.temp.csv ] && rm /var/lib/mysql-files/errorLog.temp.csv

[ -e "/ask/data/www/reports/errorLog.csv" ] && rm "/ask/data/www/reports/errorLog.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u sec_user -peKcGZr59zAa2BEWU << EOF
USE IAC_retreat;

SELECT  'Attendee',
        'Access Key',
        'Error'
UNION
SELECT  CONCAT(activity_main.userFirstName, CONCAT(" ",activity_main.userLastName)),
        failed_user,
        failed_query
FROM activity_failed
INNER JOIN activity_main
ON              (activity_failed.failed_user = activity_main.hashKey)

INTO OUTFILE '/var/lib/mysql-files/errorLog.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n';

EOF

echo ""
cp /var/lib/mysql-files/errorLog.temp.csv "/ask/data/www/reports/errorLog.csv"
