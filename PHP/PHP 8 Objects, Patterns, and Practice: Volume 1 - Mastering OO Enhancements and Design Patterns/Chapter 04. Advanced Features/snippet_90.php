<?php

$person = new Person("bob", 44);
$person->setId(343);
unset($person);
print "unset complete\n";
