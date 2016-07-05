
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fancy Buttons</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/prism.css">
	<link rel="stylesheet" href="css/style.css">	
	<link rel="stylesheet" href="css/fancybutton.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,700' rel='stylesheet' type='text/css'>	
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	<script src="js/prism.js"></script>
	<script src="js/script.js"></script>


</head>

<body>


	<nav>
	    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
	</nav>
	 <ul id="slide-out" class="side-nav fixed">
	    	<div class="logo"><a href="#" class="fancy fb-primary-light fb-lift fb-2x"><p>FANCYBUTTON</p></a></div>
	    	<li><a href="#getting-started">GETTING STARTED</a></li>
		    <li><a href="#button-types">BUTTON TYPES</a></li>
		   	<li><a href="#options">OPTION</a></li>
		    <li><a href="#hover-effects">HOVER EFFECTS</a></li>
	 </ul>
	<header>
		<div class="container">
			<h1>FANCY BUTTON</h1>
			<h4>A LIGHTWEIGHT CSS BUTTON PLUGIN</h4>				
		</div>
	</header>
	<div class="main break-buttons">
	    <div class="container">
	    	<section id="about">
		    	<h2>About</h2>
		    	<p>Fancy button is simple to use CSS plugin for creating fancy buttons in no time at all.  Fancy button is designed to work with font awsome and material design color schemes.</p>
	    	</section>


	    	<section class="getting-started">
	    	<a name="getting-started"></a>	    		
		    	<h2>Getting Started</h2>
		    	<p>There are a few things to get started with fancy buttons.</p>
		    	<p>1. Link the fancybutton.min.css into the html:</p>
		    	<pre class="language-markup"><code>	&lt;link rel="stylesheet" href="path/to/css/fancybutton.min.css"&gt;</code></pre>
		    	<p>2. Link in font awesome if you wish to use it by adding:</p>
		    	<pre class="language-markup"><code>	&lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"&gt;</code></pre>
	    		<p>3. Upload a SASS file with the name pallete.sass into the same folder as the fancybutton.min.css. This can be done by completing any ONE of the following:<br> 
	    			<span class="sass-option">a) Create and download a palette from <a href="http://www.materialpalette.com/">materialpalette.com</a> and place it in the same folder as fancybutton.min.css</span>
	    			<span class="sass-option">b) Create your own palette.sass file using the template below and place it in the same folder as fancybutton.min.css:</span>
	    		</p>
	    		<pre class="language-css">
	    			<code>
	/*This is a cropped version of materialpalette.com file suggested above*/

	$primary-color:	#673AB7	//primary color
	$primary-color-text:	#FFFFFF	//light color
	$accent-color:		#FFC107	//accent color
	$primary-text-color:   #212121	//dark color
	</code>
	    		</pre>
	    		<span class="sass-option">c) Download fancybutton.scss and modify the code.  This requires removing <code>@import 'palette.sass';</code> and setting the color variables to match your color scheme</span>
	    		<pre class="language-css">
	    			<code>
	// IMPORTS

	@import 'palette.sass'; //REMOVE ME TO SET CUSTOM COLORS

	//COLOR VARIABLES

	// Replace $primary-color, $accent-color, $primary-color-text, $primary-text-color with your color pallette to create custom scheme

	$primary: $primary-color; 
	$accent: $accent-color;
	$light:  $primary-color-text;
	$dark:  $primary-text-color;
