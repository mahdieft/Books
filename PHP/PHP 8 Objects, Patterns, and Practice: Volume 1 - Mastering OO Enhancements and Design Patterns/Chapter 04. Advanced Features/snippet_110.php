<?php

$person = new Person();
$person->output(
    new class ("/tmp/persondump") implements PersonWriter {
        private string $path;

        public function __construct(string $path)
        {
            $this->path = $path;
        }

        public function write(Person $person): void
        {
            file_put_contents($this->path, $person->getName() . " " . $person->getAge() . "\n");
        }
    }
);
