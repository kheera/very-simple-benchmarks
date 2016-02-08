<?php

include "config.php";


// Operation completed in 47.451869010925 seconds, created 875k file.
// Operation completed in 38.676474094391 seconds
// Operation completed in 37.976819992065 seconds
// Operation completed in 38.167409896851 seconds
$max = 10000;

$start = microtime(true);;
for ($i=0; $i < $max; $i++) { 
	file_put_contents("$filedir/$filename_write", "row $i" . PHP_EOL, FILE_APPEND);
}
echo sprintf("Operation completed in %s seconds". PHP_EOL, microtime(true) - $start);