</code>
	    		</pre>
	    		

	    	</section>

	    	<section class="basics">
	    	<a name="button-types"></a>
				<h2>BUTTON TYPES</h2>
				<h3>Font Awesome Icons</h3>
				<div class="row">
					<div class="col m3 s12 button-display"><div class="row ">
							<a class="fancy fb-2x fb-primary-light" href="#">
								<i class="fa fa-2x fa-umbrella"></i>
							</a>
						</div>
						<div class="row">
							<a  class="fancy fb-2x fb-accent-light " target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
						</div>
						<div class="row">
							<a class="fancy fb-2x fb-light-primary " target="blank" href="#">
								<i class="fa fa-2x fa-rocket"></i>
							</a>
						</div>
						<div class="row ">
							<a  class="fancy fb-2x fb-light-accent " target="blank" href="#">
								<i class="fa fa-2x fa-heart"></i>
							</a>
						</div>						
					</div>
					<div class="col m9 s12 code-display">
					</p>Place any font awesome icon inside <code>a class="fancy"</code> with the matching size to create an icon button</p>
						<pre class="language-markup">
							<code>
	&lt;a class="fancy fb-2x fb-primary-light" href="#"&gt;
		&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;
	&lt;/a&gt;
							</code>
						</pre>					
					</div>
				</div>

				<h3>Stacked Icons</h3>
				<div class="row">
					<div class="col m3 s12 button-display">
						<div class="row">
							<a class="fancy fb-2x fb-primary-light" href="#">								
								<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x"></i>
								  <i class="fa fa-umbrella fa-stack-1x"></i>
								</span>
							</a>
						</div>
						<div class="row">
							<a class="fancy fb-2x fb-accent-light" href="#">								
								<span class="fa-stack fa-lg">
								  <i class="fa fa-square fa-stack-2x"></i>
								  <i class="fa fa-thumbs-o-up fa-stack-1x"></i>
								</span>
							</a>
						</div>
						<div class="row">
							<a class="fancy fb-2x fb-light-primary" href="#">								
								<span class="fa-stack fa-lg">
								  <i class="fa fa-square-o fa-stack-2x"></i>
								  <i class="fa fa-rocket fa-stack-1x"></i>
								</span>
							</a>
						</div>
						<div class="row">
							<a class="fancy fb-2x fb-light-accent" href="#">								
								<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x"></i>
								  <i class="fa fa-heart fa-stack-1x"></i>
								</span>
							</a>
						</div>						
					</div>
					<div class="col m9 s12 code-display">
					<p>Using stacked icons is easy, just use them the same way you would a regular icon.</p>
				<pre class="language-markup">
					<code>
	&lt;a class="fancy fb-2x fb-accent-light" href="#"&gt;
		&lt;span class="fa-stack fa-lg"&gt;	
			&lt;i class="fa fa-square fa-stack-2x"&gt;&lt;/i&gt;		
			&lt;i class="fa fa-umbrella fa-stack-1x"&gt;&lt;/i&gt;
		&lt;/span&gt;
	&lt;/a&gt;
					</code>
				</pre>				
					</div>
				</div>


				</pre>
				<h3>Text Buttons</h3>
				<div class="row">
					<div class="col m3 s12 button-display">
						<div class="row">
							<a  class="fancy fb-2x  fb-primary-light" target="blank" href="#">
								<p>BUTTON</p>
							</a>
						</div>
						<div class="row">
							<a  class="fancy fb-2x fb-accent-light" target="blank" href="#">
								<p>BUTTON</p>
							</a>
						</div>
						<div class="row">
							<a class="fancy fb-2x fb-light-primary " target="blank" href="#">
								<p>BUTTON</p>
							</a>
						</div>
						<div class="row ">
							<a  class="fancy fb-2x fb-light-accent " target="blank" href="#">
								<p>BUTTON</p>
							</a>
						</div>						
					</div>
					<div class="col m9 s12 code-display">
						<p>Place text inside a <code>p</code> element and the button will automatically grow to accomidate the text.</p>
						<pre class="language-markup"><code>
	&lt;a class="fancy 2x fb-primary-light" href="#"&gt;
		&lt;p&gt;BUTTON&lt;/p&gt;
	&lt;/a&gt;
					</code></pre>				
					</div>
				</div>
				<h3>Icon + Text Buttons</h3>
				<div class="row">
					<div class="col m3 s12 button-display">
						<div class="row">
							<a class="fancy fb-2x fb-primary-light" href="#">								
								<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x"></i>
								  <i class="fa fa-umbrella fa-stack-1x"></i>
								</span>
								<p>BUTTON</p>
							</a>
						</div>
						<div class="row">
							<a class="fancy fb-2x fb-accent-light" href="#">								
								<span class="fa-stack fa-lg">
								  <i class="fa fa-square fa-stack-2x"></i>
								  <i class="fa fa-thumbs-o-up fa-stack-1x"></i>
								</span>
								<p>BUTTON</p>
							</a>
						</div>
						<div class="row">
							<a class="fancy fb-2x fb-light-primary" href="#">								
								<span class="fa-stack fa-lg">
								  <i class="fa fa-square-o fa-stack-2x"></i>
								  <i class="fa fa-rocket fa-stack-1x"></i>
								</span>
								<p>BUTTON</p>
							</a>
						</div>
						<div class="row">
							<a class="fancy fb-2x fb-light-accent" href="#">								
								<span class="fa-stack fa-lg">
								  <i class="fa fa-circle fa-stack-2x"></i>
								  <i class="fa fa-heart fa-stack-1x"></i>
								</span>
								<p>BUTTON</p>
							</a>
						</div>										
					</div>
					<div class="col m9 s12 code-display">
						<p>Place the icon and text in whatever order you prefer to make a button with both text and an icon.</p>
				<pre class="language-markup">
					<code>
	&lt;a class="fancy fb-2x fb-primary-light" href="#"&gt;
		&lt;span class="fa-stack fa-lg"&gt;	
			&lt;i class="fa fa-square fa-stack-2x"&gt;&lt;/i&gt;		
			&lt;i class="fa fa-umbrella fa-stack-1x"&gt;&lt;/i&gt;
		&lt;/span&gt;
		&lt;p&gt;BUTTON&lt;/p&gt;
	&lt;/a&gt;
					</code>
				</pre>			
					</div>
				</div>


			</section>

	    	<section class="options">
	    	<a name="options"></a>
	    		<h2>Options</h2>
	    		<h3>Colors</h3>
				<!-- COLORS -->
				<div class="row">
					<div class="col m3 s12 button-display">
						<div class="row ">
							<a class="fancy fb-2x fb-primary-light" href="#">
								<i class="fa fa-2x fa-umbrella"></i>
							</a>
							<p>fb-primary-light</p>
						</div>
						<div class="row">
							<a  class="fancy fb-2x fb-primary-dark" target="blank" href="#">
								<i class="fa fa-2x fa-umbrella"></i>
							</a>
							<p>fb-primary-dark</p>
						</div>
						<div class="row">
							<a  class="fancy fb-2x fb-primary-accent" target="blank" href="#">
								<i class="fa fa-2x fa-umbrella"></i>
							</a>
							<p>fb-primary-accent</p>
						</div>
						<div class="row ">
							<a class="fancy fb-2x fb-accent-light" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-accent-light</p>
						</div>
						<div class="row">
							<a  class="fancy fb-2x fb-accent-dark" target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-accent-dark</p>
						</div>
						<div class="row">
							<a  class="fancy fb-2x fb-accent-primary" target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-accent-primary</p>
						</div>
						<div class="row ">
							<a class="fancy fb-2x fb-light-accent" href="#">
								<i class="fa fa-2x fa-rocket"></i>
							</a>
							<p>fb-light-accent</p>
						</div>
						<div class="row">
							<a  class="fancy fb-2x fb-light-dark" target="blank" href="#">
								<i class="fa fa-2x fa-rocket"></i>
							</a>
							<p>fb-light-dark</p>
						</div>
						<div class="row">
							<a  class="fancy fb-2x fb-light-primary" target="blank" href="#">
								<i class="fa fa-2x fa-rocket"></i>
							</a>
							<p>fb-light-primary</p>
						</div>	
						<div class="row ">
							<a class="fancy fb-2x fb-dark-accent" href="#">
								<i class="fa fa-2x fa-heart"></i>
							</a>
							<p>fb-dark-accent</p>
						</div>
						<div class="row">
							<a  class="fancy fb-2x fb-dark-light" target="blank" href="#">
								<i class="fa fa-2x fa-heart"></i>
							</a>
							<p>fb-dark-light</p>
						</div>
						<div class="row">
							<a  class="fancy fb-2x fb-dark-primary" target="blank" href="#">
								<i class="fa fa-2x fa-heart"></i>
							</a>
							<p>fb-dark-primary</p>
						</div>						
					</div>
					<div class="col m9 s12 code-display">
						<p>Buttons can be created in any combination based on the colors selected by the user.  Selecting colors is done by adding the class fb-backgroundColor-iconColor to the <code>a</code> element</p>
						<pre class="language-markup">
							<code>
