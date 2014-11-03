<?php

namespace Faker\Provider\zh_CN;

class Image extends \Faker\Provider\Image
{
    public static function avatar($width = 50, $height = 50, $category = null)
    {
        return $url = "http://robohash.org/{$width}/{$height}/";
    }
}