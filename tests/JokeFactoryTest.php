<?php 

namespace KofiCypher\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use KofiCypher\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase 
{
    /**@test */
    public function test_it_returns_a_random_joke()
    {

        $jokes = new JokeFactory([
            'This is a joke'
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

      /**@test */
      public function test_it_returns_a_predefined_joke()
      {
  
          $chuck = [
              'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
              'Chuck Norris counted to infinity... Twice',
              'The First rule of Chuck Norris is: you do not talk about Chuck Norris',
              'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death'
          ];

          $jokes = new JokeFactory();
  
          $joke = $jokes->getRandomJoke();
  
          $this->assertContains($joke, $chuck);
      }
}