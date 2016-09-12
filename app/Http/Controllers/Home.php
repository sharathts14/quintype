<?php
/**
 * Created by PhpStorm.
 * User: Sharath TS
 * Date: 30-08-2016
 * Time: 20:41
 */
namespace App\Http\Controllers;

use App\Http\Controllers\MY_Controller;
use App\Http\Modals\M_getAPI;
use Illuminate\Support\Facades\View;

Class Home extends MY_Controller
{
    public function __construct() {
        parent::__construct();
    }
    public function view()
    {
        $story = new M_getAPI();
        $contents = $story->getStories();

        $config = $story->getConfig();

        return View::make('quintype/v_home',
            [
               'contents' => $contents,
                'config' => $config,
            ]);
    }
}

?>