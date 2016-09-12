<?php
/**
 * Created by PhpStorm.
 * User: Sharath TS
 * Date: 12-09-2016
 * Time: 11:24
 */
namespace App\Http\Controllers;

use App\Http\Modals\M_config;

class MY_Controller extends Controller
{
    public function __construct()
    {

        //initialize the m_config model to get all the defined global variables
        $config_modal = new M_config();
        $config_modal->config();
    }
}
?>