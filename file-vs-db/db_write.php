<?php

include "config.php";

/**
 * local dev box (on vagrant/windows shared folder)
 * Operation completed in 3.1724500656128 seconds
 * Operation completed in 2.5205681324005 seconds
 * Operation completed in 2.520437002182 seconds
 * Operation completed in 2.5529029369354 seconds
 *
 * local devbox (on vagrant ubuntu folder)
 * Operation completed in 2.5279829502106 seconds
 * 
 * amazon ec2 (ubuntu) SSD  (local mysql db)
 * Operation completed in 16.108047962189 second
 * 
 * amazon ec2 (ubuntu) iops  (local mysql db)
 * Operation completed in 126.9714589119 seconds
 * Operation completed in 123.20124387741 seconds
 *
 * amazon ec2  (ubuntu) w/ rds
 * Operation completed in 81.073271036148 seconds
 * Operation completed in 60.2401471138 seconds (using persistant mysql connections)
 *
 * amazon ec2 aws linux
 * Operation completed in 11.50927901268 seconds
 * Operation completed in 11.394139051437 seconds
 * Operation completed in 11.38157916069 seconds
 */
$max = 10000;
$start = microtime(true);;

for ($i=0; $i < $max; $i++) { 
  $link = mysqli_connect($host, $dbuser, $dbpass, $db);
  mysqli_query($link, "insert into $table values (null, 'a bunch of random text', $i)");   
  mysqli_close($link);
}

echo sprintf("Operation completed in %s seconds". PHP_EOL, microtime(true) - $start);
