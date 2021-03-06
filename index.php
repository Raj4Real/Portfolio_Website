<!DOCTYPE html>
<html><head>
    <title>Raj Gadhiya</title>
    <link rel="icon" href="images/icon.ico" type="image/x-icon">
	<meta name="keywords" content="responsive" />
	<meta name="description" />
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1 user-scalable=no">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo_misc.css">
    
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
   
      
    <?php
    if(isset($_REQUEST['bg']))
    {
	echo"<link rel='stylesheet' href='css/templatemo_style_dark.css'>";
    }
    else
    {
    echo"<link rel='stylesheet' href='css/templatemo_style.css'>";
    }
    ?>
    
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/font-icon/font.css">
    
    <link rel="stylesheet" href="materialize/css/materialize.css">
 	<link rel="stylesheet" href="materialize/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    
    <!--icon hover effects-->
    	<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	
    <!--image hover effects-->
    <link rel="stylesheet" type="text/css" href="css/set1.css" />
    <!--progress bar-->
    <link rel="stylesheet" href="css/style_skills.css">

    
 <!--<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
Function disableclick(event)
{
  if(event.button==2)
   {
     alert(status);
     return false;    
   }
}
</script>-->
</head>

<script language="JavaScript">

//////////F12 disable code////////////////////////
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           //alert('No F-12');
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
/////////////////////end///////////////////////
</script>
<!--body oncontextmenu="return false"-->	
<body>


  <div class="fixed-action-btn navigation" style="bottom: 45px; right: 40px;">
    <a class="btn-floating btn-large cyan waves-effect waves-light">
      <i class="large material-icons">settings</i>
    </a>
    <ul>

      <li class="visible-xs"><a onClick="dark()" class="btn-floating black waves-effect waves-light"><i class="material-icons">invert_colors</i></a></li>
      <li class="visible-xs"><a onClick="light()" class="btn-floating yellow waves-effect waves-light"><i class="material-icons">invert_colors_off</i></a></li>
      <li><a href="#templatemo" class="btn-floating green waves-effect waves-light"><i class="material-icons">call_made</i></a></li>
      <li><a href="#contact" class="btn-floating red waves-effect waves-light"><i class="material-icons">call_received</i></a></li>
    </ul>
  </div>
  
  <script>
  	function dark()
	{
		location.href = "index.php?bg";
	}
	function light()
	{
		location.href = "index.php";
	}
  </script>

	<div id="main-sidebar" class="hidden-xs hidden-sm">
    	<div class="bg">
        </div>
        
		<!--div class="logo">
			<h1>RAJ</h1>
			<span>Raj Gadhiya's portfolio</span>
		</div--> <!-- /.logo -->

		<div class="navigation">
	        <ul class="main-menu">
	            <li class="home"><a href="#templatemo">Home</a></li>
	            <li class="about"><a href="#about">Who am I</a></li>
                <li class="education"><a href="#education">Education</a></li>
	            <li class="services"><a href="#services">Proficiency</a></li>
	            <li class="portfolio"><a href="#portfolio">Portfolio</a></li>
	            <li class="contact"><a href="#contact">Contact</a></li>
	        </ul>
		</div> <!-- /.navigation -->
        
        <div class="switch"> <!-- background switch-->
        
             <form id="form" method="post">
    			<label>  
      			Light
      			<input type="checkbox" onchange=setTimeout("myfun()",500) name="bg" class="checkbox" <?php if(isset($_POST['bg']))echo"checked"; else?>/>
      			<span class="lever"></span> 
      			Dark
    			</label>
                </form>
                 <script>
                 function myfun()
                  			{ $('#form').submit(); }
                  </script>
  			
        </div>

	</div> <!-- /#main-sidebar -->

	<div id="main-content">
   
		<div id="templatemo">
			<div class="main-slider">
				<div class="flexslider">
        
				</div>
			</div>
			<div class="container-fluid">
				<div class="row" style="margin-top:-50px">
					<div class="col-md-12">
						<div class="welcome-text">
							  <div class="sentence">
    <h2><span>W</span><span>e</span><span>l</span><span>c</span><span>o</span><span>m</span><span>e</span><span> </span><span>T</span><span>o</span><span> </span><span>M</span><span>y</span><span> </span><span>W</span><span>o</span><span>r</span><span>l</span><span>d</span><span>!</span>
    </h2>
  </div>
							<article data-sr>
                            <p>Hey there!, this is the place where you can find out about myself, about my work, my skills, my education and sort of things. If you want to hire me, please feel free to contact anytime </p>
                            </article>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /#sTop -->

		<div class="container-fluid">

			<div id="about" class="section-content">
				<div class="row ">
					<div class="col-md-12">
						<div class="section-title" data-sr>
							<h2 class="z-depth-1" data-sr="enter bottom please, and hustle 100px">Who am I</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="member-item">
							<!--<div class="member-thumb">
								<img src="images/team1.jpg" alt="girl 1">
								<div class="overlay">
									<ul class="social-member">
										<li><a href="#" class="fa fa-facebook"></a></li>
										<li><a href="#" class="fa fa-twitter"></a></li>
										<li><a href="#" class="fa fa-linkedin"></a></li>
									</ul>
								</div>
							</div>-->
							<div class="member-content">
								<h4></h4>
								<p></p>
							</div>
						</div>
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="member-item">
							<div class="member-thumb">
                            <article class="gem-section-title" data-sr="scale up 50%">
								<img src="images/<?php if(isset($_REQUEST['bg'])){ echo"team2.gif"; }else { echo"team2_light.gif";} ?>">
								<!--<div class="overlay">
									<ul class="social-member">
										<li><a href="https://www.facebook.com/methegodfather" class="fa fa-facebook"></a></li>
										<li><a href="#" class="fa fa-twitter"></a></li>
										<li><a href="#" class="fa fa-linkedin"></a></li>
									</ul>
								</div>-->
							</div>
							<div class="member-content">
                            <article data-sr>
								<h4>Raj V. Gadhiya</h4>
								<p><font size="+1">Web Developer and Designer</font></p>
                             </article>
							</div>
						</div>
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="member-item">
							<!--<div class="member-thumb">
								<img src="images/team3.jpg" alt="girl 3">
								<div class="overlay">
									<ul class="social-member">
										<li><a href="#" class="fa fa-facebook"></a></li>
										<li><a href="#" class="fa fa-twitter"></a></li>
										<li><a href="#" class="fa fa-linkedin"></a></li>
									</ul>
								</div>
							</div>-->
							<div class="member-content">
								<h4></h4>
								<p></p>
							</div>
						</div>
					</div> <!-- /.col-md-4 -->
				</div> <!-- /.row -->
				<div class="row our-story">
					<div class="col-md-8">
						<h3 data-sr>Hello everyone !</h3>
                        <article data-sr ="enter right,hustle 100px">
						<b><font color="#0066ff">Hello!</font></b> I???m Raj Gadhiya a Computer Engineer, technology enthusiast, and of course a hardcore gamer.I would love verymuch to find myself better future in web designing and developing field, and make my contribution be worth. BY doing so I could expand my very little knowledge in technology for greater good.
                        <br><br/>
                        </article>
                        <article data-sr = "enter left,hustle 100px">
						Being a very good developer is my aim and interest.<br><br>
                        <b>Area of Interest</b><br>
                            ???	Web & Software Development<br>
                            ???	Java Programming<br>
                            ???	Android Programming<br>
                            ???	Website Designing(HTML,CSS,Java Script,Bootstrap)<br>
                            ???	Graphics Designing(PS,AI,CD)<br>
                            ???	Computer System Assembling and Maintaining<br>
                            ???	Hardware & Networking<br>
                            ???	Artificial Inteligence<br><br><br><br>
                        </article>   
						</div>
					<!--div class="col-md-4">
						<div class="story-image">
							<img src="images/responsive-design.jpg" alt="">
						</div>
					</div-->
				</div> <!-- /.row -->
			</div> <!-- /#about -->
			
			<div id="education" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title" data-sr>
							<h2 class="z-depth-1" data-sr="enter bottom please, and hustle 100px">Education</h2>            
						</div> <!-- /.section-title -->
                        <div class="col-md-12" style="margin-bottom:50px">
							<div class="edu">
                            	<div class="edui waves-effect card-panel col-md-4" data-sr="enter left,hustle 100px"><img src="images/edu-hsc.png" width="80px"><br>Masters</div>
                                <div class="edui2 waves-effect card-panel col-md-8" data-sr="enter right,hustle 100px">I am currently pursuing my Master of Science in Computer Science at University of Windsor
                                </div>
                            </div>
                            <div class="edu">
                            	<div class="edui waves-effect card-panel col-md-4" data-sr="enter left,hustle 100px"><img src="images/edu-clg.png" width="80px"><br>Graduate</div>
                                <div class="edui2 waves-effect card-panel col-md-8" data-sr="enter right,hustle 100px">I have completed my graduation from Noble Group of Institutions in Computer Science and Engineering
                                 with 7.6 CGPA
                                </div>
                            </div>
                          
                        </div>  
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
                <!--education details here-->
				</div>
            </div>  <!--/education-->           
            
            
			<div id="services" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title" data-sr>
							<h2 class="z-depth-1" data-sr="enter bottom please, and hustle 100px">Proficiency</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row" data-sr>
					<div class="col-md-4">
						<div class="service-item clearfix" data-sr = "enter left,hustle 100px">
							<div class="service-icon">
								<i class="fa fa-bolt fa-2x"></i>
							</div>
							<div class="service-content">
								<h3>Web <br>Development</h3>
							</div>
						</div> <!-- /.service-item -->
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="service-item"  data-sr = "enter bottom,hustle 100px">
							<div class="service-icon">
								<i class="fa fa-laptop fa-2x"></i>
							</div>
							<div class="service-content">
								<h3>Web & Graphic<br>Designing</h3>
							</div>
						</div> <!-- /.service-item -->
					</div> <!-- /.col-md-4 -->
					<div class="col-md-4">
						<div class="service-item"  data-sr = "enter right,hustle 100px">
							<div class="service-icon">
								<i class="fa fa-pencil fa-2x"></i>
							</div>
							<div class="service-content">
								<h3>Hardware & <br>Networking</h3>
							</div>
						</div> <!-- /.service-item -->
					</div> <!-- /.col-md-4 -->
				</div> <!-- /.row -->
				<div class="row our-skills">
					<div class="col-md-12">
						<h3 data-sr>My Skills</h3>
                        <article data-sr = "enter left,hustle 100px">
						I do not want to be stuck with one technology only as I would like to aquire atleast primary knowledge in every field of IT.
                        <br> However here are some things I do know about one bit or worked with. <br><br><br>
                        </article> 
					</div> 
                    <div class="col-md-4" data-sr>
                    	
                        <div class="skillbar clearfix " data-percent="90%">
							<div class="skillbar-title"><span>HTML5//CSS</span></div>
							<div class="skillbar-bar" ></div>
							<div class="skill-bar-percent">90s%</div>
						</div>
						<!---  CSS --->
						<div class="skillbar clearfix " data-percent="80%">
							<div class="skillbar-title"><span>PHP</span></div>
							<div class="skillbar-bar" ></div>
							<div class="skill-bar-percent">80%</div>
						</div>
						<!---- /CSS --->
						<!----- jQuery  ------->
						<div class="skillbar clearfix " data-percent="70%">
							<div class="skillbar-title"><span>Java</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">70%</div>
						</div>
                       
                    </div> 
                        <div class="col-md-4" data-sr>
                    	
                        <div class="skillbar clearfix " data-percent="60%">
							<div class="skillbar-title"><span>Java Script</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">60%</div>
						</div>
						<!---  CSS --->
						<div class="skillbar clearfix " data-percent="85%">
							<div class="skillbar-title"><span>Designing</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">85%</div>
						</div>
						<!---- /CSS --->
						<!----- jQuery  ------->
						<div class="skillbar clearfix " data-percent="40%">
							<div class="skillbar-title"><span>Photoshop</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">40%</div>
						</div>
                       
                    </div> 
                        <div class="col-md-4" data-sr>
                    	
                        <div class="skillbar clearfix " data-percent="30%">
							<div class="skillbar-title"><span>Ajax//Json</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">30%</div>
						</div>
						<!---  CSS --->
						<div class="skillbar clearfix " data-percent="70%">
							<div class="skillbar-title"><span>C//C++</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">70%</div>
						</div>
						<!---- /CSS --->
						<!----- jQuery  ------->
						<div class="skillbar clearfix " data-percent="85%">
							<div class="skillbar-title"><span>Database</span></div>
							<div class="skillbar-bar"></div>
							<div class="skill-bar-percent">85%</div>
						</div>
                       
                    </div>                  
				</div>
			</div> <!-- /#services -->

			<div id="portfolio" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title" data-sr>
							<h2 class="z-depth-1" data-sr="enter bottom please, and hustle 100px">Portfolio</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
                	 <div class="col-md-4">
						  <div class="card" data-sr="enter left please, and hustle 100px">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="images/jau.jpg">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">JAU Portal<i class="material-icons right">more_vert</i></span>
                              <p></p>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">JAU<i class="material-icons right">close</i></span>
                              <p>This Portal was developed for Junagadh Agricultural University</p>
                            </div>
                          </div>
					</div>
                    <div class="col-md-4">
						<div class="card" data-sr="enter bottom please, and hustle 100px">
    						<div class="card-image waves-effect waves-block waves-light">
      							<img class="activator" src="images/nobtech.jpg">
   							</div>
    						<div class="card-content">
      							<span class="card-title activator grey-text text-darken-4">NobTech<i class="material-icons right">more_vert</i></span>
      							<p></p>
    						</div>
    						<div class="card-reveal">
      							<span class="card-title grey-text text-darken-4">NobTech Event<i class="material-icons right">close</i></span>
      							<p>This website was developed for an event held at my college</p>
    						</div>
 						 </div>
					</div>     
                    <div class="col-md-4">
						  <div class="card" data-sr="enter right please, and hustle 100px">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="images/website.jpg">
                            </div>
                            <div class="card-content">
                              <span class="card-title activator grey-text text-darken-4">Portfolio<i class="material-icons right">more_vert</i></span>
                              <p></p>
                            </div>
                            <div class="card-reveal">
                              <span class="card-title grey-text text-darken-4">Personal Website<i class="material-icons right">close</i></span>
                              <p>Porfolio and website designing, freelancing</p>
                            </div>
                          </div>
					</div>
           </div>
           </div>  
                
				 <!-- /#portfolio -->

			<div id="contact" class="section-content">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title" data-sr>
							<h2 class="z-depth-1" data-sr="enter bottom please, and hustle 100px">Contact Me</h2>
						</div> <!-- /.section-title -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-4">
                    	<center>
  						<article data-sr="enter bottom please, and hustle 100px"> 
        					<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
							<a href="#set-1" class="hi-icon hi-icon-mobile">Mobile</a>
                            <p>Raj Gadhiya<br>	
        					226 961 3514</p>
                            </div>
      					</article>
                        </center>
      					<!-- end of article --> 
    				</div>
    					<!-- End of column -->
    
    				<div class="col-md-4" data-equalizer-watch>
                    	<center>
      					<article class="gem-text-block" data-sr="enter bottom please, and hustle 100px">                      
                         	<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
							<a href="https://www.google.co.in/maps/place/Shapur+Sorath+Rd,+Shapur,+Gujarat+362205/@21.4684322,70.371314,17z/data=!3m1!4b1!4m2!3m1!1s0x3957fefbcc692e7b:0xb6cf587ca1baf674" target="_blank" class="hi-icon hi-icon-location">Location</a>	
        					<p>Windsor <br>ON Canada</p>
                            </div>
      					</article>
      					</center>
                        <!-- end of article --> 
    				</div>
    				<!-- End of column -->
    
    				<div class="col-md-4" data-equalizer-watch>
      					<center>
                        <article class="gem-text-block" data-sr="enter bottom please, and hustle 100px">
                         	<div class="hi-icon-wrap hi-icon-effect-1 hi-icon-effect-1a">
							<a href="https://gmail.com" target="_blank" class="hi-icon hi-icon-mail">Mail</a>	
        					<p>rj.gadhiya@gmail.com</p>
                            </div>
      					</article>
                        </center>
                        <br><br>
      				<!-- end of article -->
						<!--<div class="map-holder">
							<div class="google-map-canvas" id="map-canvas" style="height: 400px;">
                    		</div>
						</div>--> <!-- /.map-holder -->
					</div> <!-- /.col-md-12 -->
				</div>
                 <!-- /.row -->
				<div class="row contact-form">
					
                    
                  <form class="col s12">
      				<div class="row">
        				<div class="input-field col s6" data-sr="enter bottom please, and hustle 100px">
          					<input id="first_name" type="text" placeholder="First Name" class="validate">
          					<label for="first_name"></label>
        				</div>
        			<div class="input-field col s6" data-sr="enter bottom please, and hustle 100px">
          					<input id="last_name" type="text" placeholder="Last Name" class="validate">
          					<label for="last_name"></label>
       				 </div>
                     <div class="input-field col s12" data-sr="fade in">
          					<textarea id="textarea1" placeholder="Message" class="materialize-textarea"></textarea>
          					<label for="textarea1"></label>
                      </div> 
    			   </form>
                    
                    
                    
                  			<div class="submit-btn">
                        	<article data-sr="fade in">
							<a class="waves-effect waves-light btn-large brand-bg white-text disabled">Post Comments (Soon)</a>
                            </article>
						</div><!-- /.submit-btn -->
					</div><!-- /.col-md-12 -->
				</div>
			</div> <!-- /#contact -->

		</div> <!-- /.container-fluid -->

		<div class="site-footer">
			<div class="first-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="social-footer">
								<ul>
									<li><a href="https://www.facebook.com/RAJ4Q7" target="_blank" class="fa fa-facebook" alt="Facebook"></a></li>
                                    <!--<li><a href="#" class="fa fa-dribbble"></a></li>-->
									<li><a href="https://in.linkedin.com/in/raj4q7" target="_blank" class="fa fa-linkedin"></a></li>
									<li><a href="#" class="fa fa-rss"></a></li>
								</ul>
							</div> <!-- /.social-footer -->
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row -->
				</div> <!-- /.container-fluid -->
			</div> <!-- /.first-footer -->
			<div class="bottom-footer">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<p class="copyright"><center> 2018 <a href="#">RAJ</a></center>
                            </p>
						</div> <!-- /.col-md-6 -->
						<!--<div class="col-md-6 credits">
							<p>Design by:<a href="http://www.theone.hostei.com"> theOne Graphics Designer</a></p>
                            
						</div> -->
					</div> <!-- /.row -->
				</div> <!-- /.container-fluid -->
			</div> <!-- /.bottom-footer -->
		</div> <!-- /.site-footer -->

	</div> <!-- /#main-content -->

	<!-- JavaScripts -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/jquery.singlePageNav.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/custom.js"></script>
    <script src="js/index_skills.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script>
		$(document).ready(function(){
			$("a[data-gal^='prettyPhoto']").prettyPhoto({hook: 'data-gal'});
		});

        function initialize() {
          var mapOptions = {
            zoom: 11,
            center: new google.maps.LatLng(16.8451789,96.1439764)
          };

          var map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        }

        function loadScript() {
          var script = document.createElement('script');
          script.type = 'text/javascript';
          script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' +
              'callback=initialize';
          document.body.appendChild(script);
        }

        window.onload = loadScript;
    </script>
    
    		<script>
			var hash = window.location.hash,
				current = 0,
				demos = Array.prototype.slice.call( document.querySelectorAll( '#codrops-demos > a' ) );
			
			if( hash === '' ) hash = '#set-1';
			setDemo( demos[ parseInt( hash.match(/#set-(\d+)/)[1] ) - 1 ] );

			demos.forEach( function( el, i ) {
				el.addEventListener( 'click', function() { setDemo( this ); } );
			} );

			function setDemo( el ) {
				var idx = demos.indexOf( el );
				if( current !== idx ) {
					var currentDemo = demos[ current ];
					currentDemo.className = currentDemo.className.replace(new RegExp("(^|\\s+)" + 'current-demo' + "(\\s+|$)"), ' ');
				}
				current = idx;
				el.className = 'current-demo'; 
			}
		</script>

    
<script src="js/vendor/jquery.js"></script> 

<!-- scripts for pop up effect-->
<!-- Foundation Scripts --> 
<script src="js/foundation.min.js"></script> 
<script type="text/javascript" src="js/foundation/foundation.equalizer.js"></script> 

<!-- Count up JS --> 
<script type="text/javascript" src="js/assets/countUp.js/countUp.min.js"></script> 

<!-- Cycle 2 Js --> 
<script type="text/javascript" src="js/assets/cycle2/jquery.cycle2.min.js"></script> 
<script type="text/javascript" src="js/assets/cycle2/jquery.cycle2.carousel.min.js"></script> 

<!-- Jquery Waypoints --> 
<script type="text/javascript" src="js/assets/jquery-waypoints/waypoints.min.js"></script> 

<!-- Scrollit JS --> 
<script type="text/javascript" src="js/assets/scrollIt.js/scrollIt.min.js"></script> 

<!-- Scroll Animation JS --> 
<script type="text/javascript" src="js/assets/scrollReveal-js/scrollReveal.js"></script> 

<!-- Import Main Script --> 
<script type="text/javascript" src="js/main.js"></script> 
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script type='text/javascript' src='js/logging.js'></script>

<script src="materialize/js/materialize.js"></script>	<!-- materialized switch -->
<script src="materialize/js/materialize.min.js"></script> <!-- materialized switch -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/loadmore.js"></script>
    

</body>
</html>
