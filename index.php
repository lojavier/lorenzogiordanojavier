<!DOCTYPE html>
<html lang="de"><!-- use class="debug" here if you develope a template and want to check-->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
   	<!-- some meta tags, important for SEO"--> 
    <meta name="description" content="Lorenzo Giordano Javier | Computer Engineer | SJSU Alumni" />
    <meta name="keywords" content="Lorenzo,Giordano,Javier,Lorenzo Javier, computer engineer," />
    <meta name="revisit-after" content="1 month" />
    <meta name="robots" content="index,follow" />
	
	<title>Lorenzo Giordano Javier</title>
	
	<link rel="stylesheet" href="css/inuit.css" />
	<link rel="stylesheet" href="css/fluid-grid16-1100px.css" />
	<link rel="stylesheet" href="css/eve-styles.css" />
	<link rel="shortcut icon" href="icon.png" />
	<link rel="apple-touch-icon-precomposed" href="img/icon.png" />

	<script src="js/respond-min.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
	<script>window.jQuery || document.write('<script src="scripts/jquery164min.js">\x3C/script>')</script><!--local fallback for JQuery-->
	<script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="css/flexslider.css" />

	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",<!--you can also choose fade here-->
				directionNav: true,<!--Attention: if you choose true here, the nav-buttons will also appear in the ticker! -->
				keyboardNav: true,
				mousewheel: true
			});
		});
	</script>

	<!--Hide the hr img because of ugly borders in IE7. You can change the color of border-top to display a line -->
	<!--[if lte IE 7]>

	<style>
	hr { display:block; height:1px; border:0; border-top:1px solid #fff; margin:1em 0; padding:0; }
	.grid-4{ width:22% }
	</style>
	<![endif]-->

</head>
<!--===============================================================  Logo, social and menu =====================================================================================--> 

<body>
	<div class="wrapper">	
	
		<?php include 'logoheader.php'; ?>
	   
		<?php include 'socialmediaheader.php'; ?>
	 
		<?php include 'menu.php'; ?>
            
    </div><!--end of wrapper div-->    
	<div class="clear"></div> 
    
<!--========================================================================== Intro and FlexSlider =====================================================================================-->    

	<div class="wrapper">
 		<div class="grids top">
			<div class="grid-6 grid intro">
			
				<h2>Intro</h2>
				<p><a href="https://www.themuse.com/advice/6-things-you-should-put-on-your-personal-websiteand-6-things-to-avoid-at-all-costs" target="_blank">
				https://www.themuse.com/advice/6-things-you-should-put-on-your-personal-websiteand-6-things-to-avoid-at-all-costs</a>
				</p>
									
			</div><!--end of slogan div-->
 
            <div class="grid-10 grid"> 
                <div class="flexslider"><!--http://flex.madebymufffin.com/-->
                  
                    <noscript>You have Javascript set to disabled. This slideshow runs with Javascript and will only be shown if you turn it on.<br />
                    Sie haben Javascript deaktiviert. Diese Slideshow wird nur vollständig angezeigt, wenn Sie Javascript aktivieren.</noscript> 

					<ul class="slides">
						 
						<li>
							<a href="http://www."><img src="img/img1.jpg" alt="demo-image" />
							<p class="flex-caption">This is a describing caption for your image</p>
							</a>
						</li>
						<li>
							<a href="http://www."><img src="img/img2.jpg" alt="demo-image" />
							<p class="flex-caption">Of course you can also remove it, if you want</p>
							</a>
						</li> 
					  
						<li>                                  
							<a href="http://www."><img src="img/img3.jpg" alt="demo-image" />
							<!-- delete the p if you don´t want to use captions for the images-->
							</a>
						</li>
					   
						<li>                                
							<a href="http://www."><img src="img/img4.jpg" alt="demo-image" />
							<p class="flex-caption">This is another caption for your image</p>
							</a>
						</li>
						
						<li>
							<a href="http://www."><img src="img/img5.jpg" alt="demo-image" />
							<p class="flex-caption">Write whatever you want here!</p>
							</a>
						</li>
						
					</ul>
                            
				</div><!--end of div flexslider-->
			</div><!--end of div grid-10-->
        </div><!--end of div grids-->
    <!--<span class="slidershadow"></span>-->
				
    </div><!--end of div wrapper-->
            
<!--========================================================================== Content Part 1 =====================================================================================-->             

    <div class="wrapper">
    
		<div class="grids">

			<div class="grid-10 grid">
				<h2>Enjoy it, it´s free!</h2>
				<p>
				ResponseEve is responsive, fresh, modern, bold and completly free.  
				You may use it for both private and commercial projects. If you like it and if you want to show 
				some respect for my work, consider not to remove the link in the footer - though it is not required.
				Anyway, do me a favour and spread the word!</p>
				
				<p>Please understand that - due to the fact, that this is free - no service is provided.
				But I am available for freelance jobs! ;-)</p>
			   
				<a class="button" href="http://sg-layout.com/demo/Eve/ResponseEve.zip">Download me!</a>

			</div><!--end of grid-10--> 
			
			
			<div class="grid-6 grid grey">
				<h2>This is a quote</h2>
				<p class="quote">"You can use it with or without green or grey box. The classes are:
				quote, green, grey. The boxes are meant to attract attention - don´t use them extensively."
				<span>SiGa (sg-layout.com)</span></p>
		
			</div>
	   
			
		</div><!--end of grids-->
           
	</div><!--end of wrapper-->

	<hr /> 		

