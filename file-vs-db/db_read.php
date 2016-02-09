<?php

include "config.php";

/**
 * local devbox (on vagrant/windows shared folder)
 * Operation completed in 0.66953277587891 seconds
 * Operation completed in 0.69946002960205 seconds
 * Operation completed in 0.7011890411377 seconds
 * Operation completed in 0.73265790939331 seconds
 * Operation completed in 0.70617413520813 seconds
 *
 * local devbox (on vagrant ubuntu folder)
 * Operation completed in 0.039722919464111 seconds
 *
 * amazon ec2 ssd
 * Operation completed in 0.76090002059937 seconds
 * amazon ec2 iops
 * Operation completed in 1.0416920185089 seconds
 * Operation completed in 0.79521322250366 seconds
 * Operation completed in 0.66558504104614 seconds
 *
 * amazon ec2 w/ rds
 * Operation completed in 4.8327941894531 seconds
 * Operation completed in 4.9107501506805 seconds
 *
 * amazon ec2 aws linux
 * Operation completed in 0.95765995979309 seconds
 * Operation completed in 0.95629191398621 seconds
 * Operation completed in 0.94154405593872 seconds
 */
$max = 10000;
$largest_table_id = 10000;
$random_numbers = array();

for ($i=0; $i < $max ; $i++) { 
  $random_numbers[] = mt_rand(1, $largest_table_id);
}

$link = mysqli_connect($host, $dbuser, $dbpass, $db);

$start = microtime(true);;

for ($i=0; $i < $max; $i++) { 
  mysqli_query($link, "select * from $table where id = '" . $random_numbers[$i] . "'");   
}

echo sprintf("Operation completed in %s seconds". PHP_EOL, microtime(true) - $start);
