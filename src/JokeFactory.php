<?php

/*
 * Kofi Cypher <skcypher6@gmail.com>
 *
 * Chuck Norris Jokes
 *
 * Copyright 2019
 */

namespace KofiCypher\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
        'Chuck Norris counted to infinity... Twice',
        'The First rule of Chuck Norris is: you do not talk about Chuck Norris',
        'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death',
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }

    public function getDefinedJoke()
    {
    }
}