&lt;a class="fancy fb-2x fb-primary-light"&gt;&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-primary-dark"&gt;&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-primary-accent"&gt;&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-accent-light"&gt;&lt;i class="fa fa-2x fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-accent-dark"&gt;&lt;i class="fa fa-2x fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-accent-primary"&gt;&lt;i class="fa fa-2x fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-accent"&gt;&lt;i class="fa fa-2x fa-rocket"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-dark"&gt;&lt;i class="fa fa-2x fa-rocket"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-primary"&gt;&lt;i class="fa fa-2x fa-rocket"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-dark-accent"&gt;&lt;i class="fa fa-2x fa-heart"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-dark-light"&gt;&lt;i class="fa fa-2x fa-heart"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-dark-primary"&gt;&lt;i class="fa fa-2x fa-heart"&gt;&lt;/i&gt;&lt;/a&gt;
							</code>
						</pre>						
					</div>
				</div>

		<!-- SIZES -->

	    		<h3>Sizes</h3>
				<div class="row">
					<div class="col m3 s12 button-display">		
						<div class="row ">
							<a class="fancy fb-lg fb-primary-light" href="#">
								<i class="fa fa-lg fa-umbrella"></i>
							</a>
							<p>fb-lg</p>
						</div>
						<div class="row">
							<a  class="fancy fb-2x fb-accent-light" target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-2x</p>
						</div>
						<div class="row">
							<a class="fancy fb-3x fb-light-primary" target="blank" href="#">
								<i class="fa fa-3x fa-rocket"></i>
							</a>
							<p>fb-3x</p>
						</div>
						<div class="row ">
							<a  class="fancy fb-4x fb-light-accent" target="blank" href="#">
								<i class="fa fa-4x fa-heart"></i>
							</a>
							<p>fb-4x</p>
						</div>	
						<div class="row ">
							<a class="fancy fb-5x fb-primary-light" href="#">
								<i class="fa fa-5x fa-umbrella"></i>
							</a>
							<p>fb-5x</p>
						</div>						
					</div>
					<div class="col m9 s12 code-display">
						<p>Size options are used to create a consistent size for your buttons. If no sizing class is used, the default of <code>padding:10px</code> will be used. If you don't like any of these options you can always create a custom size and fancy button will automatically center everything for you.</p>
						<pre class="language-markup">
							<code>
