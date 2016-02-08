<?php

include "config.php";

/**
 * local devbox
 *
 * Operation completed in 0.66953277587891 seconds
 * Operation completed in 0.69946002960205 seconds
 * Operation completed in 0.7011890411377 seconds
 * Operation completed in 0.73265790939331 seconds
 * Operation completed in 0.70617413520813 seconds
 * 
 * amazon ec2
 * Operation completed in 0.76090002059937 seconds
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
