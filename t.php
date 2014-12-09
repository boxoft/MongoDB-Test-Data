<?php

$filename = 'zips.json';
$contents = file_get_contents($filename);

$pattern = '/^(.*) \[\s*(-?\b[0-9]*\.?[0-9]+\b),\s*(-?\b[0-9]*\.?[0-9]+\b)\s*](.*)$/mx';
$replacement = '$1{ \'latitude\' : $2, \'longitude\' : $3 }$4';
$result = preg_replace($pattern, $replacement, $contents);

$filename = 'zips-embedded-documents.json';
file_put_contents($filename, $result);
