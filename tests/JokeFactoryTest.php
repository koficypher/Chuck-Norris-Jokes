<?php

/*
 * Kofi Cypher <skcypher6@gmail.com>
 *
 * Chuck Norris Jokes
 *
 * Copyright 2019
 */

namespace KofiCypher\ChuckNorrisJokes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Handler\MockHandler;
use KofiCypher\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /**@test */
    public function test_it_returns_a_random_joke()
    {
        $mock = new MockHandler([
            new Response(200, [], '{ "type": "success", "value": { "id": 268, "joke": "Time waits for no man. Unless that man is John Doe." } }')  
        ]);
        
        $handler = HandlerStack::create($mock);
        $client = new Client(['handler' => $handler]);

        $jokes = new JokeFactory($client);
            
        $joke = $jokes->getRandomJoke();

        $this->assertSame('Time waits for no man. Unless that man is John Doe.', $joke);
    }
}
