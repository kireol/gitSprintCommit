<?php 
date_default_timezone_set('UTC');
$startSprint=17;
$wantedSprint=$argv[1];
$diff=($wantedSprint-$startSprint-1)*2; 
echo date('Y-m-d h:i:s', strtotime('+'.$diff.' weeks', mktime(10, 0, 0, 7, 8, 2014)));
