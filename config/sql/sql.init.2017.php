<?php

$sql_init = array(
  // setup SQL settings
  'SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";',
  'SET time_zone = "+00:00";',
  // activity key (make sure to mark your paragraphs in key_desc)
  'CREATE TABLE IF NOT EXISTS `activity_key` (
    `key_id` int(11) NOT NULL,
    `key_name` varchar(128) NOT NULL,
    `key_alias` varchar(128) NOT NULL,
    `key_desc` varchar(2048) NOT NULL,
    PRIMARY KEY (`key_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'ALTER TABLE `activity_key`
    MODIFY `key_id` int(11) NOT NULL AUTO_INCREMENT;',
  
  // 0 - no activity 
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (0, 'No Activity', 'noactivity', 'nothing to see')",
  
  // 1 - Hot Air Balloon
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
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
  );",
  'CREATE TABLE IF NOT EXISTS `activity_balloon` (
    `balloon_id` int(11) NOT NULL,
    `balloon_choiceNum` varchar(128) DEFAULT NULL,
    `balloon_comfort` varchar(128) DEFAULT NULL,
    `balloon_comfortInfo` varchar(1024) DEFAULT NULL,
    `balloon_user` varchar(256) NOT NULL,
    `balloon_injuries` varchar(128) DEFAULT NULL,
    `balloon_injuryInfo` varchar(1024) DEFAULT NULL,
    PRIMARY KEY (`balloon_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'ALTER TABLE `activity_balloon`
    MODIFY `balloon_id` int(11) NOT NULL AUTO_INCREMENT;',

  // 2 - Hockory Golf Experience
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (2, 'Hickory Golf Experience', 'hickoryGolf',
    '<p>
      Hickory golf is the most organic way to play golf. It is golf played with authentic equipment 
      used more than one hundred years ago. Before there were titanium golf clubs and steel/graphite shafts, 
      players used clubs made from hickory. Before there were synthetic covers and multi-compound layered 
      golf balls there were “featheries” and “guttys” made from feathers, leather and later tree sap. 
      The game was a romantic waltz between the player, nature and primitive tools.
    </p>'
  );",
   'CREATE TABLE IF NOT EXISTS `activity_hickoryGolf` (
    `hickoryGolf_id` int(11) NOT NULL,
    `hickoryGolf_user` varchar(256) NOT NULL,
    `hickoryGolf_choiceNum` varchar(128) DEFAULT NULL,
    `hickoryGolf_handed` varchar(128) DEFAULT NULL,
    `hickoryGolf_handicap` varchar(128) DEFAULT NULL,
    `hickoryGolf_average` varchar(128) DEFAULT NULL,
    `hickoryGolf_injuries` varchar(128) DEFAULT NULL,
    `hickoryGolf_injuryInfo` varchar(1024) DEFAULT NULL,
    PRIMARY KEY (`hickoryGolf_id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;',
  'ALTER TABLE `activity_hickoryGolf`
    MODIFY `hickoryGolf_id` int(11) NOT NULL AUTO_INCREMENT;',
    
  // 3 - Sip 'N Cycle
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (3, 'Sip ‘N Cycle', 'sipNcycle',
    '<p>
      This tour takes in the best of the best in the Napa Valley.  The Sip n Cycle route is geared towards 
      “Energetic Beginners” and is mainly flat with only a few rolling hills here and there. Typically, the 
      distance traveled is approximately 12 miles at a moderate pace, with stops about every four miles.
    </p>
    <p>
      Bike to 3 wineries, all unique in their own way, along the quiet back roads of Calistoga.  Stop in and 
      get a “Grapes 101” along the way, pop in and taste wines and learn a lot about how to sip, swirl, and 
      taste all the wines. Your guides act as a chef, wine educator, concierge, confidant and Sherpa all wrapped 
      up in one. A delicious wine country picnic lunch will be prepared at one of the wineries. 
    </p>
    <p>Tour includes use of a Hybrid bike and helmet, unlimited water, Wine Country picnic lunch.</p>'
  );",

  // 4 - Tennis
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (4, 'Tennis', 'tennis',
    '<p>
      Doug King is the resident tennis pro at Meadowood. Founder of Acceleration Tennis, a revolutionary teaching 
      system, King is leading the way in reinterpreting the traditional tennis model, working with players of all 
      skill levels from beginner to professional. Private or small-group lessons, with a maximum of four students 
      per pro, can be arranged. These sessions are tailored to students needs, skill level and physical condition, 
      as well as to the skills they want to improve. Players of all levels can benefit from the Acceleration Tennis 
      program.
    </p>'
  );",

  // 5 - Horseback Riding
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (5, 'Horseback Riding', 'horsebackRiding',
    '<p>
      Experience the Napa Valley from the original rancher’s perspective - riding through the vineyards on horseback! 
      Once you arrive you will be greeted at our visitor center and guided over to the western barn. Here you will get 
      saddled up with a horse picked specially for you. Enjoy our quality trained horses as they introduce you to the 
      tranquility of country life, helping you to leave city stress far behind. This 30 minute guided trail ride is a 
      fantastic way to take in the breathtaking vistas of the Rapp Ranch Estate and the surrounding hills of Coombsville.
    </p>'
  );",

  // 6 - Hiking at Meadowwood Resort
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (6, 'Hiking at Meadowood Resort', 'hikingMeadowood',
    '<p>
      The crown jewel of the grounds is the Meadowood Loop, just over 4 miles of scenic hiking trails that wind 
      through the woods, rising to heights of more than 600 feet and culminating in breathtaking views of Napa Valley. 
      The Meadowood Loop follows the same path that many deer created years ago while meandering through the woods on 
      the estate. Hikers can admire a multitude of the regions plants and trees as they follow the Loop up its Eastern 
      paths, where California buckeye, coast live oaks, as well as native scrub like chaparral, manzanita and chamise 
      are plentiful. These give way to stately Douglas fir trees as the trail ascends to reveal panoramas of the 
      neighboring Mayacamas Mountains, the city of St. Helena and Napa Valleys ever-present vineyards at its crest. 
      The trail meanders gradually back down toward gentler terrain on the western slopes of the resort, which are 
      dominated by black oak and more Douglas firs with a tangle of wild rose and bracken fern at their bases.
    </p>'
  );",

  // 7 - Hiking at Bothe
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (7, 'Hiking at Bothe ', 'hikingBothe',
    '<p>
      Starting out at Bothe State Park in Napa Valley, the Coyote peak trail is a moderate hike on a well-maintained 
      dirt path. The trail winds gradually up to the peak, passing through redwoods, oaks, manzanitas and madrone trees. 
      The final assent to the peak is a little steeper than the rest of the trail but offers beautiful views of the valley 
      below, through the wide variety of local trees and a great place to stop for lunch. The descent back to the 
      trailhead once again offers a chance to explore the local habitats of the Napa Valley, with deer, osprey, egret, 
      wild turkey and many others.
    </p>'
  );",

  // 8 - Spa Treatement
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (8, 'Spa Treatment', 'spa',
    '<p>
      The Meadowood Spa has won the hospitality industry’s highest honor of Five-Stars from the Forbes Travel Guide 
      just fifteen months after opening its doors in November 2015.  It is one of nine spas to have achieved Five-Star 
      honors this year, as well as the first Five-Star spa in the Napa Valley.
    </p>'
  );",

  // 9 - Croquet
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (9, 'Croquet', 'croquet',
    '<p>
      Play the grown-up version of the backyard game of croquet! Challenging, exciting and fun, competitive croquet 
      has -- for more than a century -- drawn an interesting mix of enthusiasts including the likes of Alexander 
      Woollcott, Sam Goldwyn and Clark Gable. Meadowood debuted its competition lawns in 1986 and hosted the U.S. 
      Croquet Championships the same year. Gear up in your pristine white sweater and get ready to play!
    </p>'
  );",

  // 10 - Group Wine Experience
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (10, 'Group Wine Experience', 'wine',
    '<p>
      Train your palate by matching specific flavors often found in wines to the wines themselves. Learn specific 
      flavor profiles associated with popular varietals and also those added by common winemaking techniques, such 
      as barrel aging in oak. You will learn how to critically evaluate wines the way professionals do by analyzing 
      visual, flavor and structural elements to assess the quality of a wine. We will look at classically styled 
      wines from around the world to determine benchmarks against which tasters can compare new wines. Learn how 
      decisions made in the vineyard and in the winery affect the flavors of the wine. By learning the insider 
      secrets of tasting you can demystify wine and make informed, confident buying decisions.
    </p>'
  );",

  // 11 - Group Golf Tournament
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (11, 'Group Golf Tournament', 'golfTournament',
    '<p>
      The Meadowood Golf Course is a 9-hole walking course and offers immaculate playing surfaces and ideal 
      conditions for year-round play. Par 3 Shootout is an excellent way to experience a taste of competition 
      and camaraderie while having plenty of time to experience the rest of the property’s activities. The golf 
      course will be set up to be a gamester’s paradise played as nine par 3 holes. Avid golfers can take dead 
      aim while the less experienced will appreciate the manageability of the shortened distances.
    </p>'
  );",

  // 12 - Mixology Experience
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (12, 'Mixology Experience', 'mixology',
    '<p>
      Experience a hands-on cocktail making class led by Meadowood’s own mixologist, Scott Beattie, who authored 
      “Artisanal Cocktails” and fostered the craft cocktail movement. Scott will cover basic techniques for 
      re-creating perfect cocktails in your home bar. He will discuss proper juicing, when to shake versus when 
      to stir, making hand-cut, crystal clear ice cubes, stenciling bitters on egg white foam and incorporating 
      fresh herbs and edible flowers into your drinks. 
    </p>'
  );",

  // 13 - Golf Studio Experience
  "INSERT IGNORE INTO `activity_key` (`key_id`, `key_name`, `key_alias`, `key_desc`) VALUES
  (13, 'Golf Studio Experience', 'golfStudio',
    '<p>
      In the Meadowood Golf Studio, you can experience the most innovative teaching and player development 
      technologies in the game today. Witness your golf shots fly out of our Golf Studio and soar onto the 
      beautiful practice fairways. Located on the southwestern edge of our golf course, the Golf Studio 
      possesses stunning views that only add to your special event. It is here, you will realize your true 
      golfing potential. Resident Golf Professional Doug Pike and his team will take you through a variety 
      of player development services including club fitting with top golf club manufacturers, swing analyses 
      and review, and special competitions including Closest to the Hole and Long Drive challenges.
    </p>'
  );"
);

