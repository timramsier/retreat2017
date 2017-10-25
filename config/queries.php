<?php

// entry format: "Report Name"=>array("report"=>"query", "description"=>"string")
$queryList = array(

  "Attendance"=>array(
      "report"=>"SELECT 'Access Key','Attending','First Name','Last Name','Company','Title','Email','Address 1','Address 2','Country','City','State','Zip',
                'Office Phone','Mobile Phone','EA Name','EA Email','EA Office Phone','EA Mobile Phone','Emergency Contact Name',
                'Emergency Phone','Food and Diet','ADA and Special Needs','Jacket Size','Arrival Date',
                'Arrival Airport','Arrival Flight Number','Arrival Airline','Origin City','Arrival Connection Info','Departure Date',
                'Departure Airport','Departure Flight Number','Departure Airline','Destination City','Departure Connection Info'
                UNION
                SELECT  hashKey,attending,firstName,lastName,company,title,email,address1,address2,country,city,state,zip,
                officePhone,mobilePhone,eaName,eaEmail,eaOfficePhone,eaMobilePhone,emergencyName,
                emergencyPhone,foodDiet,specialNeeds,jacketSize,arrivalDate,
                arrivalAirport,arrivalFlightNum,arrivalAirline,originCity,arrivalConnectionInfo,departureDate,
                departureAirport,departureFlightNum,departureAirline,destinationCity,departureConnectionInfo
                FROM data;",
      "description"=>"Includes whether someone is attending and other travel information."),

    "Activity Overview"=>array(
      "report"=>"SELECT 'Attendee','Access Key','First Choice','Second Choice','Third Choice'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                hashKey,c1.key_name,c2.key_name,c3.key_name
                FROM activity_main
                INNER JOIN activity_key c1 ON (activity_main.choice1 = c1.key_id)
                INNER JOIN activity_key c2 ON (activity_main.choice2 = c2.key_id)
                INNER JOIN activity_key c3 ON (activity_main.choice3 = c3.key_id)",
      "description"=>"Includes an overview of what activities each user has selected."),

    "Failed Activity Signup"=>array(
      "report"=>"SELECT  'Attendee','Access Key','Error'
                UNION
                SELECT  CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        failed_user,
                        failed_query
                FROM activity_failed
                INNER JOIN activity_main
                ON              (activity_failed.failed_user = activity_main.hashKey)",
      "description"=>"This is the error log for activity sign up."),

    "Hot Air Balloon Ride"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number','Experience List','What do you exp',
                        'Food Restriction','Food Restriction Info', 'Injury', 'Injury Info'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        balloon_user,balloon_choiceNum,balloon_comfort,balloon_comfortInfo,
                        balloon_foodRestriction, balloon_FoodRestrictionInfo,balloon_injuries,
                        balloon_injuryInfo
                FROM activity_balloon
                INNER JOIN activity_main ON (activity_balloon.balloon_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),

    "Hickory Golf Experience"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number','Handedness','Handicap',
                        'Average','Injury','Injury Info'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        hickoryGolf_user,hickoryGolf_choiceNum,hickoryGolf_handed,hickoryGolf_handicap,
                        hickoryGolf_average,hickoryGolf_injuries,hickoryGolf_injuryInfo
                FROM activity_hickoryGolf
                INNER JOIN activity_main ON (activity_hickoryGolf.hickoryGolf_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),

    "Sip N Cycle"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number','Height','Food Restriction',
                        'Food Restriction Info','Injury','Injury Info'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        sipNcycle_user,sipNcycle_choiceNum,sipNcycle_height,sipNcycle_foodRestriction,
                        sipNcycle_FoodRestrictionInfo,sipNcycle_injuries,sipNcycle_injuryInfo
                FROM activity_sipNcycle
                INNER JOIN activity_main ON (activity_sipNcycle.sipNcycle_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),

    "Tennis"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number','Instruction Type','Instruction Level',
                        'Injury','Injury Info'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        tennis_user,tennis_choiceNum,tennis_instructionType,tennis_instructionLevel,
                        tennis_injuries,tennis_injuryInfo
                FROM activity_tennis
                INNER JOIN activity_main ON (activity_tennis.tennis_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),

    "Horseback Riding"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number', 'Ridden Horse', 'Horse Comfort',
                        'Injury','Injury Info'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        horsebackRiding_user,horsebackRiding_choiceNum,horsebackRiding_experience,
                        horsebackRiding_comfort,horsebackRiding_injuries,horsebackRiding_injuryInfo
                FROM activity_horsebackRiding
                INNER JOIN activity_main ON (activity_horsebackRiding.horsebackRiding_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),

    "Hiking at Meadowood Resort"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number','Wants Tour','Injury','Injury Info'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        hikingMeadowood_user,hikingMeadowood_choiceNum,hikingMeadowood_tour,hikingMeadowood_injuries,
                        hikingMeadowood_injuryInfo
                FROM activity_hikingMeadowood
                INNER JOIN activity_main ON (activity_hikingMeadowood.hikingMeadowood_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),

    "Hiking at Bothe"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number','Food Restrictions','Food Restriction Info',
                        'Injury','Injury Info'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        hikingBothe_user,hikingBothe_choiceNum,hikingBothe_foodRestriction,
                        hikingBothe_foodRestrictionInfo,hikingBothe_injuries,hikingBothe_injuryInfo
                FROM activity_hikingBothe
                INNER JOIN activity_main ON (activity_hikingBothe.hikingBothe_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),

    "Spa Treatment"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number','Service','Morning or Afternoon',
                        'Prefered Start','Prefer Male','Prefer Female','Injury','Injury Info'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        spaMeadowood_user,spaMeadowood_choiceNum,spaMeadowood_service,spaMeadowood_prefTime,
                        spaMeadowood_start,spaMeadowood_preferMale,spaMeadowood_preferFemale,
                        spaMeadowood_injuries,spaMeadowood_injuryInfo
                FROM activity_spaMeadowood
                INNER JOIN activity_main ON (activity_spaMeadowood.spaMeadowood_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),

    "Croquet"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number','Injury','InjuryInfo'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        croquet_user,croquet_choiceNum,croquet_injuries,croquet_injuryInfo
                FROM activity_croquet
                INNER JOIN activity_main ON (activity_croquet.croquet_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),

    "Group Wine Experience"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number','Food Restriction','Food Restriction Info'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        wine_user,wine_choiceNum,wine_foodRestriction,wine_foodRestrictionInfo
                FROM activity_wine
                INNER JOIN activity_main ON (activity_wine.wine_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),

    "Group Golf Tournament"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number','Need Equipment','Handedness','Handicap',
                        'Average','Injury','Injury Info'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        golfTournament_user,golfTournament_choiceNum,golfTournament_equipment,golfTournament_handed,
                        golfTournament_handicap,golfTournament_average,golfTournament_injuries,golfTournament_injuryInfo
                FROM activity_golfTournament
                INNER JOIN activity_main ON (activity_golfTournament.golfTournament_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),

    "Mixology Experience"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number','Food Restriction','Food Restriction Info'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        mixology_user,mixology_choiceNum,mixology_foodRestriction,mixology_foodRestrictionInfo
                FROM activity_mixology
                INNER JOIN activity_main ON (activity_mixology.mixology_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),

    "Golf Studio Experience"=>array(
      "report"=>"SELECT 'Attendee','Access Key','Choice Number','Need Equipment','Handedness','Handicap',
                        'Average','Injury','Injury Info'
                UNION
                SELECT CONCAT(activity_main.userFirstName, CONCAT(' ',activity_main.userLastName)),
                        golfStudio_user,golfStudio_choiceNum,golfStudio_equipment,golfStudio_handed,
                        golfStudio_handicap,golfStudio_average,golfStudio_injuries,golfStudio_injuryInfo
                FROM activity_golfStudio
                INNER JOIN activity_main ON (activity_golfStudio.golfStudio_user = activity_main.hashKey)",
      "description"=>"Includes a list of users who chose this activity and the answers to their questions"),
  );