&lt;a class="fancy fb-lg fb-primary-light"&gt;&lt;i class="fa fa-lg fa-umbrella"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-accent-light"&gt;&lt;i class="fa fa-2x fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-3x fb-light-primary"&gt;&lt;i class="fa fa-3x fa-rocket"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-4x fb-light-accent"&gt;&lt;i class="fa fa-4x fa-heart"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-5x fb-primary-light"&gt;&lt;i class="fa fa-5x fa-umbrella"&gt;&lt;/i&gt;&lt;/a&gt;
							</code>
						</pre>						
					</div>
				</div>

	    		<h3>Drop Shadows</h3>
		<!-- DROP SHADOW -->
				<div class="row">
					<div class="col m3 s12 button-display">					
						<div class="row ">
							<a class="fancy fb-2x fb-primary-light fb-drop-shadow" href="#">
								<i class="fa fa-2x fa-umbrella"></i>
							</a>
							<p>fb-drop-shadow</p>
						</div>
						<div class="row">
							<a  class="fancy fb-2x fb-accent-light fb-drop-shadow-more" target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-drop-shadow-more</p>
						</div>
						<div class="row">
							<a class="fancy fb-2x fb-light-primary fb-drop-shadow" target="blank" href="#">
								<i class="fa fa-2x fa-rocket"></i>
							</a>
							<p>fb-drop-shadow</p>
						</div>
						<div class="row ">
							<a  class="fancy fb-2x fb-light-accent fb-drop-shadow-more" target="blank" href="#">
								<i class="fa fa-2x fa-heart"></i>
							</a>
							<p>fb-drop-shadow-more</p>
						</div>						
					</div>
					<div class="col m9 s12 code-display">
						<p>There are four color options available based on the variables in the palette.sass file uploaded.</p>
						<pre class="language-markup">
							<code>
