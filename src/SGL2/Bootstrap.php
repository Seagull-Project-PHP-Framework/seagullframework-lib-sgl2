<?php
/**
 * Created by PhpStorm.
 * User: demian
 * Date: 23/01/2014
 * Time: 17:56
 */

namespace SGL2;


class Bootstrap extends SGL_FrontController
{
    public static function init()
    {
        if (!defined('SGL_INITIALISED')) {
            SGL_FrontController::init();
        }
        //  assign request to registry
        $input = SGL_Registry::singleton();
        $req = SGL_Request::singleton();

        if (PEAR::isError($req)) {
            //  stop with error page
            SGL::displayStaticPage($req->getMessage());
        }
        $input->setRequest($req);
        $output = new SGL_Output();

        $process =  new SGL_Task_Init(
            new SGL_Task_DiscoverClientOs(
                new SGL_Task_MinimalSession(
                    new SGL_Task_SetupLangSupport(
                        new SGL_Void()
                    ))));

        $process->process($input, $output);
    }
} 