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
        $hashs = $faker->hashtag(3);

        $expl = explode(',', $hashs);
        foreach ($expl as $ha){
            $this->assertTrue(in_array($ha, $hashtags));
        }

    }

    public function testHashtagProviderWithHash()
    {
        $faker = Factory::create();
        $faker->addProvider(new Hashtag($faker));

        $hashtags = Hashtag::getHashtags(true);
        $hashtag = $faker->hashtag(1, true);

        $this->assertTrue(in_array($hashtag, $hashtags));
        $hashs = $faker->hashtag(3, true);

        $expl = explode(',', $hashs);
        foreach ($expl as $ha){
            $this->assertTrue(in_array($ha, $hashtags));
        }

    }
}