&lt;a class="fancy fb-2x fb-primary-light fb-drop-shadow"&gt;&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-accent-light fb-drop-shadow-more"&gt;&lt;i class="fa fa-2x fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-primary fb-drop-shadow"&gt;&lt;i class="fa fa-2x fa-rocket"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-accent fb-drop-shadow-more"&gt;&lt;i class="fa fa-2x fa-heart"&gt;&lt;/i&gt;&lt;/a&gt;
							</code>
						</pre>						
					</div>
				</div>


	    		
	    	</section>

			<section class="hover-effects">
			<a name="hover-effects"></a>
			<h2>Hover Effects</h2>
			<p class="sub-text">Note: Since these are made using css animations/transfomations only one hover effect can be applied to each button.</p>
		<!-- ZOOM -->
			<h3>Icon Zoom</h3>
			<div class="row">
				<div class="col m3 s12 button-display">					
					<div class="row ">
						<a class="fancy fb-2x fb-primary-light fb-zoom" href="#">
							<i class="fa fa-2x fa-umbrella"></i>
						</a>
						<p>fb-zoom</p>
					</div>
					<div class="row">
						<a  class="fancy fb-2x fb-accent-light fb-zoom" target="blank" href="#">
							<i class="fa fa-2x fa-thumbs-o-up"></i>
						</a>
						<p>fb-zoom</p>
					</div>
					<div class="row">
						<a class="fancy fb-2x fb-light-primary fb-zoom" target="blank" href="#">
							<i class="fa fa-2x fa-rocket"></i>
						</a>
						<p>fb-zoom</p>
					</div>
					<div class="row ">
						<a  class="fancy fb-2x fb-light-accent fb-zoom" target="blank" href="#">
							<i class="fa fa-2x fa-heart"></i>
						</a>
						<p>fb-zoom</p>
					</div>						
				</div>
				<div class="col m9 s12 code-display">
					<pre class="language-markup">
						<code>
