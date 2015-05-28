<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>Show/Hide navigation with pure JavaScript</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<link rel="stylesheet" href="css/screen.css">

	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
</head>

<body>

<header role="banner">
	<div class="wrapper">
		<h1>Example</h1>
	
	   <nav id="nav" role="navigation">
			<div class="show_menu_btn" data-target="#nav ul" data-shown-text="Hide menu" data-hidden-text="Show menu">Show menu</div>
		
	    	<ul>
				<li><a href="">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Products</a></li>
				<li><a href="">Contact</a></li>
			</ul>
		</nav>
	</div>
</header>
    
<main role="main">
	<div class="wrapper">
		<article>
	    	<h2>Show/Hide navigation with pure JavaScript</h2>
			<p>A show/hide menu using only pure JavaScript, no jQuery. Because sometimes there is no need to load the whole of jQuery just for a menu like that.</p>
			<p>I can't claim all the credit for this, found help here: <a href="http://jsfiddle.net/fyUJc/31/">jsFiddle</a>.</p>
		</article>
	</div>
</main>

<script src="js/navigation.js"></script>

</body>
</html>