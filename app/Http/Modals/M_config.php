<?php
/**
 * Created by PhpStorm.
 * User: Sharath TS
 * Date: 30-08-2016
 * Time: 21:02
 *
 * Define all the configuration setting in this modal.
 * This modal can be loaded in MY_Controller to apply this config to all the files
 */
namespace App\Http\Modals;

use App\Http\Modals\MY_Model;

class M_config
{
    public function config(){

        /***** Project Directory Structure Environment Settings  *****/
        defined("Laravel_DIR")
        or define("Laravel_DIR",'C:\Work\xampp\htdocs');

        defined("Laravel_Storage")
        or define("Laravel_Storage",'C:\Work\xampp\htdocs');

        defined("Laravel_Controller")
        or define("Laravel_Controller",'C:\Work\xampp\htdocs');

        defined("MAIN_URL")
        or define("MAIN_URL", 'http://' . $_SERVER['SERVER_NAME'] . ':3000/quintype/server.php');

        defined("MAIN_DIR")
        or define("MAIN_DIR", 'http://' . $_SERVER['SERVER_NAME'] . ':3000/quintype');

        defined("CSS_DIR")
        or define("CSS_DIR", MAIN_DIR . '/resources/assets/quintype/css');  //Stylesheets Path

        defined("JS_DIR")
        or define("JS_DIR", MAIN_DIR . '/resources/assets/quintype/js');  //JavaScript Path

        defined("JQUERYUI_DIR")
        or define("JQUERYUI_DIR", MAIN_DIR . '/resources/assets/quintype/jquery_ui');  //Jquery UI Path

    }
}