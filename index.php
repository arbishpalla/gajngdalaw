<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewinter.com/html/lawhouse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2016 09:00:48 GMT -->
<?php

        
          if($_POST){


            $to ="a.razzaqbhutto@yahoo.com";        
            $txt = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $com = $_POST['comment'];
            $headers = "From: $email" . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
              
              if(mail($to,$subject,$txt,$headers)){
                  echo "Mail sent";
              }
              else{
              
              echo "Mail sending fail";
              }
              
          }
    ?>
    <head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>Jangda Law - Lawyer Attorney Html Template</title>


	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="img/favicon/logo4.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.html">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.html">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.html">

	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- IonIcons -->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme-min.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="css/colorbox.css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
	
<body>

	<div class="body-inner">

	<div id="top-bar" class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-4 visible-lg visible-md">
					<div class="top-bg">
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 top-menu ">
					<ul class="unstyled">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div><!--/ Top menu end -->

				<div class="col-md-5 col-sm-6 col-xs-12 top-social">
					<ul class="unstyled">
						<li>
							<a title="Facebook" href="#">
								<span class="social-icon"><i class="fa fa-facebook"></i></span>
							</a>
							<a title="Twitter" href="#">
								<span class="social-icon"><i class="fa fa-twitter"></i></span>
							</a>
							<a title="Google+" href="#">
								<span class="social-icon"><i class="fa fa-google-plus"></i></span>
							</a>
							<a title="pinterest" href="#">
								<span class="social-icon"><i class="fa fa-pinterest-p"></i></span>
							</a>
							<a title="instagram" href="#">
								<span class="social-icon"><i class="fa fa-instagram"></i></span>
							</a>
						</li>
					</ul>
				</div><!--/ Top social end -->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</div><!--/ Topbar end -->

	<!-- Header start -->
	<header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="logo col-xs-12 col-sm-4">
	            <a href="index.html">
                	<img class="img-responsive" src="images/logo4.png" style="width: 283px;height: 123px;" alt="">
               </a>
            </div><!-- logo end -->

         	<div class="col-xs-12 col-sm-7 header-right">
         		<ul class="top-info">
						<li>
							<div class="info-box"><span class="info-icon"><i class="fa fa-phone">&nbsp;</i></span>
								<div class="info-box-content">
								<h3 class="info-box-title">Call Us</h3>
								<h4 class="info-box-subtitle">(972)-468-8855</h4>
								</div>
							</div>
						</li>
						<li>
							<div class="info-box"><span class="info-icon"><i class="fa fa-envelope-o">&nbsp;</i></span>
								<div class="info-box-content">
									<h3 class="info-box-title">Email Us</h3>
									<h4 class="info-box-subtitle">info@jangdalaw.com</h4>
								</div>
							</div>
						</li>
						<li>
							<div class="consult">
								<a href="https://www.google.com/maps/place/12001+N+Central+Expy+%23280,+Dallas,+TX+75243,+USA/@32.9138903,-96.7708993,17z/data=!3m1!4b1!4m2!3m1!1s0x864c20148e425095:0x19d9e6268b3036c5" target="_blank"><span>Free Consult</span></a>
							</div>
                       
                		 </li>
                    </ul>
					
         	</div><!-- header right end -->
			</div><!-- Row end -->
		</div><!-- Container end -->
	</header><!--/ Header end -->

	<nav class="site-navigation navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="site-nav-inner">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
		    			</button>

		    			<div class="collapse navbar-collapse navbar-responsive-collapse">

		    				<ul class="nav navbar-nav">
								<li class="dropdown active">
			                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
										<ul class="dropdown-menu" role="menu">
		                           <li class="active"><a href="index.html">Home One</a></li>
		                           <li><a href="index-2.html">Home Two</a></li>
				                  </ul>
			               </li>
			               <li class="dropdown">
			                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Firm <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
                            	<li><a href="about.html">About Us</a></li>
                            	<li><a href="testimonials.html">Testimonials</a></li>
                            	<li><a href="gallery.html">Our Gallery</a></li>
                        		<li><a href="career.html">Career</a></li>
                            	<li><a href="faq.html">Faq</a></li>
			                  </ul>
			               </li>

			               <li class="dropdown">
			                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Practice Area <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
	                           <li><a href="practice-all.html">Practice All</a></li>
	                           <li><a href="practice-details.html">Practice Details</a></li>
			                  </ul>
			               </li>
			               <li class="dropdown">
			                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Attorneys <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
	                           <li><a href="attorneys-all.html">Attorneys All</a></li>
	                           <li><a href="attorneys-single.html">Attorneys Single</a></li>
			                  </ul>
			               </li>
			               <li class="dropdown">
			                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Case Results <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
	                           <li><a href="case-all.html">Case Results All</a></li>
	                           <li><a href="case-single.html">Case Results Single</a></li>
			                  </ul>
			               </li>
			               <li class="dropdown">
			                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Legal News <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
	                           <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
	                           <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
	                           <li><a href="news-single.html">News Single Page</a></li>
			                  </ul>
			               </li>
