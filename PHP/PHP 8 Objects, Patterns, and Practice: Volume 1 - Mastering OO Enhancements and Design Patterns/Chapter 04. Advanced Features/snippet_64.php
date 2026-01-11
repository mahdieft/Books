<?php

class Conf
{
    private \SimpleXMLElement $xml;
    private \SimpleXMLElement $lastmatch;

    public function __construct(private string $file)
    {
        if (!file_exists($file)) {
            throw new \Exception("file '{$file}' does not exist");
        }
        $this->xml = simplexml_load_file($file);
    }

    public function write(): void
    {
        if (!is_writeable($this->file)) {
            throw new \Exception("file '{$this->file}' is not writeable");
        }
        print "{$this->file} is apparently writeable\n";
        file_put_contents($this->file, $this->xml->asXML());
    }
}

try {
    $conf = new Conf("/tmp/conf01.xml");
    print "user: " . $conf->get('user') . "\n";
    print "host: " . $conf->get('host') . "\n";
    $conf->set("pass", "newpass");
    $conf->write();
} catch (\Exception $e) {
// handle error in some way
}
