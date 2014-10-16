<?php

namespace Ikwattro\FakerExtra\Tests\Provider;

use Ikwattro\FakerExtra\Provider\Skill;
use Faker\Generator;

class SkillTest extends \PHPUnit_Framework_TestCase
{
    public function testSkillFormatter()
    {
        $faker = new Generator();
        $faker->addProvider(new Skill($faker));

        $skills = Skill::getProgLanguages();
        $skill = $faker->progLanguage;

        $this->assertTrue(in_array($skill, $skills));
    }
}