<!--
			                <li class="dropdown visible-lg visible-md">
			                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown-menu" role="menu">
	                           <li><a href="elements.html">Elements</a></li>
	                           <li><a href="404.html">404</a></li>
	                           <li class="dropdown-submenu">
                            		<a href="#">Parent Menu</a>
                            			<ul class="dropdown-menu">
                            				<li><a href="#">Child Menu 1</a></li>
                            				<li><a href="#">Child Menu 2</a></li>
                            				<li><a href="#">Child Menu 3</a></li>
                            			</ul>
                            	</li>
			                  </ul>
			               </li>
-->
			               <li><a href="contact.html">Contact</a></li>
                           <li><a href="#">Blog</a></li>
			               <li><a href="http://jangdalaw.mycase.com">Client Login</a></li>
<!--                            <li class="search"><button class="fa fa-search"></button></li>-->
			            </ul><!--/ Nav ul end -->

		    			</div><!--/ Collapse end -->
					</div><!-- Site navbar end -->
				</div><!--/ Cold end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->

		<div class="site-search">
			<div class="container">
				<input type="text" placeholder="type what you want and enter">
				<span class="close">×</span>
			</div>
		</div>
	</nav><!--/ Navigation end -->

	<!-- Carousel -->
   <div id="main-slide" class="carousel slide" data-ride="carousel">

		<!-- Indicators -->
		<ol class="carousel-indicators visible-lg visible-md">
		  	<li data-target="#main-slide" data-slide-to="0" class="active"></li>
		   <li data-target="#main-slide" data-slide-to="1"></li>
		   <li data-target="#main-slide" data-slide-to="2"></li>
		</ol><!--/ Indicators end-->

		<!-- Carousel inner -->
		<div class="carousel-inner">
		   <div class="item active" style="background-image:url(images/dallas5.jpg)">
            <div class="slider-content">
               <div class="col-md-12">
              		<div class="slider-text wow slideInLeft" data-wow-delay=".2s">
              		<!--	<h2 class="slide-head">LawHouse</h2>
                     <h3 class="slide-title">Your <span>Shelter</span> &amp;<br/>
                     <span>Security</span></h3>-->
                        <div class="quote_form" style=" width:70%">

						<h3 class="quote_form_title">Request A Consultation <br /> <span>Totally Free</span></h3>
						<div class="row">
                   	<div class="col-xs-12 col-md-12">
	                    	<div class="quote-form-text">
	                    		Fill out the form below, we will get back you soon. You can also call us now on (90) 03452-8437. 
	                   
                                    </div>
                                    
                    </div>
                	</div>
                	<div class="row">
	                  <div class="col-xs-12 col-md-12">
	                    	<div class="form-group">
									<input class="form-control" name="name" id="name" placeholder="Your Name" required>
								</div>
	                  </div>
                	</div>
						<div class="row">
	                  <div class="col-xs-12 col-md-12">
	                    	<div class="form-group">
									<input class="form-control" name="email" id="email" placeholder="Your Email" required>
								</div>
	                  </div>
                	</div>
                	<div class="row">
                   	<div class="col-xs-12 col-md-12">
                    		<div class="form-group">
                            <input class="form-control" name="subject" id="subject" type="text" placeholder="Subject" required />
                        </div>
                    </div>
                	</div>
                 <div class="row">
                    	<div class="col-xs-12 col-md-12">
                    		<div class="form-group">
                           <textarea class="form-control" placeholder="Case Details" rows="4" name="comment" required></textarea>
                    		</div>
                    	</div>
                 </div>
                            
					</div>
                 	</div>
                  <div class="slider-img wow slideInRight" data-wow-delay=".5s">
                     	<img class="pull-right" src="images/slider/img1.png" alt="">
                  </div>
              	</div>
            </div>
		   </div><!--/ Carousel item end -->

		  <!-- <div class="item" style="background-image:url(images/dallas.jpg)">-->
            <div class="item" style="background-image:url(images/Dallas-Skyline-before-Sunset.jpg)">
		    	<div class="slider-content">
               <div class="col-md-12">
              		<div class="slider-text text-right">
              			<h2 class="slide-head">Experience</h2>
                        <h3 class="slide-title"><font color="white">You Can</font><br/>Depend<font color="white">  &amp;  </font>Trust</h3>
                     
                     <p>
                     	<a href="#" class="slider btn btn-primary">Want Free Case Evaluation</a>
                  	</p>
                 	</div>

              	</div>
            </div>
		   </div><!--/ Carousel item end -->
		    
		</div><!-- Carousel inner end-->

		<!-- Controllers -->
		<a class="left carousel-control" href="#main-slide" data-slide="prev">
	    	<span><i class="fa fa-angle-left"></i></span>
		</a>
		<a class="right carousel-control" href="#main-slide" data-slide="next">
	    	<span><i class="fa fa-angle-right"></i></span>
		</a>

	</div><!--/ Carousel end -->  


  <!--  <section id="features" class="features">
		<div class="container">
			<div class="row features-row">

				<div class="feature-box col-md-4 col-sm-12">
					<span class="feature-icon">
						<i class="ion-social-buffer-outline"></i>
					</span>
					<div class="feature-box-content">
						<h3 class="title-normal">Get Legal Help</h3>
						<p>Aenean et dolor pretium, feugiat leo non, aliquet libero consectetur</p>
					</div>
				</div><!--/ End 1st features -->

