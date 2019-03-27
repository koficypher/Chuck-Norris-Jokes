[![Build Status](https://travis-ci.org/koficypher/Chuck-Norris-Jokes.svg?branch=master)](https://travis-ci.org/koficypher/Chuck-Norris-Jokes) ![StyleCI](https://github.styleci.io/repos/178024249/shield?branch=master)

# Chuck Norris Jokes

Creating random Chuck Norris Jokes

## Installation

Use the package manager [Composer](https://getcomposer.org) to install foobar.

```bash
composer require koficypher/chuck-norris-jokes
```

## Usage

```php
use KofiCypher\ChuckNorrisJokes\JokeFactory;

$factory = new JokeFactory();

$joke = $factory->getRandomJoke();

var_dump($joke);

```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)