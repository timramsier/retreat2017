<?php

$sql_init = array(
  'SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";',
  'SET time_zone = "+00:00";',
  'CREATE TABLE IF NOT EXISTS `activity_artGallery` (
    `artGallery_id` int(11) NOT NULL,
    `artGallery_choiceNum` varchar(128) DEFAULT NULL,
    `artGallery_user` varchar(256) NOT NULL,
    PRIMARY KEY (`artGallery_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `activity_dogSledding` (
    `dogSledding_id` int(11) NOT NULL,
    `dogSledding_user` varchar(256) NOT NULL,
    `dogSledding_choiceNum` varchar(128) DEFAULT NULL,
    `dogSledding_animalComfort` varchar(128) DEFAULT NULL,
    `dogSledding_experience` varchar(128) DEFAULT NULL,
    `dogSledding_injuries` varchar(128) DEFAULT NULL,
    `dogSledding_injuryInfo` varchar(1024) DEFAULT NULL,
    PRIMARY KEY (`dogSledding_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `activity_failed` (
    `failed_id` int(11) NOT NULL,
    `failed_user` varchar(256) DEFAULT NULL,
    `failed_query` varchar(4096) DEFAULT NULL,
    PRIMARY KEY (`failed_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `activity_flyFishing` (
    `flyFishing_id` int(11) NOT NULL,
    `flyFishing_user` varchar(256) NOT NULL,
    `flyFishing_choiceNum` varchar(128) DEFAULT NULL,
    `flyFishing_equipment` varchar(128) DEFAULT NULL,
    `flyFishing_neededEquipment` varchar(1024) NOT NULL,
    `flyFishing_experience` varchar(128) DEFAULT NULL,
    `flyFishing_swimming` varchar(128) DEFAULT NULL,
    `flyFishing_help` varchar(1024) DEFAULT NULL,
    `flyFishing_injuries` varchar(128) DEFAULT NULL,
    `flyFishing_injuryInfo` varchar(1024) DEFAULT NULL,
    PRIMARY KEY (`flyFishing_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `activity_foodTour` (
    `foodTour_id` int(11) NOT NULL,
    `foodTour_user` varchar(256) NOT NULL,
    `foodTour_choiceNum` varchar(128) DEFAULT NULL,
    `foodTour_foodRestrictions` varchar(2048) DEFAULT NULL,
    PRIMARY KEY (`foodTour_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
 'CREATE TABLE IF NOT EXISTS `activity_hiking` (
    `hiking_id` int(11) NOT NULL,
    `hiking_user` varchar(256) NOT NULL,
    `hiking_choiceNum` varchar(128) DEFAULT NULL,
    `hiking_equipment` varchar(128) DEFAULT NULL,
    `hiking_neededEquipment` varchar(1024) DEFAULT NULL,
    `hiking_experience` varchar(128) DEFAULT NULL,
    `hiking_hikingComfort` varchar(128) DEFAULT NULL,
    `hiking_help` varchar(1024) DEFAULT NULL,
    `hiking_injuries` varchar(128) DEFAULT NULL,
    `hiking_injuryInfo` varchar(1024) DEFAULT NULL,
    PRIMARY KEY (`hiking_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `activity_iceSkating` (
    `iceSkating_id` int(11) NOT NULL,
    `iceSkating_user` varchar(256) NOT NULL,
    `iceSkating_choiceNum` varchar(128) DEFAULT NULL,
    `iceSkating_equipment` varchar(128) DEFAULT NULL,
    `iceSkating_shoeSize` varchar(256) DEFAULT NULL,
    `iceSkating_experience` varchar(128) DEFAULT NULL,
    `iceSkating_comfort` varchar(128) DEFAULT NULL,
    `iceSkating_lessons` varchar(128) DEFAULT NULL,
    `iceSkating_preference` varchar(128) DEFAULT NULL,
    `iceSkating_injuries` varchar(128) DEFAULT NULL,
    `iceSkating_injuryInfo` varchar(1024) DEFAULT NULL,
    PRIMARY KEY (`iceSkating_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `activity_key` (
    `key_id` int(11) NOT NULL,
    `key_name` varchar(128) NOT NULL,
    `key_alias` varchar(128) NOT NULL,
    PRIMARY KEY (`key_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `activity_main` (
    `id` int(11) NOT NULL,
    `hashKey` varchar(128) DEFAULT NULL,
    `userAgent` varchar(1024) DEFAULT NULL,
    `userIP` varchar(128) DEFAULT NULL,
    `userFirstName` varchar(256) DEFAULT NULL,
    `userLastName` varchar(256) DEFAULT NULL,
    `choice1` int(11) DEFAULT NULL,
    `choice2` int(11) DEFAULT NULL,
    `choice3` int(11) DEFAULT NULL,
    `morning` varchar(128) DEFAULT NULL,
    `midDay` varchar(128) DEFAULT NULL,
    `afternoon` varchar(128) DEFAULT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `activity_skeetShooting` (
    `skeetShooting_id` int(11) NOT NULL,
    `skeetShooting_user` varchar(256) NOT NULL,
    `skeetShooting_choiceNum` varchar(128) DEFAULT NULL,
    `skeetShooting_experience` varchar(128) DEFAULT NULL,
    `skeetShooting_rifleComfort` varchar(128) DEFAULT NULL,
    `skeetShooting_hold15lbs` varchar(128) DEFAULT NULL,
    `skeetShooting_eyeGlasses` varchar(128) DEFAULT NULL,
    `skeetShooting_loudNoises` varchar(128) DEFAULT NULL,
    `skeetShooting_injuries` varchar(128) DEFAULT NULL,
    `skeetShooting_injuryInfo` varchar(1024) DEFAULT NULL,
    PRIMARY KEY (`skeetShooting_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `activity_skiing` (
    `skiing_id` int(11) NOT NULL,
    `skiing_user` varchar(256) NOT NULL,
    `skiing_choiceNum` varchar(128) DEFAULT NULL,
    `skiing_equipment` varchar(128) DEFAULT NULL,
    `skiing_neededEquipment` varchar(1024) DEFAULT NULL,
    `skiing_lessons` varchar(128) DEFAULT NULL,
    `skiing_skillLevel` varchar(128) DEFAULT NULL,
    `skiing_injuries` varchar(128) DEFAULT NULL,
    `skiing_injuryInfo` varchar(1024) DEFAULT NULL,
    PRIMARY KEY (`skiing_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `activity_snowboarding` (
    `snowboarding_id` int(11) NOT NULL,
    `snowboarding_user` varchar(256) NOT NULL,
    `snowboarding_choiceNum` varchar(128) DEFAULT NULL,
    `snowboarding_equipment` varchar(128) DEFAULT NULL,
    `snowboarding_neededEquipment` varchar(1024) DEFAULT NULL,
    `snowboarding_lessons` varchar(128) DEFAULT NULL,
    `snowboarding_skillLevel` varchar(128) DEFAULT NULL,
    `snowboarding_injuries` varchar(128) DEFAULT NULL,
    `snowboarding_injuryInfo` varchar(1024) DEFAULT NULL,
    PRIMARY KEY (`snowboarding_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `activity_snowshoeing` (
    `snowshoeing_id` int(11) NOT NULL,
    `snowshoeing_user` varchar(256) NOT NULL,
    `snowshoeing_choiceNum` varchar(128) NOT NULL,
    `snowshoeing_shoesNeeded` varchar(128) DEFAULT NULL,
    `snowshoeing_usePole` varchar(128) DEFAULT NULL,
    `snowshoeing_needPole` varchar(128) DEFAULT NULL,
    `snowshoeing_height` varchar(128) DEFAULT NULL,
    `snowshoeing_experience` varchar(128) DEFAULT NULL,
    `snowshoeing_ability` varchar(128) DEFAULT NULL,
    `snowshoeing_injuries` varchar(128) DEFAULT NULL,
    `snowshoeing_injuryInfo` varchar(1024) DEFAULT NULL,
    PRIMARY KEY (`snowshoeing_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `activity_spa` (
    `spa_id` int(11) NOT NULL,
    `spa_choiceNum` int(11) NOT NULL,
    `spa_user` varchar(256) NOT NULL,
    `spa_choice1` varchar(128) DEFAULT NULL,
    `spa_choice2` varchar(128) DEFAULT NULL,
    PRIMARY KEY (`spa_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `data` (
    `id` int(11) NOT NULL,
    `hashKey` varchar(128) NOT NULL,
    `userAgent` text NOT NULL,
    `userIP` varchar(128) NOT NULL,
    `attending` varchar(128) NOT NULL,
    `firstName` varchar(256) NOT NULL,
    `lastName` varchar(256) NOT NULL,
    `company` varchar(256) NOT NULL,
    `title` varchar(256) NOT NULL,
    `email` varchar(512) NOT NULL,
    `address1` varchar(512) NOT NULL,
    `address2` varchar(512) NOT NULL,
    `city` varchar(256) NOT NULL,
    `state` varchar(2) NOT NULL,
    `zip` varchar(5) NOT NULL,
    `officePhone` varchar(32) NOT NULL,
    `mobilePhone` varchar(32) NOT NULL,
    `eaName` varchar(256) NOT NULL,
    `eaEmail` varchar(256) NOT NULL,
    `eaOfficePhone` varchar(32) NOT NULL,
    `eaMobilePhone` varchar(32) NOT NULL,
    `emergencyName` varchar(512) NOT NULL,
    `emergencyPhone` varchar(32) NOT NULL,
    `foodDiet` varchar(1024) DEFAULT NULL,
    `specialNeeds` varchar(1024) DEFAULT NULL,
    `jacketSize` varchar(256) NOT NULL,
    `flightType` varchar(128) NOT NULL,
    `arrivalDate` varchar(256) NOT NULL,
    `arrivalAirport` varchar(256) NOT NULL,
    `arrivalFlightNum` varchar(256) NOT NULL,
    `departureDate` varchar(256) NOT NULL,
    `departureAirport` varchar(256) NOT NULL,
    `departureFlightNum` varchar(256) NOT NULL,
    `arrivalAirline` varchar(256) NOT NULL,
    `originCity` varchar(256) NOT NULL,
    `arrivalConnectionInfo` varchar(1024) DEFAULT NULL,
    `departureAirline` varchar(256) NOT NULL,
    `destinationCity` varchar(256) NOT NULL,
    `departureConnectionInfo` varchar(1024) DEFAULT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `holiday_company` (
    `company_id` int(11) NOT NULL,
    `company_name` varchar(128) NOT NULL,
    `company_guest` tinyint(1) NOT NULL,
    PRIMARY KEY (`company_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `holiday_failed` (
    `failed_id` int(11) NOT NULL,
    `failed_user` varchar(128) NOT NULL,
    `failed_query` varchar(1024) NOT NULL,
    PRIMARY KEY (`failed_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'CREATE TABLE IF NOT EXISTS `holiday_main` (
    `main_id` int(11) NOT NULL,
    `main_dateEntry` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `main_hashKey` varchar(128) DEFAULT NULL,
    `main_userAgent` varchar(1024) DEFAULT NULL,
    `main_userIP` varchar(128) DEFAULT NULL,
    `main_firstName` varchar(256) DEFAULT NULL,
    `main_lastName` varchar(256) DEFAULT NULL,
    `main_email` varchar(256) DEFAULT NULL,
    `main_company` varchar(128) DEFAULT NULL,
    `main_attending` varchar(128) DEFAULT NULL,
    `main_guest` varchar(128) DEFAULT NULL,
    `main_guestName` varchar(512) DEFAULT NULL,
    PRIMARY KEY (`main_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'ALTER TABLE `activity_artGallery`
    MODIFY `artGallery_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_dogSledding`
    MODIFY `dogSledding_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_failed`
    MODIFY `failed_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_flyFishing`
    MODIFY `flyFishing_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_foodTour`
    MODIFY `foodTour_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_hiking`
    MODIFY `hiking_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_iceSkating`
    MODIFY `iceSkating_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_key`
    MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_main`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_skeetShooting`
    MODIFY `skeetShooting_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_skiing`
    MODIFY `skiing_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_snowboarding`
    MODIFY `snowboarding_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_snowshoeing`
    MODIFY `snowshoeing_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `activity_spa`
    MODIFY `spa_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `data`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `holiday_company`
    MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `holiday_failed`
    MODIFY `failed_id` int(11) NOT NULL AUTO_INCREMENT;',
  'ALTER TABLE `holiday_main`
    MODIFY `main_id` int(11) NOT NULL AUTO_INCREMENT;',
  'TRUNCATE TABLE `activity_key`;',
  <<< 'EOD'
  INSERT INTO `activity_key` (`key_id`, `key_name`, `key_alias`) VALUES
  (0, 'No Activity', 'noactivity'),
  (1, 'Skiing', 'skiing'),
  (2, 'Snowboarding', 'snowboarding'),
  (3, 'Snowshoeing', 'snowshoeing'),
  (4, 'Dog Sledding', 'dogSledding'),
  (5, 'Ice Skating', 'iceSkating'),
  (6, 'Trap & Skeet Shooting', 'skeetShooting'),
  (7, 'Fly Fishing', 'flyFishing'),
  (8, 'Hiking', 'hiking'),
  (9, 'Aspen Art Gallery', 'artGallery'),
  (10, 'Little Gems Food Tour', 'foodTour'),
  (11, 'Spa Service', 'spa');
EOD
);
