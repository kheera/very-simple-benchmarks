<?php

include "config.php";


/**
 * local devbox tests (on vagrant/windows shared folder)
 * Operation completed in 47.451869010925 seconds, created 875k file.
 * Operation completed in 38.676474094391 seconds
 * Operation completed in 37.976819992065 seconds
 * Operation completed in 38.167409896851 seconds
 *
 * local dev box (on vagrant ubuntu folder)
 * Operation completed in 0.047478914260864 seconds
 *
 * amazon ec2 ssd tests
 * Operation completed in 0.07337498664856 seconds
 * amazon ec2 iops 
 * Operation completed in 0.077187061309814 seconds
 */
$max = 10000;

$start = microtime(true);;
for ($i=0; $i < $max; $i++) { 
	file_put_contents("$filedir/$filename_write", "row $i" . PHP_EOL, FILE_APPEND);
}
echo sprintf("Operation completed in %s seconds". PHP_EOL, microtime(true) - $start);
