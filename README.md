# Faker Extra Providers

Extra providers for the [Faker Library](https://github.com/fzaninotto/faker) .

## Installation

With composer :

```bash
composer require ikwattro/faker-extra
```

Add the needed providers to the generator :

```php
$faker = new \Faker\Generator();
$faker->addProvider(new \Ikwattro\FakerExtra\Provider\Skill($faker));
```

## \FakerExtra\Provider\Skill

### programming languages

Based on the Wikipedia list of programming languages http://en.wikipedia.org/wiki/List_of_programming_languages

```
$language = $faker->progLanguage;

// e.g.: Cobolt
```

## \FakerExtra\PersonExtra

### fullName

Use the base \Person provider to generate a name containing a firstName and a lastName

```
$fullname = $faker->fullName;

// e.g. : Duncan Satterfield
```

---

#### Author

Christophe Willemsen : [twitter](https://twitter.com/ikwattro)

---

#### License

Released under the MIT License
