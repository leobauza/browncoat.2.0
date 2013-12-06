<?php include('./includes/_header.php'); ?>

<?php include('./views/_forms.php'); ?>


<hr>

<?php include('./views/_lists.php'); ?>

<hr>


<section class="container">
	<p>A paragraph. <a href="#">A Link</a></p>
	<form data-radios="true">
		<div class="input-group">
			<h3>Radio Buttons</h3>
			<p>prettify these up...</p>
			<div class="radio-group">
				<input type="radio" name="valueOne" value="a" checked="checked"></input>
				<label>value a</label>
			</div>
			<div class="radio-group">
				<input type="radio" name="valueOne" value="b"></input>
				<label>value b</label>
			</div>
		</div>
	</form>
</section>

<hr>

<section class="container">
	<div class="row-fluid">
		<article class="span6">
			<p>Row Fluid</p>
		</article>
		<article class="span6">
			<p>Using Overflow Hidden</p>
		</article>
	</div>
</section>

<hr>

<section class="container">
	<div class="row-fluid-alt">
		<article class="span6">
			<p>Row Fluid</p>
		</article>
		<article class="span6">
			<p>Using Percentages</p>
		</article>
	</div>
</section>

<hr>

<section class="static-sidebar">
	<aside class="sidebar">
		<p>This is my sidebar</p>
	</aside>
	<article class="main">
		<p>this is my main!</p>
	</article>
</section>

<hr>

<section class="container">
	<div class="box">
		<p>MY BOX! <strong>[Background(), Border(), Text()]</strong></p>
	</div>
	<div class="box2">
		<p>MY BOX2! <strong>[Background(-20), Border(-20), Text()]</strong></p>
	</div>
</section>

<hr>

<section class="container group-test">
	<div class="group">
		<p>clearfix!</p>
		<p>test!</p>
	</div>
</section>
<section class="background-image"></section>

<?php include('./includes/_footer.php'); ?>
