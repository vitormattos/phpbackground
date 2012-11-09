<?php
exec("ps -ef | grep 'process.php' | grep -v grep | awk '{print $2}' | xargs kill -9");
$run = exec("ps -ef | grep 'process.php' | grep -v grep");
if($run) return;
$path = realpath(dirname(__FILE__));
pclose(popen("php $path/process.php > $path/log &", 'r'));



