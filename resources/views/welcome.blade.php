@extends('layouts.guest')
@section('content')
    		<!-- START HOME -->
		<section class="home_bg hb_height" style="background-image: url(assets/img/bg/home-bg.jpg);  background-size:cover; background-position: center center;">
			<div class="container">
				<div class="row">
				  <div class="col-lg-6 col-sm-12 col-xs-12">
					<div class="hero-text ht_top">
						<h1><span>Smart Study</span> Where Knowledge Meets the Web</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, consectetur adipiscing elit tempor ut labore</p>
					</div>					
				  </div><!--- END COL -->
				  <div class="col-lg-6 col-sm-12 col-xs-12">
					<div class="hero-text-img">
						<img src={{asset('/img/home-img2.png')}} class="img-fluid" alt="" />
						<div class="home_ps">
							<span class="ti-user"></span>
							<h2>4500+</h2>
							<p>Active student</p>
						</div>
					</div>					
				  </div><!--- END COL -->						  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END  HOME -->			

		<!-- START COUNTER -->
		<section class="count_area counter_feature">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-folder sc_one"></span>
							<h2 class="counter-num">134</h2>
							<p>Our Online Course</p>
						</div>							
					</div>
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-medall-alt sc_two"></span>
							<h2 class="counter-num">299</h2>
							<p>Academic Programs</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-id-badge sc_three"></span>
							<h2 class="counter-num">684</h2>
							<p>Certified Students</p>
						</div>
					</div><!-- END COL -->
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single-counter">
							<span class="ti-user sc_four"></span>
							<h2 class="counter-num">941</h2>
							<p>Enrolled Students</p>
						</div>
					</div><!-- END COL -->						
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->		
		</section>
		<!-- END COUNTER -->

	<!-- START CATEGORY -->
	<section class="top_cat__area section-padding" style="background-image: url(/img/bg/shape-1.png);  background-size:cover; background-position: center center;">	
		<div class="container">									
			<div class="section-title text-center">
				<h2>Start your journey With us</h2>
				<p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills! Our school is know.</p>
			</div>						
			<div class="row">					
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_one">01</span>
						<h3>Expert <br />Teacher</h3>
						<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit ut labore.</p>
					</div>
				</div><!-- END COL -->			
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_two">02</span>
						<h3>Quality <br />Education</h3>
						<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit ut labore.</p>
					</div>
				</div><!-- END COL -->			
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_three">03</span>
						<h3>Remote <br />Learning</h3>
						<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit ut labore.</p>
					</div>
				</div><!-- END COL -->	
				<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s" data-wow-offset="0">
					<div class="single_tp">
						<span class="sc_four">04</span>
						<h3>Life Time <br />Support</h3>
						<p>Lorem ipsum dolor sit amet, consectetur notted adipisicing elit ut labore.</p>
					</div>
				</div><!-- END COL -->							
			</div><!-- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END CATEGORY -->		
		
	<!-- START ABOUT US -->
	<section class="ab_area section-padding">
		<div class="container">									
			<div class="row">								
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
					<div class="ab_img">
						<img src={{asset('/img/about1.png')}} class="img-fluid" alt="image">
					</div>
				</div><!--- END COL -->						
				<div class="col-lg-6 col-sm-12 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
					<div class="ab_content">
						<h2>We Are Providing The Online Course In Global World</h2>
						<p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills! Our school is know.</p>
						<ul>
							<li><span class="ti-check"></span> Get access to <b>12,000+</b> of our top courses</li>
							<li><span class="ti-check"></span> Popular topic to learn now in our online courses for student</li>
							<li><span class="ti-check"></span> Find the right instructor for you</li>
						</ul>
		{{--here is course.html --}} <a class="btn_one" href={{route('course')}}>View All Courses <i class="ti-arrow-top-right"></i></a>
					</div>
				</div><!--- END COL -->							  
			</div><!--- END ROW -->
		</div><!--- END CONTAINER -->
	</section>
	<!-- END ABOUT US -->				
		
		<!-- START COMPANY PARTNER LOGO  -->
		<div class="partner-logo section-padding">
			<div class="container">
				<div class="row part_bg">
					<div class="col-lg-4 col-sm-4 col-xs-12">
						<div class="partner_title">
							<h3>Helping <span>86,000+</span> global companies take the gloves off </h3>
						</div>					
					</div><!-- END COL  -->
					<div class="col-lg-8 col-sm-8 col-xs-12 text-center">
						<div class="partner">
							<a href="#"><img src={{asset('/img/clients/1.png')}} alt="image"></a>
							<a href="#"><img src={{asset('/img/clients/2.png')}} alt="image"></a>
							<a href="#"><img src={{asset('/img/clients/3.png')}} alt="image"></a>
							<a href="#"><img src={{asset('/img/clients/4.png')}} alt="image"></a>
							<a href="#"><img src={{asset('/img/clients/5.png')}} alt="image"></a>
							<a href="#"><img src={{asset('/img/clients/2.png')}} alt="image"></a>
							<a href="#"><img src={{asset('/img/clients/1.png')}} alt="image"></a>
							<a href="#"><img src={{asset('/img/clients/3.png')}} alt="image"></a>
							<a href="#"><img src={{asset('/img/clients/4.png')}} alt="image"></a>
						</div>
					</div><!-- END COL  -->
				</div><!--END  ROW  -->
			</div><!-- END CONTAINER  -->
		</div>
		<!-- END COMPANY PARTNER LOGO -->	

		<!-- START VIDEO -->
		<section class="vid_area section-padding">
			<div class="container">																
				<div class="row">
					<div class="col-lg-12 vp_top wow fadeInUDown" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
						<div class="video-area" style="background-image: url(/img/bg/video.jpg);  background-size:cover; background-position: center center;">
							<a href={{asset('/v/videoplayback.mp4')}} class="magnific_popup video-button"><i class="fa fa-play"></i></a>
						</div>
					</div><!--- END COL -->	
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END VIDEO -->			
		
		<!-- START TEAM -->
		<section class="team_area section-padding">
			<div class="container">									
				<div class="section-title text-center">
					<h2>Meet our Instructors</h2>
					<p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills! Our school is know.</p>
				</div>						
				<div class="row">													
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="our-team">
							<div class="team-content">
								<a href="#"><img src={{asset('/img/team/team1.jpg')}} alt=""></a>
								<ul class="social-links">
									<li><a href="#"><i class="fa-solid fa-x"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-prof">
								<h3>Bilkis Vabi</h3>
								<span>Web designer</span>
							</div>
							<div class="sth_det2">
								<span class="ti-file"> <u>04 Course</u></span>
								<span class="ti-user"> <u>27 Student</u></span>
							</div>									
						</div>
					</div><!--- END COL -->										
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="our-team">
							<div class="team-content">
								<a href="#"><img src={{asset('/img/team/team2.jpg')}} alt=""></a>
								<ul class="social-links">
									<li><a href="#"><i class="fa-solid fa-x"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-prof">
								<h3>Mood Wasim</h3>
								<span>TemplateMonster company</span>
							</div>
							<div class="sth_det2">
								<span class="ti-file"> <u>06 Course</u></span>
								<span class="ti-user"> <u>41 Student</u></span>
							</div>							
						</div>
					</div><!--- END COL -->										
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="our-team">
							<div class="team-content">
								<a href="#"><img src={{asset('/img/team/team3.jpg')}} alt=""></a>
								<ul class="social-links">
									<li><a href="#"><i class="fa-solid fa-x"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-prof">
								<h3>Shyinn tim</h3>
								<span>Codecanyou</span>
							</div>
							<div class="sth_det2">
								<span class="ti-file"> <u>13 Course</u></span>
								<span class="ti-user"> <u>31 Student</u></span>
							</div>
						</div>
					</div><!--- END COL -->										
					<div class="col-lg-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
						<div class="our-team">
							<div class="team-content">
								<a href="#"><img src={{asset('/img/team/team4.jpg')}} alt=""></a>
								<ul class="social-links">
									<li><a href="#"><i class="fa-solid fa-x"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="team-prof">
								<h3>Shorif shorifa</h3>
								<span>Tsc chottor</span>
							</div>
							<div class="sth_det2">
								<span class="ti-file"> <u>07 Course</u></span>
								<span class="ti-user"> <u>24 Student</u></span>
							</div>
						</div>
					</div><!--- END COL -->							  
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</section>
		<!-- END TEAM -->	

			

		<!-- START TESTIMONIALS -->
		<section class="testi_area section-padding">
			<div class="container">
				<div class="section-title">
					<h2>What Student’s Say To Do <br />Their Online Course</h2>
				</div>						
				<div class="row">
					<div class="col-lg-6 col-sm-12 col-xs-12">
						<div class="ab_img">
							<img src={{asset('/img/review.png')}} class="img-fluid" alt="image">
						</div>					
					</div><!-- END COL -->						
					<div class="col-lg-6 col-sm-12 col-xs-12">
						<div id="testimonial-slider" class="owl-carousel">
							<div class="testimonial">
								<img src={{asset('/img/quote.png')}} alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<img src={{asset('/img/testimonial/1.png')}} alt="">
									<h4>Ajmain Adil</h4>
									<p>Groton Inc</p>
								</div>
							</div><!-- END TESTIMONIAL -->
							<div class="testimonial">
							<img src={{asset('/img/quote.png')}} alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<img src={{asset('/img/testimonial/2.png')}} alt="">
									<h4>Sharukh Khan</h4>
									<p>Red Chili Inc</p>
								</div>
							</div><!-- END TESTIMONIAL -->
							<div class="testimonial">
								<img src={{asset('/img/quote.png')}} alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<img src={{asset('/img/testimonial/3.png')}} alt="">
									<h4>Anushka sharma</h4>
									<p>Naika Company</p>
								</div>
							</div><!-- END TESTIMONIAL -->
							<div class="testimonial">
								<img src={{asset('/img/quote.png')}} alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<img src={{asset('/img/testimonial/4.png')}} alt="">
									<h4>Ajmain Adil</h4>
									<p>Groton Inc</p>
								</div>
							</div><!-- END TESTIMONIAL -->
							<div class="testimonial">
								<img src={{asset('/img/quote.png')}} alt="" />
								<div class="testimonial_content">													
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<i class="ti-star"></i>
									<p>Aqestic optio amet a ququam saepe aliquid voluate dicta fuga dolor saerror sed earum a magni soluta quam minus dolor dolor sed earum a magni soluta autem dolor error error sit quam minus sint rem a rerum dolobus veritatis delectus.</p>
								</div>
								<div class="testi_pic_title">
									<img src={{asset('/img/testimonial/5.png')}} alt="">
									<h4>Ajmain Adil</h4>
									<p>Groton Inc</p>
								</div>
							</div><!-- END TESTIMONIAL -->
						</div><!-- END TESTIMONIAL SLIDER -->
					</div><!-- END COL -->		
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->		
		</section>
		<!-- END TESTINUNIALS -->

@endsection