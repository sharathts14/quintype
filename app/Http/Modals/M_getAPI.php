<?php
/**
 * Created by PhpStorm.
 * User: Sharath TS
 * Date: 30-08-2016
 * Time: 20:44
 */

namespace App\Http\Modals;

use GuzzleHttp\Client;

class M_getAPI
{
    public function getStories()
    {
        $client = new Client();

        $stories_api = $client->get("http://sketches.quintype.com/api/v1/stories")->getBody();

        $json = \GuzzleHttp\json_decode($stories_api);

        return $json;
    }

    public function getConfig()
    {
        $client = new Client();

        $config_api = $client->get("http://sketches.quintype.com/api/v1/config")->getBody();

        $json = \GuzzleHttp\json_decode($config_api);

        return $json;

    }
}
?>