<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php if(isset($title)) echo $title; else echo "title"; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="a website description">
	<meta name="author" content="the author">

	<!-- styles -->
	<link rel="stylesheet" href="/assets/css/styles.css" type="text/css" media="screen" charset="utf-8">
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- fav and touch icons -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
	<header class="site-header container">
		<h1><a href="/">Browncoat 2.0</a></h1>
		<nav class="site-nav">
			<ul>
				<li><a href="/css">css</a></li>
				<li><a href="/libraries">libraries</a></li>
				<li><a href="/layouts">layouts</a></li>
			</ul>
		</nav>
	</header>
	
	<hr>
	
	<?php
		//print_r($variables);
		include $body;
		if(isset($link)) echo $link;
	?>
	
	
	<footer class="site-footer container">
		<p>created by <a href="http://www.leobauza.com" target="_blank">The Fine People of Fairfax</a></p>
	</footer>
	<script src="/assets/js/require/require.js" data-main="/assets/js/main"></script>
	<!-- <script src="../assets/js/require/require.js" data-main="/assets/js/conc-modules"></script> -->
	<!-- <script src="../assets/js/min/scripts.min.js"></script> -->
</body>
</html>
