#!/bin/bash

FILENAME="template.csv"
FOLDERNAME="template/"

echo ""

[ -e "/var/lib/mysql-files/${FILENAME}.temp.csv" ] && rm "/var/lib/mysql-files/${FILENAME}.temp.csv"

[ -e "/var/app/current/reports/${FOLDERNAME}/${FILENAME}.csv" ] && rm "/var/app/current/reports/${FOLDERNAME}/${FILENAME}.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u $RDS_USERNAME -p$RDS_PASSWORD -h $RDS_HOSTNAME -P $RDS_PORT  << EOF
USE $RDS_DB_NAME;


INTO OUTFILE '/var/lib/mysql-files/IACRetreatOutput.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n';

EOF

echo "Output File: /var/app/current/reports/${FOLDERNAME}/${FILENAME}.csv"
echo ""
cp "/var/lib/mysql-files/${FILENAME}.temp.csv" "/var/app/current/reports/${FOLDERNAME}/${FILENAME}.csv.csv"