<!--				<div class="feature-box two col-md-4 col-sm-12">
					<span class="feature-icon">
						<i class="ion-ios-search"></i>
					</span>
					<div class="feature-box-content">
						<h3 class="title-normal">Case Investigation</h3>
						<p>Lorem ipsum dolor sit amet, con aipis icing elit, sed do eiusmod tempor</p>
					</div>
				</div><!--/ End 2nd features -->

	<!--			<div class="feature-box three col-md-4 col-sm-12">
					<span class="feature-icon">
						<i class="ion-ios-person-outline"></i>
					</span>
					<div class="feature-box-content">
						<h3 class="title-normal">Request For An Attorny</h3>
						<p>Lorem ipsum dolor sit amet, con aipis icing elit, sed do eiusmod tempor</p>
					</div>
				</div><!--/ End 3rd features -->

		<!--	</div><!-- Content row end -->
<!--		</div><!--/ Container end -->
<!--	</section><!--/ Featured end -->

	<section id="about-us" class="about-us">
		<div class="container">
			<div class="row text-center">
				<h3 class="title-head">About Us</h3>
				<p class="title-description">Our goal is to give you peace of mind. Our legal team works with individuals, families and businesses to provide a wide range of high quality legal services. We pride ourselves in responding to the unique needs of each client in the most cost-effective, confidential, and honest manner possible. </p>
			</div><!--/ Title row end -->

		<!--	<div class="row">
				<div class="featured-tab clearfix">
					<ul class="nav nav-tabs nav-stacked col-md-3 col-sm-5">
					  	<li class="active">
					  		<a class="animated fadeIn" href="#tab_a" data-toggle="tab">
					  			<span class="tab-icon"><i class="ion-ios-sunny-outline"></i></span>
					  			<div class="tab-info"><h3>Our Mission</h3></div>
					  		</a>
					  	</li>
					  	<li>
						  	<a class="animated fadeIn" href="#tab_b" data-toggle="tab">
						  		<span class="tab-icon"><i class="ion-ios-eye-outline"></i></span>
					  			<div class="tab-info"><h3>Our Vision</h3></div>
						  	</a>
						</li>
					 	<li>
						  	<a class="animated fadeIn" href="#tab_c" data-toggle="tab">
						  		<span class="tab-icon"><i class="ion-ios-pulse"></i></span>
					  			<div class="tab-info"><h3>Our History</h3></div>
						  	</a>
						</li>
					</ul>
					<div class="tab-content col-md-9 col-sm-7">
				        <div class="tab-pane active animated fadeInRight" id="tab_a">
				        	<img class="img-responsive pull-right" src="images/tab/tab1.png" alt="">
				        	<div class="tab-wrapper">
					            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
					         	<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
					         	<p>Motam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi archi tecto beatae vitae dicta sunt explicabo. </p>
				        	</div>
				            
				        </div>
				        <div class="tab-pane animated fadeInLeft" id="tab_b">
				            <img class="img-responsive pull-left" src="images/tab/tab2.png" alt="">
				            <h3>We Have Great Vision</h3> 
							<p>Helvetica cold-pressed lomo messenger bag ugh. Vinyl jean shorts Austin pork belly PBR retro, Etsy VHS kitsch actually messenger bag pug. Pbrbp semiotics try-hard, Schlitz occupy dreamcatcher master cleanse Marfa Vice tofu. </p>							 
							<ul class="check-list">
				                <li><i class="fa fa-check"></i> Duis autem vel eum iriure</li>
				                <li><i class="fa fa-check"></i> vulputate molestie consequat</li>
				                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
				                <li><i class="fa fa-check"></i> Typi non habent claritatem insitam</li>
				                <li><i class="fa fa-check"></i> Nam liber tempor cum soluta nobi</li>
				             </ul>
				        </div>

				        <div class="tab-pane animated fadeInLeft" id="tab_c">
				            <img class="img-responsive pull-right" src="images/tab/tab3.png" alt="">
				            <h3>We Have Great Vision</h3> 
							<p>Helvetica cold-pressed lomo messenger bag ugh. Vinyl jean shorts Austin pork belly PBR retro, Etsy VHS kitsch actually messenger bag pug. Pbrbp semiotics try-hard, Schlitz occupy dreamcatcher master cleanse Marfa Vice tofu. </p>							 
							<ul class="check-list">
				                <li><i class="fa fa-check"></i> Duis autem vel eum iriure</li>
				                <li><i class="fa fa-check"></i> vulputate molestie consequat</li>
				                <li><i class="fa fa-check"></i> Lorem ipsum dolor sit amet</li>
				                <li><i class="fa fa-check"></i> Typi non habent claritatem insitam</li>
				                <li><i class="fa fa-check"></i> Nam liber tempor cum soluta nobi</li>
				             </ul>
				        </div>
		
					</div><!-- tab content -->
	    		</div><!-- Featured tab end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!-- About us end -->

	<section id="practice-area" class="practice-area">
		<div class="container">
			<div class="row text-center">
				<h3 class="title-head">Practice Area</h3>
				<p class="title-description">Law House is a firm dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna </p>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-4 mrb-30">
                <a href="#">    
					<div class="practice-item">
						<div class="img-thumb">
							<img class="img-responsive" src="images/practice/family.jpg" alt="" />
							<div class="overlay text-center">
								<span class="practice-icon">
									<i class="ion-flag flag-cz"></i>
								</span>
								<h3 class="practice-title">Immigration Law</h3>
				<!--				<p class="practice-details">Lorem ipsum dolor sit amet, consecteturnos mpor incididunt ut labore et dolore magnaaei aliqua. Ut enim ad minim veniam</p> -->
								<a class="read-more" href="#">Read More</a>
							</div><!-- Item overlay end -->
						</div><!-- Item img end -->
					</div><!-- Practice item end -->
                    </a>
				</div><!-- 1st item col end -->

				<div class="col-md-4 mrb-30">
                 <a href="#">    
					<div class="practice-item">
						<div class="img-thumb">
							<img class="img-responsive" src="images/practice/land.jpg" alt="" />
							<div class="overlay text-center">
								<span class="practice-icon">
									<i class="ion-crime"></i>
								</span>
								<h3 class="practice-title">Criminal Defense</h3>
				<!--				<p class="practice-details">Lorem ipsum dolor sit amet, consecteturnos mpor incididunt ut labore et dolore magnaaei aliqua. Ut enim ad minim veniam</p> -->
								<a class="read-more" href="#">Read More</a>
							</div><!-- Item overlay end -->
						</div><!-- Item img end -->
					</div><!-- Practice item end -->
                    </a>
				</div><!-- 2nd item col end -->

				<div class="col-md-4 mrb-30">
                    <a href="#">    
					<div class="practice-item">
						<div class="img-thumb">
							<img class="img-responsive" src="images/practice/sex.jpg" alt="" />
							<div class="overlay text-center">
								<span class="practice-icon">
									<i class="fa fa-users"></i>
								</span>
								<h3 class="practice-title">Family Law</h3>
				<!--				<p class="practice-details">Lorem ipsum dolor sit amet, consecteturnos mpor incididunt ut labore et dolore magnaaei aliqua. Ut enim ad minim veniam</p> -->
								<a class="read-more" href="#">Read More</a>
							</div><!-- Item overlay end -->
						</div><!-- Item img end -->
					</div><!-- Practice item end -->
                    </a>    
				</div><!-- 3rd item col end -->

				<div class="col-md-4">				
                    <a href="#">    
                    <div class="practice-item">
						<div class="img-thumb">
							<img class="img-responsive" src="images/practice/finance.jpg" alt="" />
							<div class="overlay text-center">
								<span class="practice-icon">
									<i class="ion-cash"></i>
								</span>
								<h3 class="practice-title">Business Counsel</h3>
