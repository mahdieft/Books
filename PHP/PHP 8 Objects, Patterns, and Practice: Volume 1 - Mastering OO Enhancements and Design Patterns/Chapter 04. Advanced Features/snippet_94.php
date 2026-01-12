<?php

$person = new Person("bob", 44);
$person->setId(343);
$person2 = clone $person;
