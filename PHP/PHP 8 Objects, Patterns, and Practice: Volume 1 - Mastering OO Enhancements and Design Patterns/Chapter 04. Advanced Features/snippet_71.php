<?php

public static function init(): void
{
    try {
        $fh = fopen("/tmp/log.txt", "a");
        fputs($fh, "start\n");
        $conf = new Conf(dirname(__FILE__) . "/conf.broken.xml");
        print "user: " . $conf->get('user') . "\n";
        print "host: " . $conf->get('host') . "\n";
        $conf->set("pass", "newpass");
        $conf->write();
        fputs($fh, "end\n");
        fclose($fh);
    } catch (FileException $e) {
        // permissions issue or non-existent file
        fputs($fh, "file exception\n");
        throw $e;
    } catch (XmlException $e) {
        fputs($fh, "xml exception\n");
        // broken xml
    } catch (ConfException $e) {
        fputs($fh, "conf exception\n");
        // wrong kind of XML file
    } catch (\Exception $e) {
        fputs($fh, "general exception\n");
        // backstop: should not be called
    }
}
