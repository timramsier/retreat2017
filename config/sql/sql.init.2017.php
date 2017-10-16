<?php

$sql_init = array(
  // setup SQL settings
  'SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";',
  'SET time_zone = "+00:00";',
  // activity key
  'CREATE TABLE IF NOT EXISTS `activity_key` (
    `key_id` int(11) NOT NULL,
    `key_name` varchar(128) NOT NULL,
    `key_alias` varchar(128) NOT NULL,
    `key_desc` varchar(1024) NOT NULL,
    PRIMARY KEY (`key_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'ALTER TABLE `activity_key`
    MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT;',
  <<< 'EOD'
  INSERT INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (0, 'No Activity', 'noactivity', 'nothing to see'),
  (1, 'Hot Air Balloon Ride', 'balloon',
  '<p>
    Start your morning with a breathtaking hot air balloon flight over the glorious Napa 
    Valley. Upon landing you will be transported to the Oxbow Public Market for your brunch 
    held on the patio of C Casa, served to you along with fresh squeezed orange juice 
    and Champagne!
  </p>
  <p>
    Please note that there is a minimum requirement of 10+ people in order to book this activity.
    All flights are subject to weather and FAA regulations that insure optimum safety for the group.
  </p>'
  ),
  (2, 'Hickory Golf Experience', 'hickoryGolf',
  '<p>
    Hickory golf is the most organic way to play golf. It is golf played with authentic equipment 
    used more than one hundred years ago. Before there were titanium golf clubs and steel/graphite shafts, 
    players used clubs made from hickory. Before there were synthetic covers and multi-compound layered 
    golf balls there were “featheries” and “guttys” made from feathers, leather and later tree sap. 
    The game was a romantic waltz between the player, nature and primitive tools.
  </p>'
  ),
  (3, 'Sip ‘N Cycle', 'sipNcycle'),
  (4, 'Tennis', 'tennis'),
  (5, 'Horseback Riding', 'horsebackRiding'),
  (6, 'Hiking at Meadowood Resort', 'hikingMeadowood'),
  (7, 'Hiking at Bothe ', 'hikingBothe'),
  (8, 'Spa Treatment', 'spa'),
  (9, 'Croquet', 'croquet'),
  (10, 'Group Wine Experience', 'wine'),
  (11, 'Golf Tournament', 'golfTournament'),
  (12, 'Mixology Experience', 'mixology'),
  (13, 'Golf Studio Experience', 'golfStudio');
EOD
);