<!--========================================================================== Content Part 2 =====================================================================================-->         
	<div class="wrapper">   

		<div class="grids">
			<div class="grid-4 grid"> 
				<h4>Inuit framework</h4>
				<p><b>This template is responsive!</b> It is based on the <a href="http://csswizardry.com/inuitcss/" title="The Inuit CSS Framework">Inuit-framework</a>. 
				You can extend the framework with igloos - have a look at the website!<br /><a class="button" href="subpage.php">Visit the website!</a></p>
			</div>

			<div class="grid-3 grid">
				<h4>Inbuilt grid</h4>
				<p>The grid used here has a max-width of 1120 px for larger screens and 16 columns with no end or last in use to stop the flow - self-clearing!</p>
			</div>

			<div class="grid-3 grid">
				<h4>Your own grid</h4>
				<p>You can produce your own grid with the width and gutter you like with the 
				<a href="http://csswizardry.com/inuitcss/" title="The Inuit CSS Framework">Inuit Grid-builder</a>
				and replace the grid that is used here in no time!</p>
			</div>

			<div class="grid-3 grid">
				<h4>FlexSlider</h4>
				<p>The slider is the great responsive Flexslider, which offers many features. 
				<a href="http://flex.madebymufffin.com/" title="Visit the FlexSlider Website!">Visit the website</a> 
				to find out more about the features!</p>     
			</div>

			<div class="grid-3 grid">
				<h4>Nice social icons</h4>
				<p>The social icons were made by Alex Peattie, you can 
				<a href="http://www.alexpeattie.com/blog/justvector-icons-update/" title="Icon set by Alex Peattie">
				download the set on his website</a> and even use them as a webfont with @font-face!</p>
			</div>

		</div><!--end of grids-->
	</div><!--end of wrapper-->
	<hr /> 
 