<!--								<p class="practice-details">Lorem ipsum dolor sit amet, consecteturnos mpor incididunt ut labore et dolore magnaaei aliqua. Ut enim ad minim veniam</p> -->
								<a class="read-more" href="#">Read More</a>
							</div><!-- Item overlay end -->
						</div><!-- Item img end -->
					</div><!-- Practice item end -->
                    </a>
				</div><!-- 4th item col end -->

				<div class="col-md-4">
                  <a href="#">    
					<div class="practice-item">
						<div class="img-thumb">
							<img class="img-responsive" src="images/practice/criminal.jpg" alt="" />
							<div class="overlay text-center">
								<span class="practice-icon">
									<i class="ion-social-reddit-outline"></i>
								</span>
								<h3 class="practice-title">Tax Resolution</h3>
	<!--							<p class="practice-details">Lorem ipsum dolor sit amet, consecteturnos mpor incididunt ut labore et dolore magnaaei aliqua. Ut enim ad minim veniam</p> -->
								<a class="read-more" href="#">Read More</a>
							</div><!-- Item overlay end -->
						</div><!-- Item img end -->
					</div><!-- Practice item end -->
                    </a>
				</div><!-- 5th item col end -->

				<div class="col-md-4">
                    <a href="#">    
					<div class="practice-item">
						<div class="img-thumb">
							<img class="img-responsive" src="images/practice/industry.jpg" alt="" />
							<div class="overlay text-center">
								<span class="practice-icon">
									<i class=""></i>
								</span>
								<h3 class="practice-title">Personal Injury</h3>
								<!-- <p class="practice-details">Lorem ipsum dolor sit amet, consecteturnos mpor incididunt ut labore et dolore magnaaei aliqua. Ut enim ad minim veniam</p> -->
								<a class="read-more" href="#">Read More</a>
							</div><!-- Item overlay end -->
						</div><!-- Item img end -->
					</div><!-- Practice item end -->
                    </a>
				</div><!-- 6th item col end -->
			</div><!--/ Content row end -->

			<div class="general-btn text-center"><a class="btn btn-primary" href="#">View All</a></div>
			
		</div><!--/ Container end -->
	</section><!-- Practice area end -->


	<section class="call-to-action">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="action-title">Call today for your <br/> free consultation</h3>
