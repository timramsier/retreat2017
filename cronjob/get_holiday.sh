#!/bin/bash

FILENAME="holiday_main"
FOLDERNAME="holiday"

echo ""
mkdir -p "/var/app/current/reports/${FOLDERNAME}"

[ -e "/var/lib/mysql-files/${FILENAME}.temp.csv" ] && rm "/var/lib/mysql-files/${FILENAME}.temp.csv"

[ -e "/var/app/current/reports/${FOLDERNAME}/${FILENAME}.csv" ] && rm "/var/app/current/reports/${FOLDERNAME}/${FILENAME}.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u $RDS_USERNAME -p$RDS_PASSWORD -h $RDS_HOSTNAME -P $RDS_PORT  << EOF
USE $RDS_DB_NAME;

SELECT 'Date Entered','First Name','Last Name','Attending','Company','Email','Bringing Guest?', 'Guest Name'
UNION
SELECT main_dateEntry,main_firstName,main_lastName,main_attending,main_company,main_email,main_guest,main_guestName
FROM holiday_main

INTO OUTFILE '/var/lib/mysql-files/${FILENAME}.temp.csv'
FIELDS TERMINATED BY ","
ENCLOSED BY '"'
LINES TERMINATED BY '\n';

EOF

echo "Output File: /var/app/current/reports/${FOLDERNAME}/${FILENAME}.csv"
echo ""
cp "/var/lib/mysql-files/${FILENAME}.temp.csv" "/var/app/current/reports/${FOLDERNAME}/${FILENAME}.csv"
