<?php

namespace Ikwattro\FakerExtra\Provider;

use Faker\Provider\Base as BaseProvider;

class GeoLocation extends BaseProvider
{
    public static function geoLat($min = -90, $max = 90)
    {
        return static::randomFloat(6, $min, $max);
    }

    public static function geoLon($min = -180, $max = 180)
    {
        return static::randomFloat(6, $min, $max);
    }
}