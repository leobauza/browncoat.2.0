<?php

function render_template($filename, $variables) {
	//$variables['new'] = 'new value!';
	extract($variables);
	ob_start();
	require("./templates/" . $filename . ".php");
	$contents = ob_get_contents(); 
	ob_end_clean();
	return $contents;
}

require_once 'Slim/Slim.php';

$app = new Slim();

//Landing pages
$app -> get('/', function() {
	echo render_template("template", array(
		'body' => './views/_home.php',
		'title' => 'home'
	));
});
$app -> get('/libraries(/)', function() {
	echo render_template("template", array(
		'body' => './views/_libraries.php',
		'title' => 'libraries'
	));
});
$app -> get('/css(/)', function() {
	echo render_template("template", array(
		'body' => './views/_css.php',
		'title' => 'css'
	));
});
$app -> get('/layouts(/)', function() {
	echo render_template("template", array(
		'body' => './views/_layouts.php',
		'title' => 'layouts'
	));
});


//Layout subpages
$app -> get('/layouts/:id(/)', function($id) {
	if($id == 'fluidrows') {
		echo render_template("template", array(
			'body' => './views/layouts/_fluidRows.php',
			'link' => '<p><a href="/layouts">Back to layouts</a></p>',
			'title' => 'Fluid Rows'
		));
	}
	if($id == 'staticsidebar') {
		echo render_template("template", array(
			'body' => './views/layouts/_staticSidebar.php',
			'link' => '<p><a href="/layouts">Back to layouts</a></p>',
			'title' => 'Static Sidebar'
		));
	}
});

//CSS subpages
$app -> get('/css/:id(/)', function($id) {
	if($id == 'lists') {
		echo render_template("template", array(
			'body' => './views/_lists.php',
			'title' => 'Lists'
		));
	}
	if($id == 'forms') {
		echo render_template("template", array(
			'body' => './views/_forms.php',
			'title' => 'Forms'
		));
	}
});

//Tests
$app -> get('/test(/)', function() {
	echo render_template("template", array(
		'body' => './views/etc/_layoutTest.php',
		'title' => 'test'
	));
});


$app->run();


?>


