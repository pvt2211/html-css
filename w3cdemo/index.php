<?php 
	include "./partials/header.php"
 ?>
 

<div class="content">
	<div  class="row">
		<div class="col-lg-10 pt-3 pl-3 pb-3">
			<h1 class="mb-3">JavaScript Turoial</h1>
			<div class="row justify-content-between mr-0 ml-0">
				<a class="btn btn-success" href="#" style="border-radius: 0px;"><
				Home</a>
				<a class="btn btn-success" href="#" style="border-radius: 0px;">Next></a>
			</div>

			<div class="bg-green border-left border-success pt-3 pb-3 pl-3">
				<p>JavaScript is the programming language of HTML and the Web.</p>
				<p>JavaScript is easy to learn.</p>
				<p>This tutorial will teach you JavaScript from basic to advanced.</p>
			</div>
			<hr>
			<h2 class="mb-3">Examples in Each Chapter</h2>
			<p>With our "Try it Yourself" editor, you can edit the source code and view the result.</p>
			<div class="bg-gray p-3 shadow rounded mb-4">
				<h4>Example</h4>
				<div class="bg-white p-3">
					<h2 class="mb-3">My First JavaScript</h2>
					<button type="button"
					onclick="document.getElementById('demo').innerHTML = Date()">
					Click me to display Date and Time.</button>
					<p id="demo" class="pt-3"></p>
				</div>
				<a class="btn btn-success" href="#" style="border-radius: 0px;">Try It Yourself >></a>
			</div>
			<div class="border-left-yellow p-3 bg-yellow">
				<p class="mb-0">We recommend reading this tutorial, in the sequence listed in the left menu.</p>
			</div>
			<hr>
			<h2>Examples in Each Chapter</h2>
			<p>Examples are better than 1000 words. Examples are often easier to understand than text explanations.</p>
			<p>This tutorial supplements all explanations with clarifying "Try it Yourself" examples.</p>
			<a class="link-hover--text-green text-black" href="#" style="text-decoration: underline;">JavaScript Examples</a>
			<div class="border-left-yellow p-3 bg-yellow mt-3">
				<p class="mb-0">If you try all the examples, you will learn a lot about JavaScript, in a very short time!</p>
			</div>
			<hr>
			<h2 class="mb-3">Why Study JavaScript?</h2>
			<p>JavaScript is one of the <b>3 languages</b> all web developers <b>must</b> learn:</p>
			<ol>
				<li class="mb-3"><b>HTML </b>to define the content of web pages</li>
				<li class="mb-3"><b>CSS </b>to specify the layout of web pages</li>
				<li><b>JavaScript </b>to program the behavior of web pages</li>
			</ol>
			<p>Web pages are not the only place where JavaScript is used. Many desktop and server programs use JavaScript. Node.js is the best known. Some databases, like MongoDB and CouchDB, also use JavaScript as their programming language.</p>
			<hr class="mb-5">
			<hr>
			<div class="border-left-yellow p-3 bg-yellow mt-3">
				<h3 class="mb-3">Did You Know?</h3>
				<p class="mb-3">JavaScript and Java are completely different languages, both in concept and design.</p>
				<p class="mb-0">JavaScript was invented by Brendan Eich in 1995, and became an ECMA standard in 1997.</p>
				<p class="mb-3">ECMA-262 is the official name of the standard. ECMAScript is the official name of the language.</p>
				<p class="mb-0">You can read more about the different JavaScript versions in the chapter <a class="link-hover--text-green text-black" href="#">JS Versions</a>.</p>
			</div>
			<h2 class="mb-3 mt-3">Learning Speed</h2>
			<p>In this tutorial, the learning speed is your choice.</p>
			<p>Everything is up to you.</p>
			<p>If you are struggling, take a break, or reread the material.</p>
			<p><b>Always</b> make sure you understand <b>all</b> the "Try-it-Yourself" examples.</p>
			<hr>
			<h2 class="pt-3 pb-3">
				JavaScript References
			</h2>
			<div class="bg-dark p-3">
				<h1 class="text-white pt-3 pb-3">Test Yourself With Exercises</h1>
				<div class="bg-white p-3">
					<h2 class="pt-3 pb-3">Exercise:</h2>
					<p>Create a variable called <span class="text-danger bg-gray">carName</span> and assign the value <span class="text-danger bg-gray">Volvo</span> to it.</p>
					<div class="bg-gray p-3 mb-3">
						<div class="pt-3 pb-3">
							<span class="pr-2">var</span>
							<input class="border-0" name="ex1" maxlength="7" style="width: 75px;">
							 <span class="pr-2 pl-2"> = </span> <b>"</b><input class="border-0" name="ex2" maxlength="5" style="width: 54px;"><b>";</b>
						</div>
					</div>
					<a class="btn btn-success mb-3" href="#" style="border-radius: 0px;">Submit Answer >></a>
					<a class="link-hover--text-green text-black mb-3" href="#" style="text-decoration: underline; display: block;">Start the Exercises</a>
				</div>
			</div>
			<hr>
			<h2 mt-3 mb-3>
				JavaScript Quiz Test
			</h2>
			<p class="mt-3">Test your JavaScript skills at W3Schools!</p>
			<a class="btn btn-primary mb-3" href="#" style="border-radius: 0px;">Start JavaScript Quiz!</a>
			<hr>
			<h2 class="mt-3 mb-4">JavaScript Exam - Get Your Diploma!</h2>
			<div class="row mb-3">
				<div class="col-sm-4 col-xs-12 pt-4 pb-4 pr-3 pl-3 list-link">
					<a href="#"><img src="./assets/images/w3certified_logo_250.png" alt="abc"></a>
				</div>
				<div class="col-sm-8 col-xs-12 pl-3 pr-3">
					<h2 class="mt-3 mb-4">W3Schools' Online Certification</h2>
					<p>The perfect solution for professionals who need to balance work, family, and career building.</p>
					<p>More than 25 000 certificates already issued!</p>
				</div>
			</div>
			<a class="btn btn-success mb-3" href="#" style="border-radius: 0px;">Get Your Certificate >></a>
			<p>The <a class="text-black link-hover--text-green" href="#">HTML Certificate</a> documents your knowledge of advanced CSS.</p>
			<p>The <a class="text-black link-hover--text-green" href="#">CSS Certificate</a> documents your knowledge of JavaScript and HTML DOM.</p>
			<p>The <a class="text-black link-hover--text-green" href="#">JavaScript Certificate</a> documents your knowledge of HTML.</p>
			<p>The <a class="text-black link-hover--text-green" href="#">Python Certificate</a> documents your knowledge of Python.</p>
			<p>The <a class="text-black link-hover--text-green" href="#">jQuery Certificate</a> documents your knowledge of jQuery.</p>
			<p>The <a class="text-black link-hover--text-green" href="#">SQL Certificate</a> documents your knowledge of SQL.</p>
			<p>The <a class="text-black link-hover--text-green" href="#">PHP  Certificate</a> documents your knowledge of PHP and MySQL.</p>
			<p>The <a class="text-black link-hover--text-green" href="#">XML  Certificate</a> documents your knowledge of XML, XML DOM and XSLT.</p>
			<p>The <a class="text-black link-hover--text-green" href="#">Bootstrap Certificate</a> documents your knowledge of the Bootstrap framework.</p>
			<div class="row mt-3 mb-3 justify-content-between mr-0 ml-0">
				<a class="btn btn-success" href="#" style="border-radius: 0px;"><
					Home</a>
				<a class="btn btn-success" href="#" style="border-radius: 0px;">Next></a>
			</div>
		</div>
		<div class="col-lg-2 content__right pt-5 pl-0 text-center ">
			<a class="text-black link-hover--text-green pt-3 pb-3" href="#" style="font-size: 20px;" >COLOR PICKER</a>
			<a class="mb-3 mt-3 text-center" href="#" style="display: block;"><img src="./assets/images/colorpicker.gif" alt="img"></a>
			<div class="bg-dark mb-0 text-center content__right--w80">
				<h4 class="mb-0"><a class="w-100 text-white p-3" href="#" style="display: inline-block;">HOW TO</a></h4>
			</div>
			<div class="bg-gray mt-0 p-3 text-left content__right--w80">
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Dropdowns</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Accordions</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Side Navigation</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Top Navigation</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Modal Boxes</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Progress Bars</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Parallax</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Login Form</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">HTML Includes</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Google Maps</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Range Sliders</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Tooltips</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Slideshow</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Filter List</a>
				<a class="text-black link-hover--text-green pr-3" href="#" style="display: block;">Sort List</a>
			</div>
			<p class="mt-4" style="font-size: 20px;">SHARE</p>
			<div>
				<a class="text-black mr-2" href="#"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
				<a class="text-black ml-2" href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
			</div>
			<div class="mt-3 mb-3">
				<a class="text-black" href="#"><i class="fa fa-thumbs-o-up fa-2x" aria-hidden="true"></i></a>
			</div>
			<a class="text-black link-hover--text-green mt-3 mb-3" href="#" style="font-size: 20px;">CERTIFICATES</a>
			<a class="text-black link-hover--text-green mt-3" href="#" style="display: block;">HTML</a>
			<a class="text-black link-hover--text-green " href="#" style="display: block;">CSS</a>
			<a class="text-black link-hover--text-green " href="#" style="display: block;">JavaScript</a>
			<a class="text-black link-hover--text-green " href="#" style="display: block;">SQL</a>
			<a class="text-black link-hover--text-green " href="#" style="display: block;">Python</a>
			<a class="text-black link-hover--text-green " href="#" style="display: block;">PHP</a>
			<a class="text-black link-hover--text-green " href="#" style="display: block;">Jquery</a>
			<a class="text-black link-hover--text-green " href="#" style="display: block;">Bootstrap</a>
			<a class="text-black link-hover--text-green mb-3" href="#" style="display: block;">XML</a>
			<a class="btn btn-secondary" href="#" style="border-radius: 0px;">READ MORE >></a>
		</div>
	</div>
	

 <?php 
 	include "./partials/footer.php"
  ?>