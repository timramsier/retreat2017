#!/bin/bash

fileDate=$(date +'%b%d_%Y_%H_%M')


echo ""

[ -e /var/lib/mysql-files/IACRetreatOutput.temp.csv ] && rm /var/lib/mysql-files/IACRetreatOutput.temp.csv

[ -e "/var/app/current/reports/${fileDate}_IACRetreatOutput.csv" ] && rm "/var/app/current/reports/${fileDate}_IACRetreatOutput.csv"
[ -e "/var/app/current/reports/IACRetreatOutput.csv" ] && rm "/var/app/current/reports/IACRetreatOutput.csv"

echo "Connecting to MySQL database: IAC_retreat."
echo "Gathering information."

echo ""

mysql -u $RDS_USERNAME -p$RDS_PASSWORD -h $RDS_HOSTNAME -P $RDS_PORT  << EOF
USE $RDS_DB_NAME;

SELECT 'Access Key','Attending','First Name','Last Name','Company','Title','Email','Address 1','Address 2','City','State','Zip',
'Office Phone','Mobile Phone','EA Name','EA Email','EA Office Phone','EA Mobile Phone','Emergency Contact Name',
'Emergency Phone','Food and Diet','ADA and Special Needs','Jacket Size','Flight Type','Arrival Date',
'Arrival Airport','Arrival Flight Number','Arrival Airline','Origin City','Arrival Connection Info','Departure Date',
'Departure Airport','Departure Flight Number','Departure Airline','Destination City','Departure Connection Info'
FROM data
UNION
SELECT  hashKey,attending,firstName,lastName,company,title,email,address1,address2,city,state,zip,
officePhone,mobilePhone,eaName,eaEmail,eaOfficePhone,eaMobilePhone,emergencyName,
emergencyPhone,foodDiet,specialNeeds,jacketSize,flightType,arrivalDate,
arrivalAirport,arrivalFlightNum,arrivalAirline,originCity,arrivalConnectionInfo,departureDate,
departureAirport,departureFlightNum,departureAirline,destinationCity,departureConnectionInfo
FROM data
INTO OUTFILE '/var/lib/mysql-files/IACRetreatOutput.temp.csv' 
FIELDS TERMINATED BY "," 
ENCLOSED BY '"' 
LINES TERMINATED BY '\n';

EOF

echo "Output File: /var/app/current/reports/${fileDate}_IACRetreatOutput.csv"
echo ""
#cp /var/lib/mysql-files/IACRetreatOutput.temp.csv "/ask/data/www/retreat/reports/${fileDate}_IACRetreatOutput.csv"
cp /var/lib/mysql-files/IACRetreatOutput.temp.csv "/var/app/current/reports/IACRetreatOutput.csv"
