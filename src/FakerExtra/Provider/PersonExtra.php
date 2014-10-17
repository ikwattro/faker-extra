<?php

namespace Ikwattro\FakerExtra\Provider;

use Faker\Provider\Base as BaseProvider;

class PersonExtra extends BaseProvider
{

    public function fullName()
    {
        $firstname = $this->generator->firstName();
        $lastname = $this->generator->lastName();

        return $firstname.' '.$lastname;
    }
}