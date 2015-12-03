<!DOCTYPE html>
<html lang="de"><!-- use class="debug" here if you develope a template and want to check-->
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="put a short description in here" />
    <meta name="keywords" content="put your important keywords in here" />
    <meta name="revisit-after" content="7 days" />
    <meta name="robots" content="index,follow" />
	
	<title>Lorenzo Giordano Javier</title>
			
            
            <link rel="stylesheet" href="css/inuit.css" />
            <link rel="stylesheet" href="css/fluid-grid16-1100px.css" />
            <link rel="stylesheet" href="css/eve-styles.css" />
            <link rel="stylesheet" href="css/formalize.css" /><!--include that only on pages with forms-->
            <link rel="shortcut icon" href="icon.png" />
            <link rel="apple-touch-icon-precomposed" href="img/icon.png" />
            
            <script src="js/respond-min.js" type="text/javascript"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
            <script>window.jQuery || document.write('<script src="scripts/jquery164min.js">\x3C/script>')</script><!--local fallback for JQuery-->
            <script src="js/jquery.formalize.min.js" type="text/javascript"></script><!--include that only on pages with forms-->
				 
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
                   
		<?php include 'socialmediaheader.php';?>
                    
        <?php include 'menu.php'; ?>
                        
    </div><!--end of wrapper div--> 
           
	<div class="clear"></div>    

<!--===============================================================  Left content, address =====================================================================================-->    
     <div class="wrapper">
    
    		<div class="grids top">

                <div class="grid-6 grid">
                            <h2>Address</h2>
                             <div>   
                                <p class="bottom">
                                Lorenzo Giordano Javier<br />
                                xxx xxx xxx<br />
                                California<br />
                                United States<br /><br />
                                Phone: 925 200 7284<br />
                                Fax: 123 456 789 - 11<br />
                                Email: loj90@sbcglobal.net
                              </p>
                             </div>
                             
                             
                             <div class="green bottom">   
                                <h3>Formalize</h3>
                                <p>This subpage includes the great JQuery plugin <strong>
                                <a href="http://formalize.me/" title="Formalize Website">Formalize</a></strong> 
                                by Nathan Smith.
                                <a href="http://formalize.me/" title="Formalize Website">Visit the website</a> to find out what it does and see the demos!
                                You don´t have to use a table as shown here (this is just an example), you can build your form without tables, too.
                                Inspect the CSS to utilize the classes that fit your needs.<br />
                                Comment or delete the section "Forms" in inuit.css when you make use of Formalize so the styles won´t interfere.
                                </p>
                             </div>    
                             
                             <div>   
                                <p class="message warning bottom">
                                <b>Note:</b> This is just a demo for contact form styles and behaviour. <b>It doesn't actually submit anything.</b>
                                To make it work, you will have to include a fitting script.
                              </p>
                             </div>   
						</div> 		
                
<!--===============================================================  Contact form =====================================================================================-->                 
                  <div class="grid-10 grid">
                           <h2>Contact me</h2>

					<!--An example for a contact form from formalize.me, table in use.</h6>-->
                                  
                       <form  action="sendemail.php" method="post" enctype="multipart/form-data" onsubmit="return true">
                              <table class="form">
                                <tr>
                                  <th>
                                    <label for="name">
                                      Name
                                    </label>
                                  </th>
                                  <td>
                                    <input class="input_full" type="text" id="name" name="name" required="required" />
                        
                                  </td>
                                </tr>
                                <tr>
                                  <th>
                                    <label for="email">
                                      Email
                                    </label>
                                  </th>
                                  <td>
                        
                                    <input class="input_full" type="email" id="email" name="email" required="required" />
                                  </td>
                                </tr>
                               
                                <tr>
                        
                                  <th>
                                    <label for="tel">
                                      Phone
                                    </label>
                                  </th>
                                  <td>
                                    <input class="input_full" type="tel" id="tel" name="tel" required="required" />
                                  </td>
                                </tr>
                        
                                <tr>
                                  <th>
                                    <label for="url">
                                      URL
                                    </label>
                                  </th>
                                  <td>
                                    <input class="input_full" type="url" id="url" name="url" placeholder="http://" />
                                  </td>
                        
                                </tr>
                                <tr>
                                  <th>
                                    <label for="subject">
                                      Subject
                                    </label>
                                  </th>
                                  <td>
                                    <select class="input_full" id="subject" name="subject">
                        
                                      <option value="">Choose subject...</option>
                                      
                                        <option value="Question">Question</option>
                                        <option value="Project">Project</option>
                                        <option value="Feedback">Feedback</option>
                                        <option value="Other">Other</option>
                        
                                    </select>
                                  </td>
                                </tr>
                                <tr>
                        
                                  <th>
                                    <label for="priority_normal">
                                      Priority
                                    </label>
                                  </th>
                                  <td>
                                    <input type="radio" name="priority" id="priority_urgent" value="Urgent">
                                    <label for="priority_urgent">
                                      Urgent
                                    </label>
                        
                                    &nbsp;
                                    &nbsp;
                                    <input type="radio" name="priority" id="priority_normal" value="Normal" checked="checked">
                                    <label for="priority_normal">
                                      Normal
                                    </label>
                                    &nbsp;
                                    &nbsp;
                                    <input type="radio" name="priority" id="priority_low" value="Low">
                        
                                    <label for="priority_low">
                                      Low
                                    </label>
                                  </td>
                                </tr>
                                <tr>
                                  <th>
                        
                                    <label for="message">
                                      Your<br />
                                      message
                                    </label>
                                  </th>
                                  <td>
                                    <textarea id="message" name="message" rows="8" required="required" placeholder="Please write your message here."></textarea>
                                  </td>
                        
                                </tr>
                                 <tr>
                                  <th>
                                    <label for="cc">
                                      <abbr title="Courtesy Copy">CC</abbr>
                                    </label>
                        
                                  </th>
                                  <td>
                                    <input type="checkbox" id="cc" name="cc" value="1" />
                                    <label for="cc">
                                      Send me a copy of this email
                                    </label>
                                  </td>
                                </tr>
								<tr>
                                  <th>
								  
                                  </th>
                                  <td>
									  <p>
										<input type="submit" value="Send" class="float_left" />
										<input type="reset" value="Reset" class="float_right">
									  </p>
                                  </td>
                                </tr>
                              </table>
                     
                            </form>
                           
                </div><!--end of grid-10--> 
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
                        
</body>
</html>