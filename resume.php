<!DOCTYPE html>
<html lang="de"><!-- use class="debug" here if you develope a template and want to check-->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
   	<!-- some meta tags, important for SEO"--> 
    <meta name="description" content="Lorenzo Giordano Javier" />
    <meta name="keywords" content="put your important keywords in here" />
    <meta name="revisit-after" content="7 days" />
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


	<!--Hide the hr img because of ugly borders in IE7. You can change the color of border-top to display a line -->
		<!--[if lte IE 7]>
		<style>
		hr { display:block; height:1px; border:0; border-top:1px solid #fff; margin:1em 0; padding:0; }
		.grid-4{ width:22% }
		</style>
	<![endif]-->

</head>

<?php require_once("config/lorenzogiordanojavierdb.php"); ?>

<!--===============================================================  Logo, social and menu =====================================================================================--> 
<body>
	<div class="wrapper">
	
        <?php include 'logoheader.php'; ?>
                   
		<?php include 'socialmediaheader.php';?>
                    
        <?php include 'menu.php'; ?>
                        
    </div><!--end of wrapper div--> 
           
	<div class="clear"></div>    
<!--===============================================================  Intro =====================================================================================--> 
	<div class="wrapper">
 		<div class="grids">
			<div class="grid-16 grid intro grey">
			 
				<p>An introducing line here or just delete this column! You can use class 'grey' or 'green'.</p>
									
			</div><!--end of slogan div-->
 
        </div><!--end of div grids-->
	
    </div><!--end of div wrapper-->    

<!--===============================================================  Style playground =====================================================================================-->     
      
    <div class="wrapper">
    
		<div class="grids">

			<div class="grid-12 grid">
			
					<!-- ============= Education ============ -->
					
					<h1>Education</h1>
					
					<hr/>
					
					<?php  
					$sql = "SELECT *,YEAR(START_DATE) AS START_DATE,YEAR(END_DATE) AS END_DATE FROM lorenzogiordanojavierdb.education ORDER BY START_DATE DESC";
					$result = mysqli_query($con,$sql);

					while ($row=mysqli_fetch_array($result)) {
						echo
						"<div id=''>
							<a href='".$row['SCHOOL_URL']."' target='_blank'><img src='".$row['SCHOOL_LOGO']."' style='float: right; max-width: 100px; max-height: 100px;' /></a>
							<h3>".$row['SCHOOL_NAME']."<br>".$row['START_DATE']."-".$row['END_DATE']."</h3>
						</div>";
					}
					?>
				
					<hr/>
					
					<h2>Text</h2>
					<p>This paragraph shows how all text encapsulated only within <strong>&lt;p&gt;&lt;/p&gt;</strong> 
					tags will appear.</p>
					<p>More text examples are as follows:</p>
					<p>
						<em>This is emphasised text</em><br/>
						<strong>This is strong text</strong><br/>
						<del>This is deleted text</del><br/>
						<a href="#">This is a link</a>
					</p>
					<p>
					<code>This is a block of code<br/>
					This is a block of code<br/>
					This is a block of code</code>
					</p>
					
					<p><a class="button" href="#">This is a button</a></p>
					
						<p class="quote">
							"This is a styled quote. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis tempor. 
							Nullam tortor. Nulla vel dui. Curabitur et metus. This is a quote. Lorem ipsum dolor 
							sit amet, consectetuer adipiscing elit. Duis tempor. Nullam tortor. Nulla vel dui. 
							Curabitur et metus." <span>John Doe (1900 - 2000) </span>
						</p>
						
					
						
					<h4 class="text-center">Can I haz messages?</h4>
						<p class="message success">Yes of course you can!</p>
						<p class="message info">This is an info message.</p>
						<p class="message warning">Note: Eve doesn´t claim to be perfect (me to)!</p>
						<p class="message error">It is prohibited to turn this design into a fixed layout!</p>
					
					<hr/>
					
					<h2>Images</h2>
					<p>The following are examples of image formats:</p>
					<p><img class="left" src="img/small-img4.jpg" width="200" height="150" alt="demo-pic"> <strong>A left aligned 
					image</strong>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed viverra tortor non dolor. 
					Donec nulla libero, ullamcorper sed, consequat dignissim, luctus blandit, sapien. 
					In ante. Proin aliquam odio ut sem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Consequat dignissim, 
					luctus blandit, sapien. In ante. Proin aliquam odio ut sem consequat dignissim, luctus blandit, sapien. 
					In ante. Proin aliquam odio ut sem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
					<p><img class="right" src="img/small-img2.jpg" width="200" height="150" alt="demo-pic"> <strong>A right 
					aligned image</strong>. Lorem ipsum dolor sit amet, 
					consectetuer adipiscing elit. Sed viverra tortor non dolor. Donec nulla libero, ullamcorper sed, consequat 
					dignissim, luctus blandit, sapien. 
					In ante. Proin aliquam odio ut sem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
					<p><a href="#"><img class="left" src="img/small-img1.jpg" width="200" height="150" alt="demo-pic"></a> <strong>A left 
					aligned, linked image</strong>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Sed viverra tortor 
					non dolor. Donec nulla libero, ullamcorper sed, consequat dignissim, luctus 
					blandit, sapien. In ante. Proin aliquam odio ut sem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. </p>
					
					<hr/>
					
					<h2>Lists</h2>
					<h3>Unordered list</h3>
					<ul>
						<li><span>List item example</span></li>
						<li><span>List item example</span>
							<ul>
								<li><span>Sub list item example</span></li>
								<li><span>Sub list item example</span></li>
							</ul>
						</li>
						<li><span>List item example</span></li>
					</ul>
					
					<h3>Unordered list with class "check"</h3>
					<ul class="check">
						<li><span>List item example</span></li>
						<li><span>List item example</span>
							<ul>
								<li><span>Sub list item example</span></li>
								<li><span>Sub list item example</span></li>
							</ul>
						</li>
						<li><span>List item example</span></li>
					</ul>
					
					<h3>Ordered list</h3>
					<ol>
						<li><span>List item example</span></li>
						<li><span>List item example</span>
							<ol>
								<li><span>Sub list item example</span></li>
								<li><span>Sub list item example</span></li>
							</ol>
						</li>
						<li><span>List item example</span></li>          
					</ol>
					
					<h3>Definition list</h3>
					<dl>
						<dt>Definition title</dt>
						<dd>Definition description</dd>
						<dt>Definition title</dt>
						<dd>Definition description</dd>
					</dl>
					
					 <h2>And how about tabs?</h2>
				
			   
					<ul class="tabs">
						<li><a href="#tab1">Education</a></li>
						<li><a href="#tab2">They</a></li>
						<li><a href="#tab3">Are!</a></li>
					</ul>
					
					<div class="tab_container">
						<div id="tab1" class="tab_content">
							<?php  
					$sql = "SELECT *,YEAR(START_DATE) AS START_DATE,YEAR(END_DATE) AS END_DATE FROM lorenzogiordanojavierdb.education ORDER BY START_DATE DESC";
					$result = mysqli_query($con,$sql);

					while ($row=mysqli_fetch_array($result)) {
						echo
						"<div id=''>
							<a href='".$row['SCHOOL_URL']."' target='_blank'><img src='".$row['SCHOOL_LOGO']."' style='float: right; max-width: 100px; max-height: 100px;' /></a>
							<h3>".$row['SCHOOL_NAME']."<br>".$row['START_DATE']."-".$row['END_DATE']."</h3>
						</div>";
					}
					?>
						</div>
						<div id="tab2" class="tab_content">
							<p>
							These are some very basic tabs. There are some downsides with tabs in responsive layouts -
							in small screens they will stack over each other. Make sure to test how
							it looks like when you want to use them. Don´t use too long titles.
							</p>
						</div>
						 <div id="tab3" class="tab_content">
						   <p>
							These are some very basic tabs. There are some downsides with tabs in responsive layouts -
							in small screens they will stack over each other. Make sure to test how
							it looks like when you want to use them. Don´t use too long titles.
							</p> 
						</div>
					</div>
				
					<hr class="clear">                         
					
					<h2>Tables</h2>
					<p>Data tables and forms don´t always play nice in responsive layouts.
					They can be flexible in width but to display cell content in a way that is 
					readable and makes sense, they have to have a certain width. There are
					approaches in the web to deal with that, but that´s an own topic.
					Search for it if you are in need of larger tables or forms.</p>
					
					<table>
						<thead>
							<tr>
								<th scope="col">Table header</th>
								<th scope="col">Table header</th>
								<th scope="col">Table header</th>
								<th scope="col">Table header</th>
							</tr>
						</thead>
						<tfoot>
							<tr><td colspan="4">&nbsp;</td></tr>
						</tfoot>
						<tbody>
							<tr>
								<td>Cell data</td>
								<td>Cell data</td>
								<td>Cell data</td>
								<td>Cell data</td>
							</tr> 
							<tr>
								<td>Cell data</td>
								<td>Cell data</td>
								<td>Cell data</td>
								<td>Cell data</td>
							</tr>    
							<tr>
								<td>Cell data</td>
								<td>Cell data</td>
								<td>Cell data</td>
								<td>Cell data</td>
							</tr>
						</tbody>                           
					</table>
					
					<table>
						<thead>
							<tr>
								<th scope="col">&nbsp;</th>
								<th scope="col">Table header</th>
								<th scope="col">Table header</th>
								<th scope="col">Table header</th>
							</tr>
						</thead>
						<tfoot>
							<tr><td colspan="4">&nbsp;</td></tr>
						</tfoot>
						<tbody>
							<tr>
								<th scope="row">Cell data</th>
								<td>Cell data</td>
								<td>Cell data</td>
								<td>Cell data</td>
							</tr> 
							<tr>
								<th scope="row">Cell data</th>
								<td>Cell data</td>
								<td>Cell data</td>
								<td>Cell data</td>
							</tr>    
							<tr>
								<th scope="row">Cell data</th>
								<td>Cell data</td>
								<td>Cell data</td>
								<td>Cell data</td>
							</tr>
						</tbody>                           
					</table>
					
				<p>To see a form, go <a href="contact.php" title="Form-demo on the contact page">here</a>!</p>
							
					   
			</div><!--end of grid-10--> 
                
<!--===============================================================  Green box (sidebar) =====================================================================================-->                 
                
			<div class="grid-4 grid green">
				<h2>Styles</h2>
				<p>This is the style-playground! It shows how different elements of this template 
					are formatted and can be used as a reference when using the template to style 
					your own website.</p>
				 <h5>Grid</h5>
					<p>The grid system is easy to use. You´ve got 16 colums, so if you want to divide your content 
					into halfs, use grid-8 plus grid-8, for example.
					Don´t forget to always wrap them into a container with class "grids".</p>
				<h5>CSS</h5>
					<p>There are many useful classes in inuit.css and additional ones in eve-styles.css.
					Have a look into the code to find the ones that suit your needs.</p>
			</div>
		</div><!--end of grids-->
           
		<hr>     
	</div><!--end of wrapper-->
    
<!--===============================================================  Bottom content =====================================================================================-->     
		
    <div class="wrapper">   
         
		<div class="grids">
			<div class="grid-4 grid">
				<img src="img/small-img1.jpg" alt="demo-image">
				<h4 class="text-center">Inuit framework</h4>
				<p>This template is responsive! It is based on the <a href="http://csswizardry.com/inuitcss/" title="The Inuit CSS Framework">Inuit-framework</a>. 
				You can extend the framework with igloos - have a look at the website!</p>
			</div>
			
			<div class="grid-4 grid">
				<img src="img/small-img2.jpg" alt="demo-image">
				<h4 class="text-center">Inbuilt grid</h4>
				<p>The grid used here has a max-width of 1120 px for larger screens and 16 columns with no end or last in use to stop the flow - self-clearing!</p>
			</div>
			
			<div class="grid-4 grid">
				<img src="img/small-img3.jpg" alt="demo-image">
				<h4 class="text-center">FlexSlider</h4>
				<p>The slider is the fantastic responsive Flexslider, which offers many features. 
				<a href="http://flex.madebymufffin.com/" title="Visit the FlexSlider Website!">Visit the website</a> 
				to find out more about the functions and features!</p>     
			</div>

			<div class="grid-4 grid">
				<img src="img/small-img4.jpg" alt="demo-image">
				<h4 class="text-center">Nice social icons</h4>
				<p>The social icons were made by Alex Peattie, you can 
				<a href="http://www.alexpeattie.com/blog/justvector-icons-update/" title="Icon set by Alex Peattie">
				download the set on his website</a> and even use them as a webfont with @font-face!</p>
			</div>

		</div><!--end of grids-->
	</div><!--end of wrapper-->
        
<!--===============================================================  Footer =====================================================================================-->  
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
				
	<script type="text/javascript">  <!--Javascript for Tabs by Sohtanaka, include it on pages where you use tabs, else delete it-->                     
		$(document).ready(function() {
			//When page loads...
			$(".tab_content").hide(); //Hide all content
			$("ul.tabs li:first").addClass("active").show(); //Activate first tab
			$(".tab_content:first").show(); //Show first tab content

			//On Click Event
			$("ul.tabs li").click(function() {
				$("ul.tabs li").removeClass("active"); //Remove any "active" class
				$(this).addClass("active"); //Add "active" class to selected tab
				$(".tab_content").hide(); //Hide all tab content

				var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
				$(activeTab).fadeIn(); //Fade in the active ID content
				return false;
			});
			
		});
	</script>
</body>
</html>