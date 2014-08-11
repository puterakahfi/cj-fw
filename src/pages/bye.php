<?php

// cj-fw/bye.php

require_once __DIR__.'/init.php';
$request = Request::createFromGlobals();

$response = new Response('Goodbyesss!');
$response->send();

