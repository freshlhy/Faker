<?php

namespace Faker\Provider\zh_CN;

class Image extends \Faker\Provider\Image
{
    public static function avatar($category = 'people')
    {
        return imageUrl . "{$category}/";
    }
}