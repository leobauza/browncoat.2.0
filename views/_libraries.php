<section class="container divider">
	<h1>Libraries</h1>
	<p class="short">This section contains example of non standard html elements. This is anything defined with a css class or set of css classes. These however do not include JS functionality. They are just examples of the styles.</p>
</section>

<section class="static-sidebar">
	<aside class="sidebar">
		<nav class="inner">
			<h4>Browse Libs:</h4>
			<div class="list-group">
				<a href="#buttons">Buttons</a>
				<a href="#listgroups">List Groups</a>
				<a href="#callouts">Callouts</a>
				<a href="#boxes">Boxes</a>
			</div>
		</nav>
	</aside>
	<section class="main">
		<article id="buttons">
			<?php include './views/libraries/_btns.php'; ?>
		</article>
		<article id="listgroups">
			<?php include './views/libraries/_listgroups.php'; ?>
		</article>
		<article id="callouts">
			<?php include './views/libraries/_callouts.php'; ?>
		</article>
		<article id="boxes">
			<?php include './views/libraries/_boxes.php'; ?>
		</article>
	</section>
</section>
