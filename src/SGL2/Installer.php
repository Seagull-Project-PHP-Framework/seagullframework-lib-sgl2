<?php

namespace SGL2;

use SGL2\Bootstrap;

class Installer
{

    // load sgl environment
    // determine root path
    // symlink
    //      - each of 4 modules

    public static function postInstall() {

        error_reporting(E_ALL ^ E_DEPRECATED);
//        error_log("test message", 3, "/tmp/DEMIANS_LOG.txt");

        // run any post install tasks here
//        file_put_contents("/tmp/FOO2", "test");
        $b = new Bootstrap();
        $b->init();


    }

    public static function preInstall() {
        // run any post install tasks here
        file_put_contents("/tmp/FOO1", "test");
    }
}