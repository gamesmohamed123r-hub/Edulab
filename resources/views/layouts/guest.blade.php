<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Eduleb - Education HTML Template">
		<meta name="keywords" content="agency, business, corporate, creative, html5, modern, multipurpose, One Page, parallax, startup">		
		<!-- SITE TITLE -->
		<title>Eduleb - Education HTML Template</title>			
		<!-- Latest Bootstrap min CSS -->
		<link rel="stylesheet" href={{asset('/bootstrap/css/bootstrap.min.css')}}>		
		<!-- Google Font -->
		<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
		<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
		<link rel="stylesheet" href={{asset('/fonts/font-awesome.min.css')}}>
		<link rel="stylesheet" href={{asset('/fonts/themify-icons.css')}}>
		<!--- owl carousel Css-->
		<link rel="stylesheet" href={{asset('/owlcarousel/css/owl.carousel.css')}}>
		<link rel="stylesheet" href={{asset('/owlcarousel/css/owl.theme.css')}}>	
		<!--jquery-simple-mobilemenu Css-->
        <link rel="stylesheet" href={{asset('/css/jquery-simple-mobilemenu.css')}}>			
		<!-- MAGNIFIC CSS -->
		<link rel="stylesheet" href={{asset('/css/magnific-popup.css')}}>		
		<!-- animate CSS -->
		<link rel="stylesheet" href={{asset('/css/animate.css')}}>	
		<!-- Style CSS -->					
		<link rel="stylesheet" href={{asset('/css/style.css')}}>					
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
		<div class="preloaders">
			<span class="loader"></span>
		</div>
		<!-- END PRELOADER -->		

		<!-- START NAVBAR -->  
		<div id="navigation" class="navbar-light bg-faded site-navigation">
			<div class="container-fluid">
				<div class="row">
					<div class="col-20 align-self-center">
						<div class="site-logo">
							<a href={{route('welcome')}}><img src={{asset('/img/logo.png')}} alt=""></a>          				
						</div>
					</div><!--- END Col -->
					
					<div class="col-60 d-flex">
						<nav id="main-menu">
							<ul>
								<li><a href={{route('welcome')}}>Home</a></li>
								<li><a href={{route('about')}}>About</a></li>
								<li><a href={{route('course')}}>Course</a></li>																							
								<li><a href="#contaa">Contact</a></li> {{--here is the contact.html--}}
							</ul>
						</nav>
					</div><!--- END Col -->
					
					<div class="col-20 d-none d-xl-block text-end align-self-center">
	                  
                                      @if (Route::has('login'))
                              
                                  @auth
                                  <form action="{{route('logout')}}" method="POST" enctype="multipart/form-data">
                                      @csrf
                                      <input type="submit" value="Logout if you want ({{Auth::user()->name}}) " class="btn btn-secondary">
                                  </form>
                                  @else
                                      <a
                                          href="{{ route('login') }}"
                                          class="btn btn-secondary"
                                      >
                                          Log in
                                      </a>
              
                                      @if (Route::has('register'))
                                          <a
                                              href="{{ route('register') }}"
                                              class="btn btn-primary">
                                              Register
                                          </a>
                                      @endif
                                  @endauth
                              
                          @endif
   
					</div><!--- END Col -->
					
					<ul class="mobile_menu">						
						<li><a href="#">Home</a>
							<ul class="sub-menu">										
								<li><a href={{route('welcome')}}>Home 01</a></li>
								<li><a href="#">Home 02</a></li>	{{--here is the index2.html--}}				
							</ul>
						</li>	
						<li><a href={{route('about')}}>About</a></li>		{{--here is the about.html--}}
						<li><a href="#">Course</a>
							<ul class="sub-menu">										
								<li><a href="#">Course</a></li> {{--here is the course.html--}}
								<li><a href="#">Course Deails</a></li>		{{--here is the coursedetails.html--}}							
							</ul>
						</li>												
						<li><a href="#">Contact</a></li> {{--here is the contact.html--}}
					</ul>			
				</div><!--- END ROW -->
			</div><!--- END CONTAINER -->
		</div> 	  
		<!-- END NAVBAR -->	

              


      <main>
        {{ $slot ?? '' }}
        @yield('content')
      </main>

        <!-- START FOOTER -->
		<div class="footer section-padding" id="contaa">
			<div class="container">				
				<div class="row">						
					<div class="col-lg-8 col-sm-6 col-xs-12">
						<div class="single_footer">
							<a href={{route('welcome')}}><img src={{asset('/img/logo.png')}} alt=""></a>         
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis dignissim.</p>
							<div class="social_profile">
								<ul>
									<li><a class="f_facebook" href="#"><i class="fa-solid fa-x"></i></a></li>
									<li><a class="f_twitter" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
									<li><a class="f_instagram"href="#"><i class="fa-brands fa-instagram"></i></a></li>
									<li><a class="f_linkedin" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
								</ul>
							</div>
						</div>			
					</div><!--- END COL -->						
					<div class="col-lg-2 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>About Eduleb</h4>
							<ul>
								<li><a href="#">About us</a></li>
								<li><a href="#">Instructor Registration</a></li>
								<li><a href="#">Become A Teacher</a></li>
								<li><a href="#">All Instrustors</a></li>
								<li><a href="#">Asked Question</a></li>
								<li><a href="#">Contact us</a></li>
							</ul>
						</div>
					</div><!--- END COL -->	
				
					<div class="col-lg-3 col-sm-6 col-xs-12">
						<div class="single_footer">
							<h4>Contact Info</h4>						
							<div class="sf_contact">
								<span class="ti-mobile"></span>
								<p>+201147733982</p>
							</div>
							<div class="sf_contact">
								<span class="ti-mobile"></span>
								<p><a href="tel:+201147733982">Contact Whatsapp</a></p>
							</div>
							<div class="sf_contact">
								<span class="ti-email"></span>
								<p>gamesmohamed123r@gmail.com</p>
							</div>
						</div>
					</div><!--- END COL -->											
				</div><!--- END ROW -->					
			</div><!--- END CONTAINER -->
		</div>
		<!-- END FOOTER -->	

		<!-- START FOOTER COPYRIGHT -->	
		<div class="foot_copy">
			<div class="footer_copyright">
				<p>&copy; 2024. All Rights Reserved by <a href="https://bestwpware.com/">Bestwpware</a> • Distributed by <a href="https://themewagon.com">ThemeWagon </a> 'i didn't made the front-end i download it and training my backend skills on it'</p>
			</div>	
		</div>
		<!-- END FOOTER COPYRIGHT -->	
	
	<!-- Latest jQuery -->
		<script src={{asset('/js/jquery-1.12.4.min.js')}}></script>
	<!-- Latest compiled and minified Bootstrap -->
		<script src={{asset('/bootstrap/js/bootstrap.min.js')}}></script>
	<!-- modernizer JS -->		
		<script src={{asset('/js/modernizr-2.8.3.min.js')}}></script>	
	<!-- jquery-simple-mobilemenu.min -->
		<script src={{asset('/js/jquery-simple-mobilemenu.js')}}></script>		
	<!-- owl-carousel min js  -->
		<script src={{asset('/owlcarousel/js/owl.carousel.min.js')}}></script>					
	<!-- magnific-popup js -->               
		<script src={{asset('/js/jquery.magnific-popup.min.js')}}></script>						
	<!-- countTo js -->
		<script src={{asset('/js/jquery.inview.min.js')}}></script>								
	<!-- scrolltopcontrol js -->
		<script src={{asset('/js/scrolltopcontrol.js')}}></script>			
	<!-- WOW - Reveal Animations When You Scroll -->
		<script src={{asset('/js/wow.min.js')}}></script>				
	<!-- scripts js -->
		<script src={{asset('/js/scripts.js')}}></script>
    </body>
</html>