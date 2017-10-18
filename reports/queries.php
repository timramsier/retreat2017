<?php
$queryList = array(
  "main"=>"SELECT 'Access Key','Attending','First Name','Last Name','Company','Title','Email','Address 1','Address 2','Country','City','State','Zip',
            'Office Phone','Mobile Phone','EA Name','EA Email','EA Office Phone','EA Mobile Phone','Emergency Contact Name',
            'Emergency Phone','Food and Diet','ADA and Special Needs','Jacket Size','Arrival Date',
            'Arrival Airport','Arrival Flight Number','Arrival Airline','Origin City','Arrival Connection Info','Departure Date',
            'Departure Airport','Departure Flight Number','Departure Airline','Destination City','Departure Connection Info'
            FROM data
            UNION
            SELECT  hashKey,attending,firstName,lastName,company,title,email,address1,address2,country,city,state,zip,
            officePhone,mobilePhone,eaName,eaEmail,eaOfficePhone,eaMobilePhone,emergencyName,
            emergencyPhone,foodDiet,specialNeeds,jacketSize,arrivalDate,
            arrivalAirport,arrivalFlightNum,arrivalAirline,originCity,arrivalConnectionInfo,departureDate,
            departureAirport,departureFlightNum,departureAirline,destinationCity,departureConnectionInfo
            FROM data;"
  );

$descriptionList = array(
  "main"=>"This is the master report for attendance."
);