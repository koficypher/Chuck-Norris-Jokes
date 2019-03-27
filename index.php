<?php

/*
 * Kofi Cypher <skcypher6@gmail.com>
 *
 * Chuck Norris Jokes
 *
 * Copyright 2019
 */

require 'vendor/autoload.php';

use KofiCypher\ChuckNorrisJokes\JokeFactory;

$factory = new JokeFactory();

$joke = $factory->getRandomJoke();

var_dump($joke);
