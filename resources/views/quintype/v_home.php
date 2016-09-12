<?php
/**
 * Created by PhpStorm.
 * User: Sharath TS
 * Date: 30-08-2016
 * Time: 21:02
 */

$stories = $contents->stories;

//define all array
$author_name = array();
$headline = array();
$slug = array();
$last_published_at = array();
$section_id = array();
$section_name = array();
$hero_img_width = array();
$hero_img_height = array();
//$hero_img_mimetype = array();
//$published_at = array();
$hero_image_s3_key = array();
$first_published_at = array();
$story_template = array();

//init. all array
foreach($stories as $k1 => $v1)
{
    $author_name[] =  $v1->{'author-name'};
    $headline[] = $v1->headline;
    $slug[] = $v1->slug;
    $last_published_at[] = $v1->{'last-published-at'};

    $sections = $v1->sections;
    foreach($sections as $k2 => $v2)
    {
        $section_id[] = $v2->id;
        $section_name[] = $v2->name;
    }
    $hero_img_width[] = $v1->{'hero-image-metadata'}->width/2;
    $hero_img_height[] = $v1->{'hero-image-metadata'}->height;
    //$hero_img_mimetype[] = $v1->{'hero-image-metadata'}->{'mime-type'};

    //$published_at = $v1->{'published_at'};

    $hero_image_s3_key[] = "http://quintype-01.imgix.net/".$v1->{'hero-image-s3-key'};
    $first_published_at[] = $v1->{'first-published-at'};
    $story_template[] = $v1->{'story-template'};
}

?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php
            echo 'Quintype'?>
        </title>
        <!--- stylesheets  -->
        <link href="<?= CSS_DIR?>/style.css" rel="stylesheet" />
        <link href="<?= CSS_DIR?>/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?= CSS_DIR?>/font-awesome.min.css">

        <script src="<?= JS_DIR?>/jquery-1.9.1.min.js" type="text/javascript"></script>
    </head>
    <body>
    <style>
        .hero-img-container {
            position: relative;
        }
        .bottom-text-on-img{
            position:absolute;
            bottom: 30%;
            left: 15%;
            color: #ffffff;
            z-index: 100;
        }
    </style>
        <div class="container-fluid" style="background-color: lightgray">
            <!--- Start of Row Fluid Class --->
            <div class="row-fluid">
                <div>
                    <?php
                        for($x = 0;$x <= count($hero_image_s3_key);$x++)
                        {
                            if($x == 0)
                            { ?>
                                <div class="hero-img-container">
                                    <img style='width: 100%' src='<?=$hero_image_s3_key[$x]?>'/>
                                    <div class="bottom-text-on-img">
                                        <span class="label label-danger" style="font-size: 100%"><?=$section_name[$x]?></span>
                                        <p style="font-size: 300%"><?=$headline[$x]?></p><br/>
                                        <p style="color: red"><i><?=$author_name[$x]?></i></p>
                                    </div>
                                </div><br/><br/>
                            <?php
                            }
                            elseif($x <= 19 )
                            { ?>
                                <div class="row">
                                    <div style="padding-left: 10%">
                                        <div class="col-md-6 pull-left" style="background-color: #ffffff">
                                            <div class="col-md-3">
                                                <a><img src='<?= $hero_image_s3_key[$x] ?>' width='150%'></a>
                                            </div>
                                            <div class="col-md-6" style="padding-left: 10%">
                                                <span style="color: inherit;text-transform: uppercase"><?=$section_name[$x]?></span>
                                                <br/>
                                                <h5><?=$headline[$x]?></h5>
                                                <br/>
                                                <h6><?=$author_name[$x]?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                            <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
