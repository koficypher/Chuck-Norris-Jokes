<?php

require 'vendor/autoload.php';

use KofiCypher\ChuckNorrisJokes\JokeFactory;


$factory = new JokeFactory();

$joke = $factory->getRandomJoke();

var_dump($joke);