<!--					<h4 class="action-subtitle">We are here to help</h4> -->
					<p class="action-btn">
						<a href="#" class="btn btn-primary"><i class="ion-android-call"></i> (972) - 468 - 8855</a>	
<!--						<a href="#" class="btn btn-primary"><i class="ion-android-call"></i> (972) - 468 - 8855</a>	-->
					</p>
				</div>
			</div>
		</div><!--/ Container end -->
	</section><!-- Action end -->

<!--
	<section id="image-block" class="image-block no-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 ts-padding img-block-left">
					<h3 class="title-classic">Why Law House</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et tate velit esse cillum dolore eu fugiat nulla pariatur.</p>

					<div class="gap-20"></div>

					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="feature">
								<span class="feature-icon">
									<i class="ion-ios-world-outline"></i>
								</span>
								<h3 class="feature-title">Huge Experience</h3>
								<p class="feature-desc">Dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
							</div>
						</div><!--/ End 1st -->
	<!--					<div class="col-md-6 col-xs-12">
							<div class="feature">
								<span class="feature-icon">
									<i class="ion-ios-people-outline"></i>
								</span>
								<h3 class="feature-title">Skilled Attorneys</h3>
								<p class="feature-desc">Dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
							</div>
						</div><!--/ End 2nd -->
<!--					</div><!--1st Row end -->

	<!--				<div class="gap-20"></div>

					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class="feature">
								<span class="feature-icon">
									<i class="ion-ios-lightbulb-outline"></i>
								</span>
								<h3 class="feature-title">Amazing Strategy</h3>
								<p class="feature-desc">Dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
							</div>
						</div><!--/ End 3rd -->
		<!--				<div class="col-md-6 col-xs-12">
							<div class="feature">
								<span class="feature-icon">
									<i class="ion-ios-analytics-outline"></i>
								</span>
								<h3 class="feature-title">Low Cost</h3>
								<p class="feature-desc">Dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt.</p>
							</div>
						</div><!--/ End 4th -->
			<!--		</div><!--1st Row end -->
<!--
				</div><!-- Col end -->
	<!--			<div class="col-md-6 ts-padding" style="height:600px;background:url(images/image-block-bg1.jpg) 50% 50% / cover no-repeat;">
				</div><!-- Col end -->
		<!--	</div><!--/ Content row end -->
