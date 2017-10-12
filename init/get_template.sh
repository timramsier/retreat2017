#!/bin/bash

FILENAME="template.csv"
FOLDERNAME="template/"

echo ""

[ -e "/var/lib/mysql-files/${FILENAME}.temp.csv" ] && rm "/var/lib/mysql-files/${FILENAME}.temp.csv"

[ -e "/ask/data/www/reports/${FOLDERNAME}/${FILENAME}.csv" ] && rm "/ask/data/www/reports/${FOLDERNAME}/${FILENAME}.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u sec_user -peKcGZr59zAa2BEWU << EOF
USE IAC_retreat;


INTO OUTFILE '/var/lib/mysql-files/IACRetreatOutput.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n';

EOF

echo "Output File: /ask/data/www/reports/${FOLDERNAME}/${FILENAME}.csv"
echo ""
cp "/var/lib/mysql-files/${FILENAME}.temp.csv" "/ask/data/www/reports/${FOLDERNAME}/${FILENAME}.csv.csv"