<!--========================================================================== Content Part 3 =====================================================================================-->       
	<div class="wrapper">   
	 
		<div class="grids">
			<div class="grid-4 grid">
				<img src="img/small-img1.jpg" alt="demo-image">
			</div>
			
			<div class="grid-4 grid">
				<h5>Inuit framework</h5>
				<p>This template is responsive! It is based on the <a href="http://csswizardry.com/inuitcss/" title="The Inuit CSS Framework">Inuit-framework</a>. 
				You can extend the framework with igloos - have a look at the website!</p>
			</div>
			
			<div class="grid-4 grid">
				<img src="img/small-img3.jpg" alt="demo-image"> 
			</div>

			<div class="grid-4 grid">
				<h5>Respond</h5>
				<p>The goal of this script, created by <a href="https://github.com/scottjehl/Respond" title="respond by Scott Jehl">Scott Jehl</a>, 
				is to enable responsive web designs in browsers that 
				don't support CSS3 Media Queries (IE 8 and under for example).</p>
			</div>

		</div><!--end of grids-->
	</div><!--end of wrapper-->
	<!--===================================================  second row of Content Part 3 ================================================-->         
        
    <div class="wrapper">   
         
		<div class="grids">
			<div class="grid-4 grid">
				<img src="img/small-img2.jpg" alt="demo-image">
			</div>
			
			<div class="grid-4 grid">
				<h5>Font 'Oswald'</h5>
				<p>Oswald was created by <a href="https://plus.google.com/107807505287232434305/about" title="Vernon Adams on Google Plus">Vernon Adams</a> (who made other nice free fonts, too), 
				it´s embedded with @font-face. You can download it <a href="http://www.fonts2u.com/oswald.schriftart" title="Download Oswald font">here,</a>
				for example (SIL-license).</p>
			</div>
			
			<div class="grid-4 grid">
				<img src="img/small-img4.jpg" alt="demo-image">    
			</div>

			<div class="grid-4 grid">
				<h5>Formalize</h5>
				<p>The subpage 'Contact' includes the great JQuery plugin <strong>
				<a href="http://formalize.me/" title="Formalize Website">Formalize</a></strong> 
				by Nathan Smith.
				<a href="http://formalize.me/" title="Formalize Website">Visit the website</a> to find out what it does and see the demos!</p> 
			</div>

		</div><!--end of grids-->
<!--========================================================================== Ticker =====================================================================================-->                    
                    
		<!--If you don´t want to use the ticker just delete or comment it and uncomment this to use static text instead-->
		<!--<div class="intro">
			<p class="text-center">
			Hey, let your creativity flow and create something great!
			</p>
		</div>-->
		   
		<!--This is FlexSlider and uses the same settings like the one at the top. If you change them, be aware that it is for both sliders!-->
	  
		<div class=" grids flexslider intro ticker top"><!--http://flex.madebymufffin.com/-->
			<noscript>You have Javascript set to disabled. This ticker runs with Javascript and will only be shown if you turn it on.<br />
			Sie haben Javascript deaktiviert. Dieser Ticker wird nur vollständig angezeigt, wenn Sie Javascript aktivieren.</noscript> 

			<ul class="slides">
			 
				<li>
					<p class="text-center">
					Hey, let your creativity flow and create something great!
					</p>		
				</li>
				<li>
					<p class="text-center">
					You can use this as a ticker!
					</p>
				</li> 
				<li>
					<p class="text-center">
					You can use this somewhere else on this page, too, of course.
					</p>		
				</li>
			  
				<li>                                  
					<p class="text-center">
					Write anything you want here!
					</p>
				</li>
			   
				<li>                                
					<p class="text-center">
					You can display some news, if you want.
					</p>
				</li>
				
				<li>
					<p class="text-center">
					Or maybe some important infos.
					</p>  
				</li>
			
			</ul>
			
		</div><!--end of div flexslider-->
	</div><!--end of wrapper-->

<!--========================================================================== Footer =====================================================================================-->     
	<div class="wrapper">
		<div id="footer">
	
			<?php include 'footer.php';?>
			
	    </div><!--end of footer-->
	</div><!--end of wrapper-->
    
    
        				<script type="text/javascript"> <!--Outdated browsers warning/message and link to Browser-Update. Comment or delete it if you don´t want to use it-->
						var $buoop = {} 
						$buoop.ol = window.onload; 
						window.onload=function(){ 
						 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
						 var e = document.createElement("script"); 
						 e.setAttribute("type", "text/javascript"); 
						 e.setAttribute("src", "http://browser-update.org/update.js"); 
						 document.body.appendChild(e); 
						} 
						</script> 

</body>
</html>