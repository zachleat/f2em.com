<!doctype html>
<!--[if lte IE 8]> <html lang="en" class="f2em-lte-ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Front End Engineer Manifesto</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
if(empty($_GET['nocss'])):
?>
	<link rel="stylesheet" href="lib/fonts/league-gothic/stylesheet.css">
	<link rel="stylesheet" href="lib/sausage.css">
	<link rel="stylesheet" href="css/style.css">
<?php
endif;
?>
</head>
<body>
	<div class="manifesto-title manifesto-slide manifesto-bigtext">
		<span class="bigtext-exempt">A </span>
		<span>Front End Engineer's Manifesto</span>
	</div>
	<div class="manifesto-preface manifesto-slide">
		<div>By <a href="http://twitter.com/zachleat/">@zachleat</a></div>
		<div><a href="?">Full Version</a> or <a href="?nojs=1&nocss=1">Full Monty</a></div>
		<div><a href="?">Web</a> or <a href="?presentation=1">Presentation</a> Mode</div>
	</div>
	<ol>
		<li id="user-first" class="manifesto-slide">
			<div class="manifesto-bigtext">
				<span>Most importantly and above all,</span>
				<span>I will put the needs of the</span>
				<span class="emphasis">user first</span>
				<span>over my own needs as a developer.</span>
			</div>
			<p class="manifesto-permalink"><a href="#user-first">#Permalink</a></p>
		</li>
		<li id="progressive-enhancement" class="manifesto-slide">
			<div class="manifesto-bigtext manifesto-subslide manifesto-subslide-active">
				<span class="emphasis">Progressive Enhancement</span>
				<span>
					<span>and </span>
					<span class="emphasis">Unobtrusive JavaScript</span><span> are my tools.</span>
				</span>
			</div>
			<p class="manifesto-detail">
				<a href="?nojs=true&nocss=true">Without JavaScript or CSS</a>, or without mobile Webkit, my site may not look pretty but will still be functional.
			</p>
			<p class="manifesto-permalink"><a href="#progressive-enhancement">#Permalink</a></p>
		</li>
		<li id="simplicity" class="manifesto-slide">
			<div class="manifesto-bigtext">
				<span class="emphasis">Simplicity is Respect</span>
			</div>
			<p class="manifesto-detail">
				I will not unnecessarily tax my users' brains with complicated designs and user interfaces. I will strive to make interactions succinct and minimize mental overhead.
			</p>
			<p class="manifesto-permalink"><a href="#simplicity">#Permalink</a></p>
		</li>
		<li id="choice-matters" class="manifesto-slide">
			<div class="manifesto-bigtext">
				<span>I will educate my friends and family that </span>
				<span>
					<span class="emphasis">Web Browser choice matters</span><span class="period">.</span>
				</span>
			</div>
			<p class="manifesto-detail">
				Web Browsers should at minimum properly implement web standards and should be responsive to the advancing web. Web Browser Choice should be separate from picking an operating system. This is especially important for mobile devices.
			</p>
			<p class="manifesto-permalink"><a href="#choice-matters">#Permalink</a></p>
		</li>
		<li id="open-web" class="manifesto-slide">
			<div class="manifesto-bigtext">
				<span>I believe in the power of the </span>
				<span>
					<span class="emphasis">Open Web</span><span class="period">.</span>
				</span>
			</div>
			<p class="manifesto-detail">
				My content was accessible when full Flash / Flex apps were popular, and I will continue to provide accessible device independent content in the face of App Store ubiquity.
			</p>
			<p class="manifesto-permalink"><a href="#open-web">#Permalink</a></p>
		</li>
		<li id="performance" class="manifesto-slide">
			<div class="manifesto-bigtext manifesto-subslide manifesto-subslide-active">
				<span>I acknowledge that</span>
				<span>
					<span class="emphasis">Performance is Critical</span><span class="period">.</span>
				</span>
			</div>
			<p class="manifesto-detail">
				My own developer hardware is not representative of the real world, and will be mindful of limited hardware, poor latency, and low bandwidth situations.
			</p>
			<p class="manifesto-permalink"><a href="#performance">#Permalink</a></p>
		</li>
		<li id="learn-javascript" class="manifesto-slide">
			<div class="manifesto-bigtext manifesto-subslide manifesto-subslide-active">
				<span>I will learn at the root, not the abstraction:</span>
				<span class="emphasis">JavaScript before jQuery</span>
				<span>or YUI, Prototype, Mootools, et al.</span>
			</div>
			<p class="manifesto-permalink"><a href="#learn-javascript">#Permalink</a></p>
		</li>
		<li id="open-source" class="manifesto-slide">
			<div class="manifesto-bigtext">
				<span>
					<span>I believe that </span>
					<span class="emphasis">Open Source Code</span><span> and</span>
				</span>
				<span class="emphasis">royalty free tools</span>
				<span>represent the best future for the Web.</span>
			</div>
			<p class="manifesto-detail">
				Especially when considering file formats and codecs for images, audio, or video.
			</p>
			<p class="manifesto-permalink"><a href="#open-source">#Permalink</a></p>
		</li>
		<li id="accessibility" class="manifesto-slide">
			<div class="manifesto-bigtext">
				<span>I will not underestimate the importance of </span>
				<span>
					<span class="emphasis">accessibility</span><span class="period">.</span>
				</span>
			</div>
			<p class="manifesto-detail">
				It is not just about helping users that may have trouble differentiating colors or difficulty reading small fonts, but is about providing comprehensive access for users that may prefer to use either the keyboard or the mouse; in providing a clean print friendly format; in providing content to a devices of varying technological capabilities.
			</p>
			<p class="manifesto-permalink"><a href="#accessibility">#Permalink</a></p>
		</li>
		<li id="give-back" class="manifesto-slide">
			<div class="manifesto-bigtext">
				<span>
					<span>I will </span>
					<span class="emphasis">give back</span><span> to the </span>
					<span class="emphasis">Community</span>
				</span>
			</div>
			<p class="manifesto-detail">
				I will contribute workarounds, fixes, and document issues that may help others. I will file bugs at the source with the web browser’s bug tracker.
			</p>
			<p class="manifesto-permalink"><a href="#give-back">#Permalink</a></p>
		</li>
		<li id="brain-hemispheres" class="manifesto-slide">
			<div class="manifesto-bigtext">
				<span>I will continue to foster both</span>
				<span class="emphasis">hemispheres of my brain</span>
			</div>
			<p class="manifesto-detail">
				I will better myself not just in math and code, but also in art, music, design, and usability.
			</p>
			<p class="manifesto-permalink"><a href="#brain-hemispheres">#Permalink</a></p>
		</li>
		<li id="current-knowledge" class="manifesto-slide">
			<div class="manifesto-bigtext">
				<span>I will do my best to keep my </span>
				<span>
					<span class="emphasis">knowledge current</span><span class="period">.</span>
				</span>
			</div>
			<p class="manifesto-detail">
				I understand that I cannot learn everything and will be mindful of what I do not know.
			</p>
			<p class="manifesto-permalink"><a href="#current-knowledge">#Permalink</a></p>
		</li>
		<li id="view-source" class="manifesto-slide">
			<div class="manifesto-bigtext manifesto-subslide manifesto-subslide-active">
				<span>
					<span>I accept </span>
					<span class="emphasis">responsibility for View Source</span><span class="period">.</span>
				</span>
			</div>
			<p class="manifesto-detail">
				I will take care to use approaches that will be compatible with current and future web browsers, including preference for feature detection over user agent sniffing when it does not violate rules #1 or #5.
			</p>
			<p class="manifesto-permalink"><a href="#view-source">#Permalink</a></p>
		</li>
		<li id="portable-code" class="manifesto-slide">
			<div class="manifesto-bigtext manifesto-subslide manifesto-subslide-active">
				<span>
					<span>My </span>
					<span class="emphasis">code</span><span> will be </span>
					<span class="emphasis">portable</span><span class="period">.</span>
				</span>
			</div>
			<p class="manifesto-detail">
				I will be mindful of overzealous CSS specificity, overuse of CSS <tt>!important</tt>, the global JavaScript namespace, as well as numerous browser implementation quirks.
			</p>
			<p class="manifesto-permalink"><a href="#portable-code">#Permalink</a></p>
		</li>
		<li id="right-tool" class="manifesto-slide">
			<div class="manifesto-bigtext">
				<span>
					<span>I will choose the </span>
					<span class="emphasis">right tool for the job</span>
				</span>
			</div>
			<p class="manifesto-detail">
				Whether it be a big choice between a full stack framework and a simple DOM-centric library, or even the simple choice between CSS and JavaScript to solve a task, I will educate myself on the mistakes of those before me to make the correct choice for my project.
			</p>
			<p class="manifesto-permalink"><a href="#right-tool">#Permalink</a></p>
		</li>
		<li id="security" class="manifesto-slide">
			<div class="manifesto-bigtext">
				<span>
					<span>I will strive to create </span>
					<span class="emphasis">secure applications</span><span class="period">.</span>
				</span>
			</div>
			<p class="manifesto-detail">
				I will properly escape my output and code to prevent XSS and CSRF. I will not store sensitive information in Cookies, and will use HTTPS where appropriate.  I will be responsive in correcting issues that may cause harm to applications I have created.
			</p>
			<p class="manifesto-permalink"><a href="#security">#Permalink</a></p>
		</li>
	</ol>

	<div class="manifesto-footer manifesto-slide manifesto-bigtext">
		<span class="emphasis">I am a Front End Engineer.</span>
		<div class="bigtext-exempt">From the brainheart of <a href="http://twitter.com/zachleat">@zachleat</a> on giants' shoulders.</div>
	</div>
<?php
if(empty($_GET['nojs'])):
?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	
	<script src="lib/jquery.ba-throttle-debounce.min-1.1.js"></script>
	<script src="lib/bigtext.js"></script>

	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
	<script src="lib/fonts/font-face-load.js"></script>
	<script src="lib/jquery.sausage.js"></script>
<?php
if(!empty($_GET['presentation'])):
?>
	<script src="lib/snapper.js"></script>
<?php
endif; // presentation
?>
	<script src="js/script.js"></script>
<?php
endif; // nojs
?>
</body>
</html>