&lt;a class="fancy fb-2x fb-primary-light fb-zoom"&gt;&lt;i class="fa fb-2x fa-umbrella"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-accent-light fb-zoom"&gt;&lt;i class="fa fb-2x fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-primary fb-zoom"&gt;&lt;i class="fa fb-2x fa-rocket"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-accent fb-zoom"&gt;&lt;i class="fa fb-2x fa-heart"&gt;&lt;/i&gt;&lt;/a&gt;
						</code>
					</pre>						
				</div>
			</div>
		<!-- Invert Color -->

			<h3>Invert Color</h3>
			<div class="row">
				<div class="col m3 s12 button-display">	
						<div class="row ">
							<a class="fancy fb-invert-color fb-2x fb-primary-light" href="#">
								<i class="fa fa-2x fa-umbrella"></i>
							</a>
							<p>fb-invert-color</p>
						</div>
						<div class="row">
							<a  class="fancy fb-invert-color fb-2x fb-primary-dark" target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-invert-color</p>
						</div>
						<div class="row">
							<a  class="fancy fb-invert-color fb-2x fb-primary-accent" target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-invert-color</p>
						</div>
						<div class="row ">
							<a class="fancy fb-invert-color fb-2x fb-accent-light" href="#">
								<i class="fa fa-2x fa-umbrella"></i>
							</a>
							<p>fb-invert-color</p>
						</div>
						<div class="row">
							<a  class="fancy fb-invert-color fb-2x fb-accent-dark" target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-invert-color</p>
						</div>
						<div class="row">
							<a  class="fancy fb-invert-color fb-2x fb-accent-primary" target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-invert-color</p>
						</div>
						<div class="row ">
							<a class="fancy fb-invert-color fb-2x fb-light-accent" href="#">
								<i class="fa fa-2x fa-umbrella"></i>
							</a>
							<p>fb-invert-color</p>
						</div>
						<div class="row">
							<a  class="fancy fb-invert-color fb-2x fb-light-dark" target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-invert-color</p>
						</div>
						<div class="row">
							<a  class="fancy fb-invert-color fb-2x fb-light-primary" target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-invert-color</p>
						</div>	
						<div class="row ">
							<a class="fancy fb-invert-color fb-2x fb-dark-accent" href="#">
								<i class="fa fa-2x fa-umbrella"></i>
							</a>
							<p>fb-invert-color</p>
						</div>
						<div class="row">
							<a  class="fancy fb-invert-color fb-2x fb-dark-light" target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-invert-color</p>
						</div>
						<div class="row">
							<a  class="fancy fb-invert-color fb-2x fb-dark-primary" target="blank" href="#">
								<i class="fa fa-2x fa-thumbs-o-up"></i>
							</a>
							<p>fb-invert-color</p>
						</div>					
				</div>
				<div class="col m9 s12 code-display">
				<pre class="language-markup">
						<code>
&lt;a class="fancy fb-2x fb-primary-light fb-invert-color"&gt;&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-accent-light fb-invert-color"&gt;&lt;i class="fa fa-2x fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-primary fb-invert-color"&gt;&lt;i class="fa fa-2x fa-rocket"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-accent fb-invert-color"&gt;&lt;i class="fa fa-2x fa-heart"&gt;&lt;/i&gt;&lt;/a&gt;
						</code>
					</pre>						
				</div>
			</div>
		<!-- LIFT -->
			<h3>Lift Button</h3>
			<div class="row">
				<div class="col m3 s12 button-display">					
					<div class="row ">
						<a class="fancy fb-2x fb-primary-light fb-lift" href="#">
							<i class="fa fa-2x fa-umbrella"></i>
						</a>
						<p>fb-lift</p>
					</div>
					<div class="row">
						<a  class="fancy fb-2x fb-accent-light fb-lift" target="blank" href="#">
							<i class="fa fa-2x fa-thumbs-o-up"></i>
						</a>
						<p>fb-lift</p>
					</div>
					<div class="row">
						<a class="fancy fb-2x fb-light-primary fb-lift" target="blank" href="#">
							<i class="fa fa-2x fa-rocket"></i>
						</a>
						<p>fb-lift</p>
					</div>
					<div class="row ">
						<a  class="fancy fb-2x fb-light-accent fb-lift" target="blank" href="#">
							<i class="fa fa-2x fa-heart"></i>
						</a>
						<p>fb-lift</p>
					</div>						
				</div>
				<div class="col m9 s12 code-display">
					<pre class="language-markup">
						<code>
