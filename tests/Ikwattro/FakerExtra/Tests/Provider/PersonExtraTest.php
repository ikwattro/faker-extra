<?php

namespace Ikwattro\FakerExtra\Tests\Provider;

use Ikwattro\FakerExtra\Provider\PersonExtra;
use Faker\Factory;

class PersonExtraTest extends \PHPUnit_Framework_TestCase
{
    public function testSkillFormatter()
    {
        $faker = Factory::create();
        $faker->addProvider(new PersonExtra($faker));

        $fullName = $faker->fullName();

        print_r($fullName);
    }
}