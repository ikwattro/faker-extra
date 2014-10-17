<?php

namespace Ikwattro\FakerExtra\Tests\Provider;

use Ikwattro\FakerExtra\Provider\Hashtag;
use Faker\Factory;

class HashtagTest extends \PHPUnit_Framework_TestCase
{
    public function testHashtagProvider()
    {
        $faker = Factory::create();
        $faker->addProvider(new Hashtag($faker));

        $hashtags = Hashtag::getHashtags();
        $hashtag = $faker->hashtag;

        $this->assertTrue(in_array($hashtag, $hashtags));
    }
}