<!--		</div><!--/ Container end -->
<!--	</section><!-- Image block end --> 

	<!-- Attorneys start -->
	<section id="attorneys" class="attorneys">
		<div class="container">
			<div class="row text-center">
				<h3 class="title-head">Our Attorneys</h3>
				<p class="title-description">Law House is a firm dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna </p>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-3">
					<div class="team-grid">
						<div class="team-img-wrapper">
							<a href="#"><img  src="images/attorneys/img1.png" alt=""></a>
						</div>
						<div class="team-hover">
							<div class="team-hover-content">
								<h3 class="team-name"><a href="#">Johnson Doe</a></h3>
							  	<h4 class="team-desg">Founder &amp; CEO</h4>
							  	<p class="team-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
							  	<div class="social-icons">
									<a href="#"><i class="ion-social-facebook"></i></a>
									<a href="#"><i class="ion-social-twitter"></i></a>
									<a href="#"><i class="ion-social-googleplus"></i></a>
									<a href="#"><i class="ion-social-instagram"></i></a>
								</div>
							</div>
						</div>
					</div><!--/ Team grid end -->
				</div><!-- 1st team end -->

				<div class="col-md-3">
					<div class="team-grid">
						<div class="team-img-wrapper">
							<a href="#"><img  src="images/attorneys/img2.png" alt=""></a>
						</div>
						<div class="team-hover">
							<div class="team-hover-content">
								<h3 class="team-name"><a href="#">James Anderson</a></h3>
							  	<h4 class="team-desg">Founder Partner</h4>
							  	<p class="team-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
							  	<div class="social-icons">
									<a href="#"><i class="ion-social-facebook"></i></a>
									<a href="#"><i class="ion-social-twitter"></i></a>
									<a href="#"><i class="ion-social-googleplus"></i></a>
									<a href="#"><i class="ion-social-instagram"></i></a>
								</div>
							</div>
						</div>
					</div><!--/ Team grid end -->
				</div><!-- 2nd team end -->

				<div class="col-md-3">
					<div class="team-grid">
						<div class="team-img-wrapper">
							<a href="#"><img  src="images/attorneys/img3.png" alt=""></a>
						</div>
						<div class="team-hover">
							<div class="team-hover-content">
								<h3 class="team-name"><a href="#">Erin Boknov</a></h3>
							  	<h4 class="team-desg">Family Law Attorney</h4>
							  	<p class="team-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
							  <div class="social-icons">
									<a href="#"><i class="ion-social-facebook"></i></a>
									<a href="#"><i class="ion-social-twitter"></i></a>
									<a href="#"><i class="ion-social-googleplus"></i></a>
									<a href="#"><i class="ion-social-instagram"></i></a>
								</div>
							</div>
						</div>
					</div><!--/ Team grid end -->
				</div><!-- 3rd team end -->

				<div class="col-md-3">
					<div class="team-grid">
						<div class="team-img-wrapper">
							<a href="#"><img  src="images/attorneys/img4.png" alt=""></a>
						</div>
						<div class="team-hover">
							<div class="team-hover-content">
								<h3 class="team-name"><a href="#">Dalia Robby</a></h3>
							  	<h4 class="team-desg">Assistant Attorney</h4>
							  	<p class="team-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid</p>
							  	<div class="social-icons">
									<a href="#"><i class="ion-social-facebook"></i></a>
									<a href="#"><i class="ion-social-twitter"></i></a>
									<a href="#"><i class="ion-social-googleplus"></i></a>
									<a href="#"><i class="ion-social-instagram"></i></a>
								</div>
							</div>
						</div>
					</div><!--/ Team grid end -->
				</div><!-- 1st team end -->
	  	
			</div><!--/ Team row end -->

			<div class="general-btn text-center"><a class="btn btn-primary" href="#">View All</a></div>
		</div><!-- Container end -->
	</section><!-- Attorneys end -->


	<section id="image-block2" class="image-block2 no-padding">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 ts-padding img-block-left">
					<h3 class="title-classic">What People Say</h3>

					<div class="gap-40"></div>

						<div id="testimonial-carousel" class="owl-carousel owl-theme testimonial-slide">
				        <div class="item">
					        <div class="testimonial-content">
					            <p class="testimonial-text">
					              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris nisi ut aliquip ex ea commodo consequat.
					            </p>
						         <div class="testimonial-thumb">
					            	<img src="images/clients/testimonial1.png" alt="testimonial">
					            </div>
					            <h3 class="testimonial-name">James Anderson<span>Customer Relation</span></h3>
					          	
					        </div>
				        </div><!--/ Item end -->

				        <div class="item">
					        <div class="testimonial-content">
					            <p class="testimonial-text">
					              Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes accident.
					            </p>
						         <div class="testimonial-thumb">
					            	<img src="images/clients/testimonial2.png" alt="testimonial">
					          	</div>
					          	<h3 class="testimonial-name">Narek Bedros<span>Sr. Manager</span></h3>
					        </div>
				        </div><!--/ Item end -->
				        <div class="item">
				          	<div class="testimonial-content">
					            <p class="testimonial-text">
					              Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes accident.
					            </p>
					            <div class="testimonial-thumb">
					            	<img src="images/clients/testimonial3.png" alt="testimonial">
					        		</div>
					        		<h3 class="testimonial-name">Taline Lucine<span>Accountant</span></h3>

				          	</div>
				        </div>
				    </div><!--/ Testimonial carousel end-->
				
				</div><!-- Col end -->

				<div class="col-md-4 ts-padding img-block-right" style="height:575px;background:url(images/image-block-bg2.jpg) 50% 50% / cover no-repeat;">
					<div class="ts_counter">
						<div class="facts mrb-30">
							<span class="facts-icon">
								<i class="ion-social-bitcoin-outline"></i>
							</span>
							<div class="facts-num">
								<span class="sign">$</span><h3 class="counter">960</h3><span class="amount">M</span>
								<h4 class="facts-title">Saved Till Now</h4> 
							</div>
						</div><!-- 1st facts end -->

						<div class="facts mrb-30">
							<span class="facts-icon">
								<i class="ion-ios-people-outline"></i>
							</span>
							<div class="facts-num">
								<h3 class="counter">232</h3><span class="amount">K</span>
								<h4 class="facts-title">Clients</h4> 
							</div>
						</div><!-- 2nd facts end -->

						<div class="facts mrb-30">
							<span class="facts-icon">
								<i class="ion-ios-briefcase-outline"></i>
							</span>
							<div class="facts-num">
								<h3 class="counter">731</h3><span class="amount">K</span>
								<h4 class="facts-title">Case Wins</h4> 
							</div>
						</div><!-- 3rd facts end -->

						<div class="facts mrb-30">
							<span class="facts-icon">
								<i class="ion-ios-color-filter-outline"></i>
							</span>
							<div class="facts-num">
								<h3 class="counter">82</h3>
								<h4 class="facts-title">Awards</h4> 
							</div>
						</div><!-- 4th facts end -->

					</div>
				</div><!-- Col end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Image block 2 end -->

	<section id="news" class="news">
		<div class="container">
			<div class="row text-center">
				<h3 class="title-head">Legal News</h3>
				<p class="title-description">Law House is a firm dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna </p>
			</div><!--/ Title row end -->

			<div class="row">
				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<img class="img-responsive" src="images/news/news1.jpg" alt="img">
						<div class="post-body">
							<h4 class="post-title">
								<a href="#">Court Gives Final Approval Tction for Students and Citizens</a>
							</h4>
							<div class="post-text">
								<p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>	
						<div class="post-bottom">
							<div class="post-item-date pull-left">
								December 11, 2015
							</div>
							<a href="#" class="readmore pull-right">Continue <i class="fa fa-angle-right">&nbsp;</i></a>
						</div>
					</div><!-- Latest post end -->
				</div><!-- 1st post col end -->

				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<img class="img-responsive" src="images/news/news2.jpg" alt="img">
						<div class="post-body">
							<h4 class="post-title">
								<a href="#">White &amp; Case opens Florida legal support centre to its customer</a>
							</h4>
							<div class="post-text">
								<p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>	
						<div class="post-bottom">
							<div class="post-item-date pull-left">
								January 04, 2016
							</div>
							<a href="#" class="readmore pull-right">Continue <i class="fa fa-angle-right">&nbsp;</i></a>
						</div>
					</div><!-- Latest post end -->
				</div><!-- 2nd post col end -->

				<div class="col-md-4 col-xs-12">
					<div class="latest-post">
						<img class="img-responsive" src="images/news/news3.jpg" alt="img">
						<div class="post-body">
							<h4 class="post-title">
								<a href="#">Eversheds to push flexi-lawyer service to international network</a>
							</h4>
							<div class="post-text">
								<p>incididunt ut labore et dolore magna aliqua. Ut enim aminim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>	
						<div class="post-bottom">
							<div class="post-item-date pull-left">
								January 18, 2016
							</div>
							<a href="#" class="readmore pull-right">Continue <i class="fa fa-angle-right">&nbsp;</i></a>
						</div>
					</div><!-- Latest post end -->
				</div><!-- 3rd post col end -->

			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ News end -->

	<section id="quote-area" class="quote-area">


