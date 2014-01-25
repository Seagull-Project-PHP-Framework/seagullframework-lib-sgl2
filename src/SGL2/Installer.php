<?php

namespace SGL2;

use SGL2\Bootstrap;

class Installer
{
    public static function postInstall()
    {
        // run any post install tasks here
        $b = new Bootstrap();
        $b->init();

        $moduleDirComposer = SGL_PATH .'/vendor/seagullframework';
        $aModuleList = array('block', 'default', 'navigation', 'user');

        foreach ($aModuleList as $module) {
            $modulePath = $moduleDirComposer . "/module-$module/src/$module";
            // link modules in module dir
            $ret = symlink($modulePath, SGL_MOD_DIR ."/$module");
        }
    }

    public static function preInstall()
    {
        // run any pre install tasks here

    }
}