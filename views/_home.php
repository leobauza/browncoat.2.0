<section class="static-sidebar">
	<aside class="sidebar">
		<nav class="inner">
			<ul class="list-group">
				<li><a href="#">Menu Item One</a></li>
				<li><a href="#">Menu Item Two</a></li>
				<li><a href="#">Menu Item Three</a></li>
			</ul>
		</nav>
	</aside>
	<section class="main">
		<article class="inner al-c">
			<h2>About the project and docs</h2>
		</article>
		<article class="inner al-c">
			<div class="row-fluid">
				<div class="span4">
					<h4>Starting Point</h4>
					<p><em>browncoat</em> is a small front end framework designed to give you a good <em>starting point.</em> It comes packaged in a way that allows you to start writing you webpage or app immediately.</p>
				</div>
				<div class="span4">
					<h4>Customizable</h4>
					<p><em>browncoat</em> is designed to give you maximum control. It utilizes the css cascade so that you can build on top of a solid css core. Same goes for JS, using Require.js makes this easy.</p>
				</div>
				<div class="span4">
					<h4>Modularized</h4>
					<p><em>browncoat</em> has modularized <em>scss</em> and <em>js</em> this means you can pretty much remove or keep as much as you want simply by deleting folders. <em>(Just don't delete dependencies)</em></p>
				</div>
			</div>
		</article>
		<article class="inner">
			<h3>CSS</h3>
			<p>The CSS section contains examples of the basic styles that make up the foundation of <em>browncoat</em>. There is nothing fancy there. Examples include:</p>
			<ol>
				<li>The grid (12 column based)</li>
				<li>Lists (ul and ol)</li>
				<li>Forms (plain html forms)</li>
				<li>Reset Styles (for tags like h1 - h6, p, a, etc)</li>
			</ol>
		</article>
		<article class="inner">
			<h3>Libraries</h3>
			<p>The Libraries section contains example of non standard html elements. This is anything defined with a css class or set of css classes. These however do not include JS functionality. They are just examples of the styles. Examples include:</p>
			<ol>
				<li>Buttons</li>
				<li>Alerts</li>
				<li>List Groups</li>
				<li>Boxes</li>
				<li>Etc...</li>
			</ol>
		</article>
		<article class="inner">
			<h3>Layouts</h3>
			<p>There are basically two style of layouts that can be used independently or in tandem. There are the <em>Fluid Rows</em> and the <em>Fixed Width Sidebar</em>. This page is using both right now. The menu to the left is a fixed width sidebar and the three columns at the beginning are made with Fluid Rows. Some things to keep in mind:</p>
			<ol>
				<li>Fluid Rows are based on a twelve column grid <em>(for now)</em></li>
				<li>Fluid Rows can be adjusted in the <em>browncoat/bases/structure</em> file.</li>
				<li>Fixed Width Sidebar setting can be adjusted in the <em>browncoat/bases/structure</em> file.</li>
				<li>Nothing is stopping you from creating new layouts based on these, in fact we are working on a 14 and 16 column grid layout</li>
				<li>When I say <em>we</em> I really mean <em>I</em>, but saying <em>we</em> makes it seem more official</li>
			</ol>
		</article>
		<aritcle class="inner">
			<h3>So, Removing Things</h3>
			<p>As a developer I want to take what I like and ditch everything else. There is a <a href="/removingthings">whole page</a> dedicated to how to <em>"ditch everything else"</em> but here are the basics:</p>
			<ol>
				<li>
					The <em>assets/</em> directory contains 5 directories:
					<ul>
						<li><em>build:</em> Contains your build.js file for r.js to use to optimize your scripts when you are ready for production (more on this in the js section)</li>
						<li><em>css:</em> For your compiled CSS. You shouldn't ever edit this file directly. You could move this but why?</li>
						<li><em>img:</em> For your images. Move if you like and update the <em>$imgPath</em> var in <em>scss/app/browncoat/bases/helper</em></li>
						<li><em>js:</em> All your javascript/coffeescript</li>
						<li><em>scss:</em> All your sassy css to be compiled into css</li>
					</ul>
				</li>
				<li>
					The <em>scss</em> directory structure is divided into two main directories: <em>app</em> &amp; <em>browncoat</em>
					<ul>
						<li><em>app:</em> is yours to customize and do whatever you want in. It contains the <em>libs/</em> directory which has some starter libs. The devs directory is for developers, the clients directory for clients, and vendors directory for things like the css given by jQuery UI or other libraries.</li>
						<li><em>browncoat:</em> contains the bases and normalizers. This is the one directory you should only change slightly since its the core of browncoat. That does <em>NOT</em> mean you shouldn't change it at all. In fact you should customize colors, text and other variables there for every project. What it <em>DOES</em> mean is don't add something like .my-red-box-class in there...that belongs <em>nowhere</em> or in the <em>clients/</em> directory.</li>
					</ul>
				</li>
				<li>
					The <em>js/</em> directory has a standard Require.js :
					<ul>
						<li>It includes the <em>coffeescript plugin</em> for requires.js if you don't plan to use it you can remove the files <em>cs.js</em> and <em>coffee-script.js</em>. Note: You will have to write your own versions of the <em>app/</em> files if you remove coffeescript, as these are written in coffeescript. The entry point (main.js) is written in plain JS though.</li>
						<li><em>jQuery</em> is the library of choice here but you can replace it. (all plugins are written as jQuery plugins so you won't have access to those. In the future they will be written in plain JS as well.)</li>
					</ul>
				</li>
			</ol>
		</aritcle>
	</section>
</section>
