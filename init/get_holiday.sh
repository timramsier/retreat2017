#!/bin/bash

FILENAME="holiday_main"
FOLDERNAME="holiday"

echo ""
mkdir -p "/ask/data/www/reports/${FOLDERNAME}"

[ -e "/var/lib/mysql-files/${FILENAME}.temp.csv" ] && rm "/var/lib/mysql-files/${FILENAME}.temp.csv"

[ -e "/ask/data/www/reports/${FOLDERNAME}/${FILENAME}.csv" ] && rm "/ask/data/www/reports/${FOLDERNAME}/${FILENAME}.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u sec_user -peKcGZr59zAa2BEWU << EOF
USE IAC_retreat;

SELECT 'Date Entered','First Name','Last Name','Attending','Company','Email','Bringing Guest?', 'Guest Name'
UNION
SELECT main_dateEntry,main_firstName,main_lastName,main_attending,main_company,main_email,main_guest,main_guestName
FROM holiday_main

INTO OUTFILE '/var/lib/mysql-files/${FILENAME}.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n';

EOF

echo "Output File: /ask/data/www/reports/${FOLDERNAME}/${FILENAME}.csv"
echo ""
cp "/var/lib/mysql-files/${FILENAME}.temp.csv" "/ask/data/www/reports/${FOLDERNAME}/${FILENAME}.csv"
