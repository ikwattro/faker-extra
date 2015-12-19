<?php

namespace Ikwattro\FakerExtra\Tests\Provider;

use Faker\Factory;
use Ikwattro\FakerExtra\Provider\GeoLocation;

/**
 * Class GeoLocationTest
 * @package Ikwattro\FakerExtra\Tests\Provider
 *
 * @group geolat
 */
class GeoLocationTest extends \PHPUnit_Framework_TestCase
{
    public function testGeoLat()
    {
        $faker = Factory::create();
        $faker->addProvider(new GeoLocation($faker));

        $lat = $faker->geoLat();
        $this->assertTrue(-90 <= $lat);
        $this->assertTrue(90 >= $lat);

        $lat2 = $faker->geoLat(50, 75);
        $this->assertTrue(50 <= $lat2);
        $this->assertTrue(75 >= $lat2);
    }

    public function testGeoLon()
    {
        $faker = Factory::create();
        $faker->addProvider(new GeoLocation($faker));

        $lon = $faker->geoLon();
        $this->assertTrue(-180 <= $lon);
        $this->assertTrue(180 >= $lon);

        $lon2 = $faker->geoLon(3, 9);
        $this->assertTrue(3 <= $lon2);
        $this->assertTrue(9 >= $lon2);
    }
}