<?php

namespace tasks;
class Task
{
    public function doSpeak(): void
    {
        print "hello\n";
    }
}

$classname = "Task";
require_once("tasks/{$classname}.php");

$classname = "tasks\\$classname";
$myObj = new $classname();
$myObj->doSpeak();
