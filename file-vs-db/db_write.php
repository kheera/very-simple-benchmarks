<?php

include "config.php";

/**
 * local dev box
 * Results using the same connection for each write
 *
 * Operation completed in 1.749293088913 seconds
 * Operation completed in 1.7555520534515 seconds
 * Operation completed in 1.7814030647278 seconds
 * Operation completed in 1.7576200962067 seconds
 *
 *
 * Results opening and closing the connection for each write.
 * Operation completed in 3.1724500656128 seconds
 * Operation completed in 2.5205681324005 seconds
 * Operation completed in 2.520437002182 seconds
 * Operation completed in 2.5529029369354 seconds
 *
 * amazon ec2 results
 * Operation completed in 16.108047962189 seconds
 */
$max = 10000;
$start = microtime(true);;

for ($i=0; $i < $max; $i++) { 
  $link = mysqli_connect($host, $dbuser, $dbpass, $db);
  mysqli_query($link, "insert into $table values (null, 'a bunch of random text', $i)");   
  mysqli_close($link);
}

echo sprintf("Operation completed in %s seconds". PHP_EOL, microtime(true) - $start);
