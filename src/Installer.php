<?php

namespace MyProject;

class Installer
{
    public static function preInstall() {
        // run any post install tasks here
        file_put_contents("/tmp/FOO1", "test");
    }

    public static function postInstall() {
        // run any post install tasks here
        file_put_contents("/tmp/FOO2", "test");
    }
}