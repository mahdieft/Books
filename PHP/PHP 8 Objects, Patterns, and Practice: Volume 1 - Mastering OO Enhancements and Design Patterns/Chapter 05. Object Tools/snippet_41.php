<?php

$base = __DIR__;
$classname = "Task";
$path = "{$base}/tasks/{$classname}.php";
if (!file_exists($path)) {
    throw new \Exception("No such file as {$path}");
}

require_once($path);
$qclassname = "tasks\\$classname";

if (!class_exists($qclassname)) {
    throw new \Exception("No such class as $qclassname");
}
$myObj = new $qclassname();
$myObj->doSpeak();