<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1">
					<div class="quote_form">

						<h3 class="quote_form_title">Request A Consultation <span>Totally Free</span></h3>
						<div class="row">
                   	<div class="col-xs-12 col-md-12">
	                    	<div class="quote-form-text">
	                    		Fill out the form below, we will get back you soon. You can also call us now on (90) 03452-8437. 
	                   
                                    </div>
                                    
                    </div>
                	</div>
                                <form action="index.php" method="post">
                	<div class="row">
	                  <div class="col-xs-12 col-md-12">
	                    	<div class="form-group">
									<input class="form-control" name="name" id="name" placeholder="Your Name" required>
								</div>
	                  </div>
                	</div>
						<div class="row">
	                  <div class="col-xs-12 col-md-12">
	                    	<div class="form-group">
									<input class="form-control" name="email" id="email" placeholder="Your Email" required>
								</div>
	                  </div>
                	</div>
                	<div class="row">
                   	<div class="col-xs-12 col-md-12">
                    		<div class="form-group">
                            <input class="form-control" name="subject" id="subject" type="text" placeholder="Subject" required />
                        </div>
                    </div>
                	</div>
                 <div class="row">
                    	<div class="col-xs-12 col-md-12">
                    		<div class="form-group">
                           <textarea class="form-control" placeholder="Case Details" rows="4" name="comment" required></textarea>
                    		</div>
                    	</div>
                 </div>
                            
					 	<div class="form-group">
							<input class="button btn btn-primary" type="submit" value="Submit">
						</div>
						<div class="form-group tag-line">
							<p>* All fields are required</p>
						</div>
 </form>
					</div><!-- Quote form end -->
				</div><!--/ Col end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
       
	</section><!--/ Quote area end -->

	<section id="clients" class="clients">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h3 class="title-classic">A House of Trust</h3>
					<p class="lead">Lorem ipsum dolor sit amet, consec tetur adipi sicing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua romaro tomaiyn dilemaso onendo. </p>
				</div>
				<div class="col-md-6 col-md-push-1">
					<ul class="row clients-row unstyled">
						<li class="col-md-4 col-sm-4 col-xs-6">
							<span class="client-logo">
								<a href="#"><img src="images/clients/client1.png" alt="" /> </a>
							</span>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6">
							<span class="client-logo">
								<a href="#"><img src="images/clients/client6.png" alt="" /> </a>
							</span>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6">
							<span class="client-logo">
								<a href="#"><img src="images/clients/client3.png" alt="" /> </a>
							</span>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6">
							<span class="client-logo">
								<a href="#"><img src="images/clients/client4.png" alt="" /> </a>
							</span>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6">
							<span class="client-logo">
								<a href="#"><img src="images/clients/client5.png" alt="" /> </a>
							</span>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6">
							<span class="client-logo">
								<a href="#"><img src="images/clients/client6.png" alt="" /> </a>
							</span>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6">
							<span class="client-logo">
								<a href="#"><img src="images/clients/client7.png" alt="" /> </a>
							</span>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6">
							<span class="client-logo">
								<a href="#"><img src="images/clients/client8.png" alt="" /> </a>
							</span>
						</li>
						<li class="col-md-4 col-sm-4 col-xs-6">
							<span class="client-logo">
								<a href="#"><img src="images/clients/client9.png" alt="" /> </a>
							</span>
						</li>
					</ul>

				</div><!-- Client logo end -->
			</div><!--/ Content row end -->
		</div><!--/ Container end -->
	</section><!--/ Clients end -->


	<!-- Footer start -->
	<footer id="footer" class="footer">
		<div class="angle-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<img src="images/logo3.png" style="width: 193px;height: 93px;" alt="" />
				</div>
				<div class="col-md-4 col-sm-6 col-md-push-5">
					<div class="footer-top-call">
						<h3><i class="ion-android-call"></i> (000) - 321 - 5463</h3>
					</div>
				</div>
			</div><!-- Row end -->


			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12 footer-widget">
					<h3 class="widget-title">About Us</h3>
					<p class="footer-about-desc">
						We are a awward winning Law Agency company. We believe in quality and standard worldwide. It has survived not only five centuries.
					</p>
					<div class="footer-social">
						<a href="#"><i class="ion-social-facebook"></i></a>
						<a href="#"><i class="ion-social-twitter"></i></a>
						<a href="#"><i class="ion-social-googleplus"></i></a>
						<a href="#"><i class="ion-social-instagram"></i></a>
						<a href="#"><i class="ion-social-youtube"></i></a>
					</div>
				</div><!-- Footer widget end -->

				<div class="col-md-2 col-sm-6 col-xs-12 footer-widget">
					<h3 class="widget-title">Contact Us</h3>
					<div class="contact-info-box">
						<i class="ion-ios-location"></i>
						<div class="contact-info-box-content">
							<p>1102 Saint Marys, Junction City, KS, WA-98000.</p>
						</div>
					</div>
					<div class="contact-info-box">
						<i class="ion-email"></i>
						<div class="contact-info-box-content">
							<p>info@jangdalaw.com</p>
						</div>
					</div>
					<div class="contact-info-box">
						<i class="ion-android-call"></i>
						<div class="contact-info-box-content">
							<p>+88 0123 4567 890</p>
							<p>+88 0231 3421 453</p>
						</div>
					</div>
				</div><!-- Footer widget end -->

				<div class="col-md-3 col-sm-6 col-xs-12 footer-widget">
					<h3 class="widget-title">Useful Links</h3>

					<ul class="unstyled">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Practice Areas</a></li>
						<li><a href="#">Attorneys</a></li>
						<li><a href="#">Case Results</a></li>
						<li><a href="#">Price List</a></li>
						<li><a href="#">Business Law</a></li>
						<li><a href="#">Legal News</a></li>
					</ul>
				</div><!-- Footer widget end -->

				<div class="col-md-4 col-sm-6 col-xs-12 footer-widget newsletter-widget">

					<h3 class="widget-title">Subscribe to our <span>Newsletter</span></h3>
					<form action="#" method="post" id="newsletter-form" class="newsletter-form">
						<div class="form-group">
							<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="Your Email Here" autocomplete="off">
							<button class="btn btn-primary">Subscribe</button>
						</div>
					</form>
				</div><!-- Footer widget end -->

			</div><!--/ Content row end -->

			<div class="row copyright">
				<div class="col-xs-12 col-sm-5">
					<div class="copyright-info">
						<span>Copyright © 2016 Lawhouse. All Rights Reserved.</span>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 col-md-push-1">
					<div class="footer-menu">
						<ul class="nav unstyled">
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Advetise</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
				</div>
			</div><!-- Copyright -->

		</div><!--/ Container end -->
	</footer><!-- Footer end -->


	

	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="js/isotope.js"></script>
	<script type="text/javascript" src="js/ini.isotope.js"></script>
	<!-- Wow -->
	<script type="text/javascript" src="js/wow.min.js"></script>
	<!-- Google Map API Key Source -->
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<!-- For Google Map -->
	<script type="text/javascript" src="js/gmap3.min.js"></script>
	<!-- Doc http://www.mkyong.com/google-maps/google-maps-api-hello-world-example/ -->
	<!-- Template custom -->
	<script type="text/javascript" src="js/custom.js"></script>
	
	</div><!-- Body inner end -->
</body>

<!-- Mirrored from themewinter.com/html/lawhouse/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Mar 2016 09:01:45 GMT -->
</html>