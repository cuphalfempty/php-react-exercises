<?php

require __DIR__ . '/vendor/autoload.php';

use Clue\React\Buzz\Browser;

$loop = \React\EventLoop\Factory::create();

$client = new Browser($loop);
$client->get('https://www.pexels.com/photo/kitten-cat-rush-lucky-cat-45170/')
	->then(function(\Psr\Http\Message\ResponseInterface $response) {
		echo $response->getBody();
	});

$loop->run();
