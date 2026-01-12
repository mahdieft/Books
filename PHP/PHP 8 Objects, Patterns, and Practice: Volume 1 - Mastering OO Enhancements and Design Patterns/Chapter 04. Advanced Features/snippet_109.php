<?php

$person = new Person();
$person->output(
    new class implements PersonWriter {
        public function write(Person $person): void
        {
            print $person->getName() . " " . $person->getAge() . "\n";
        }
    }
);
