<?php

require 'Slim/Slim.php';

$app = new Slim();


$app -> get('/', function() {
	echo "hello world!";
});

$app -> get('/something', function() {
	echo "hello something!";
});

$app->run();

?>