&lt;a class="fancy fb-2x fb-primary-light fb-lift"&gt;&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-accent-light fb-lift"&gt;&lt;i class="fa fa-2x fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-primary fb-lift"&gt;&lt;i class="fa fa-2x fa-rocket"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-accent fb-lift"&gt;&lt;i class="fa fa-2x fa-heart"&gt;&lt;/i&gt;&lt;/a&gt;
						</code>
					</pre>						
				</div>
			</div>

		<!-- PUSH -->

			<h3>Push Button</h3>
			<div class="row">
				<div class="col m3 s12 button-display">					
					<div class="row ">
						<a class="fancy fb-2x fb-primary-light fb-push" href="#">
							<i class="fa fa-2x fa-umbrella"></i>
						</a>
						<p>fb-push</p>
					</div>
					<div class="row">
						<a  class="fancy fb-2x fb-accent-light fb-push" target="blank" href="#">
							<i class="fa fa-2x fa-thumbs-o-up"></i>
						</a>
						<p>fb-push</p>
					</div>
					<div class="row">
						<a class="fancy fb-2x fb-light-primary fb-push" target="blank" href="#">
							<i class="fa fa-2x fa-rocket"></i>
						</a>
						<p>fb-push</p>
					</div>
					<div class="row ">
						<a  class="fancy fb-2x fb-light-accent fb-push" target="blank" href="#">
							<i class="fa fa-2x fa-heart"></i>
						</a>
						<p>fb-push</p>
					</div>						
				</div>
				<div class="col m9 s12 code-display">
				<pre class="language-markup">
						<code>
&lt;a class="fancy fb-2x fb-primary-light fb-push"&gt;&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-accent-light fb-push"&gt;&lt;i class="fa fa-2x fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-primary fb-push"&gt;&lt;i class="fa fa-2x fa-rocket"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-accent fb-push"&gt;&lt;i class="fa fa-2x fa-heart"&gt;&lt;/i&gt;&lt;/a&gt;
						</code>
					</pre>						
				</div>
			</div>


		<!-- Pulse -->
			<h3>Icon Pulse</h3>
			<div class="row">
				<div class="col m3 s12 button-display">					
					<div class="row ">
						<a class="fancy fb-2x fb-primary-light fb-pulse" href="#">
							<i class="fa fa-2x fa-umbrella"></i>
						</a>
						<p>fb-pulse</p>
					</div>
					<div class="row">
						<a  class="fancy fb-2x fb-accent-light fb-pulse" target="blank" href="#">
							<i class="fa fa-2x fa-thumbs-o-up"></i>
						</a>
						<p>fb-pulse</p>
					</div>
					<div class="row">
						<a class="fancy fb-2x fb-light-primary fb-pulse" target="blank" href="#">
							<i class="fa fa-2x fa-rocket"></i>
						</a>
						<p>fb-pulse</p>
					</div>
					<div class="row ">
						<a  class="fancy fb-2x fb-light-accent fb-pulse" target="blank" href="#">
							<i class="fa fa-2x fa-heart"></i>
						</a>
						<p>fb-pulse</p>
					</div>						
				</div>
				<div class="col m9 s12 code-display">
					<pre class="language-markup">
						<code>
