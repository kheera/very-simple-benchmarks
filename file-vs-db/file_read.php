<?php

include "config.php";

/**
 * local dev box
 */
// Operation completed in 5.8423640727997 seconds
// Operation completed in 5.8720219135284 seconds
// Operation completed in 5.8843641281128 seconds
// Operation completed in 5.8726959228516 seconds
// Operation completed in 5.8997149467468 seconds
/**
 * amazon ec2 ssd
 * Operation completed in 0.058227062225342 seconds
 * amazon ec2 iops
 * Operation completed in 0.058067083358765 seconds
 */
$max = 10000;

$start = microtime(true);;
for ($i=0; $i < $max; $i++) { 
	$s = file_get_contents ("$filedir/$filename_read");
}
echo sprintf("Operation completed in %s seconds". PHP_EOL, microtime(true) - $start);