&lt;a class="fancy fb-2x fb-primary-light fb-pulse"&gt;&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-accent-light fb-pulse"&gt;&lt;i class="fa fa-2x fa-thumbs-o-up"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-primary fb-pulse"&gt;&lt;i class="fa fa-2x fa-rocket"&gt;&lt;/i&gt;&lt;/a&gt;
&lt;a class="fancy fb-2x fb-light-accent fb-pulse"&gt;&lt;i class="fa fa-2x fa-heart"&gt;&lt;/i&gt;&lt;/a&gt;
						</code>
					</pre>						
				</div>
			</div>

			<!-- FLIP -->
			<h3>Flip</h3>
			<div class="row">
				<div class="col m3 s12 button-display">					
					<div class="row ">
						<div class="fb-flip-container fb-2x">
							<div class="fb-flip-y fb-2x">
								<a class="fancy fb-2x fb-primary-light" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
								<a class="fancy fb-2x fb-accent-light" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
							</div>
						</div>
						<p>fb-flip-y</p>
					</div>
					<div class="row ">
						<div class="fb-flip-container fb-2x">
							<div class="fb-flip-x fb-2x">
								<a class="fancy fb-2x fb-accent-light" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
								<a class="fancy fb-2x fb-primary-light" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
							</div>
						</div>
						<p>fb-flip-x</p>
					</div>
					<div class="row ">
						<div class="fb-flip-container fb-2x">
							<div class="fb-flip-y fb-2x">
								<a class="fancy fb-2x fb-light-primary" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
								<a class="fancy fb-2x fb-light-accent" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
							</div>
						</div>
						<p>fb-flip-y</p>
					</div>
					<div class="row ">
						<div class="fb-flip-container fb-2x">
							<div class="fb-flip-x fb-2x">
								<a class="fancy fb-2x fb-light-accent" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
								<a class="fancy fb-2x fb-light-primary" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
							</div>
						</div>
						<p>fb-flip-x</p>
					</div>
				</div>
				<div class="col m9 s12 code-display">
					<pre class="language-markup">
						<code>
	&lt;div class="fb-flip-container"&gt;
		&lt;div class="fb-flip-y fb-2x"&gt;
			&lt;!-- front --&gt;
			&lt;a class="fancy fb-2x fb-primary-light" href="#"&gt;
				&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;
			&lt;/a&gt;
			&lt;!-- back--&gt;
			&lt;a class="fancy fb-2x fb-accent-light" href="#"&gt;
				&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;
			&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
						</code>
					</pre>						
				</div>
			</div>


			<!-- Rotate -->
			<h3>Cube Rotate</h3>
			<div class="row">
				<div class="col m3 s12 button-display">					
					<div class="row ">
						<div class="fb-rotate-container fb-2x">
							<div class="fb-rotate fb-rotate-up fb-2x">
								<a class="fancy fb-2x fb-primary-light" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
								<a class="fancy fb-2x fb-light-primary" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
							</div>
						</div>
						<p>fb-rotate-up</p>
					</div>
					<div class="row ">
						<div class="fb-rotate-container fb-2x">
							<div class="fb-rotate fb-rotate-down fb-2x">
								<a class="fancy fb-2x fb-primary-light" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
								<a class="fancy fb-2x fb-light-primary" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
							</div>
						</div>
						<p>fb-rotate-down</p>
					</div>
					<div class="row ">
						<div class="fb-rotate-container fb-2x">
							<div class="fb-rotate fb-rotate-left fb-2x">
								<a class="fancy fb-2x fb-primary-light" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
								<a class="fancy fb-2x fb-light-primary" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
							</div>
						</div>
						<p>fb-rotate-right</p>
					</div>
					<div class="row ">
						<div class="fb-rotate-container fb-2x">
							<div class="fb-rotate fb-rotate-right fb-2x">
								<a class="fancy fb-2x fb-primary-light" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
								<a class="fancy fb-2x fb-light-primary" href="#">
									<i class="fa fa-2x fa-umbrella"></i>
								</a>
							</div>
						</div>
						<p>fb-rotate-down</p>
					</div>
				</div>
				<div class="col m9 s12 code-display">
					<pre class="language-markup">
						<code>
	&lt;div class="fb-rotate-container"&gt;
		&lt;div class="fb-rotate fb-rotate-up fb-2x"&gt;
			&lt;!-- front --&gt;
			&lt;a class="fancy fb-2x fb-primary-light" href="#"&gt;
				&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;
			&lt;/a&gt;
			&lt;!-- side--&gt;
			&lt;a class="fancy fb-2x fb-light-primary" href="#"&gt;
				&lt;i class="fa fa-2x fa-umbrella"&gt;&lt;/i&gt;
			&lt;/a&gt;
		&lt;/div&gt;
	&lt;/div&gt;
						</code>
					</pre>						
				</div>
			</div>
			</section>
	    </div>
		
	</div>


	<footer>
		
	</footer>



</body>
</html>
