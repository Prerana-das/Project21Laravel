<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title -->
		<title>Client Web App for AL-Murshed</title>
	<!-- Font Google -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Bootstrap Css -->
		<link href="{{ asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Font Awesome Css -->
		<link href="{{ asset('assets/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- Magnific Popup Css -->
		<link href="{{ asset('assets/css/magnific-popup.css')}}" rel="stylesheet">
	<!-- favicon -->
		<link rel="shortcut icon" href="{{ asset('assets/img/icons/favicon.png')}}" />
	<!-- Owl Carousel Css -->
		<link href="{{ asset('assets/css/owl.carousel.css')}}" rel="stylesheet">
	<!-- Main Css -->
		<link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
	<!-- Responsive Css -->
		<link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet">
	</head>
	<body>
	<!-- Preloader Area Start -->
	<div class="preloader flex-center">
		<div class="dots">
			<div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
         </div>
      </div>
    <!-- Preloader Area End -->
		<section class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-12">
					</div>
				</div>
			</div>
		</section>
	<!-- Header Area Start -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-2">
					<header class="header header-fixed">
						<div class="container">
							<nav class="navbar-light">
								<a class="title" href="index">Al-Murshed</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
								</button>
			<div class="mainmenu" id="navbarNav">
				<ul class="navbar-nav ml-auto another" >
			<!-- Side-menu bar -->
				<div class="sidenav">
					<a href="index">Home</a>
					<a href="about">About</a>
					<a href="five_basics">Five Basics</a>
					<a href="mosque">Mosque</a>
					<a href="prayer_times">Prayer Times</a>
					<a href="scholars_video">Scholar's Video</a>
					<a href="hadith">Hadith</a>
					<a href="muslim_names">Muslim Names</a>
					<a href="duas">Dua's</a>
					<a href="zakaat">Zakaat</a>
					<a href="fitra">Fitra</a>
					<a href="gallery">Islamic Gallery</a>
					<a href="faq">FAQ</a>
					<a href="contact">Contact Us</a>
					@if (Auth::check())
					<a href="{{action('UserController@logout')}}">Logout</a>
					@else
					<a href="login">Login</a>
					@endif
				</div>
				</ul>
			</div>
							</nav>
						</div>
					</header>
				</div>
				 <!-- Header Area Start -->
				<div class="col-md-10">
					<!-- Slider Area Start -->
					<section class="slider-area" id="home">
						<div class="slider owl-carousel">
						<div class="single-slide" style="background-image:url('assets/img/new/2.jpg')">
						<div class="container">
							<div class="row">
							<div class="col-xl-12">
							<div class="slide-table">
								<div class="slide-tablecell">
									<h4>AL-Murshed</h4>
									<h2>An attempt to help people<br/> knowing about and practising ISLAM </h2>
									<p> Non-profit Organization.</p>
									<a href="#" class="box-btn">view<i class="fa fa-angle-double-right"></i></a>
								</div>
								</div>
							</div>
							</div>
							</div>
					</div>
					<div class="single-slide" style="background-image:url('assets/img/new/1.jpg')">
						<div class="container">
							<div class="row">
							<div class="col-xl-12">
								<div class="slide-table">
								<div class="slide-tablecell">
									<h4>AL-Murshed</h4>
									<h2>Every moment of your life is beautiful.</h2>
									<p>Al- Murshed for iOS</p>
									<a href="#" class="box-btn">view <i class="fa fa-angle-double-right"></i></a>
								</div>
								</div>
							</div>
							</div>
						</div>
					</div>
					<div class="single-slide" style="background-image:url('assets/img/new/3.jpg')">
						<div class="container">
							<div class="row">
							<div class="col-xl-12">
								<div class="slide-table">
								<div class="slide-tablecell">
									<h4>AL-Murshed</h4>
									<h2>(The Guide- المرشد )</h2>
									<p>Al- Murshed for android </p>
									<a href="#" class="box-btn">view <i class="fa fa-angle-double-right"></i></a>
								</div>
								</div>
							</div>
							</div>
						</div>
						</div>
						</div>
					</section>
				<!-- Slider Area End -->
				<!-- Experience area start -->
				<section class="experience-area pt-50">
					<div class="container">
						<div class="row">
						<div class="col-md-4">
	<a href="five_basics"><div class="single-exp">
								<img src="assets/img/icons/five.png" alt="img" />
								<h2>Five Basics</h2>
								<p>Although AL-Murshed Android App includes Zakaat Calcultor, Many users who don't use Android device requested to offer Online Calculator beside App. And by the will of ALLAH it was accomplished. .</p>
							</div></a>
						</div>
						<div class="col-md-4">
			<a href="prayer_times"><div class="single-exp">
								<img src="assets/img/icons/prayer.png" alt="img" />
								<h2>Prayer Times</h2>
								<p>Although AL-Murshed Android App includes Zakaat Calcultor, Many users who don't use Android device requested to offer Online Calculator beside App. And by the will of ALLAH it was accomplished. .</p>
							</div></a>
						</div>
		<a href="gallery"><div class="col-md-4">
							<div class="single-exp">
								<img src="assets/img/icons/gallery.png" alt="img" />
								<h2>Islamic Gallery</h2>
								<p>Although AL-Murshed Android App includes Zakaat Calcultor, Many users who don't use Android device requested to offer Online Calculator beside App. And by the will of ALLAH it was accomplished. .</p>
							</div></a>
						</div>
							<div class="col-md-4">
			<a href="hadith"><div class="single-exp">
								<img src="assets/img/icons/book.png" alt="img" />
								<h2>Hadith</h2>
								<p>Although AL-Murshed Android App includes Zakaat Calcultor, Many users who don't use Android device requested to offer Online Calculator beside App. And by the will of ALLAH it was accomplished. .</p>
							</div></a>
						</div>
							<div class="col-md-4">
			<a href="scholars-video.html"><div class="single-exp">
								<img src="assets/img/icons/play-button.png" alt="img" />
								<h2>Scholar's Video</h2>
								<p>Although AL-Murshed Android App includes Zakaat Calcultor, Many users who don't use Android device requested to offer Online Calculator beside App. And by the will of ALLAH it was accomplished. .</p>
							</div></a>
						</div>
							<div class="col-md-4">
		<a href="zakaat"><div class="single-exp">
								<img src="assets/img/icons/calculate.png" alt="img" />
								<h2>Calculate Zakaat</h2>
								<p>Although AL-Murshed Android App includes Zakaat Calcultor, Many users who don't use Android device requested to offer Online Calculator beside App. And by the will of ALLAH it was accomplished. .</p>
							</div></a>
						</div>
						<div class="col-md-4">
	<a href="duas"><div class="single-exp">
								<img src="assets/img/icons/islam.png" alt="img" />
								<h2>Dua's</h2>
								<p>Although AL-Murshed Android App includes Zakaat Calcultor, Many users who don't use Android device requested to offer Online Calculator beside App. And by the will of ALLAH it was accomplished. .</p>
							</div></a>
						</div>
						<div class="col-md-4">
	<a href="fitra"><div class="single-exp">
								<img src="assets/img/icons/fitra.png" alt="img" />
								<h2>Fitra</h2>
								<p>Although AL-Murshed Android App includes Zakaat Calcultor, Many users who don't use Android device requested to offer Online Calculator beside App. And by the will of ALLAH it was accomplished. .</p>
							</div></a>
						</div>
						<div class="col-md-4">
		<a href="muslim_names"><div class="single-exp">
								<img src="assets/img/icons/name.png" alt="img" />
								<h2>Muslim Names</h2>
								<p>Although AL-Murshed Android App includes Zakaat Calcultor, Many users who don't use Android device requested to offer Online Calculator beside App. And by the will of ALLAH it was accomplished. .</p>
							</div></a>
						</div>
						</div>
					</div>
				</section>
				<!-- about area starts -->
				<section class="about-area pt-50">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="section-title text-center pb-50">
									<h2>About Us</h2>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="about-img">
									<img src="assets/img/new/10.jpg" alt="" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="about-text">
									<p>Although AL-Murshed Android App includes Zakaat Calcultor, Many users who don't use Android device requested to offer Online Calculator beside App. And by the will of ALLAH it was accomplished. </p>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
	<!-- about area endss -->
	<!-- founders-and-developers starts -->
	<section class="founders-and-developers-area pt-50 ">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center pb-30">
					<h2>Founders and Developers</h2>
				</div>
			</div>
		</div>
		<div class="container">
		<div class="row pt-50">
			<div class="col-md-6">
				<div class="single-founders-and-developers">
					<div class="founders-and-developers-img">
						<img src="assets/img/about/speaker-1.png" alt="img"/>
					<div class="inner-founders-and-developers">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
					<h3>Arif Ahmed</h3>
					<p>Co-Founder &amp; Developer - Al-Murshed</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="single-founders-and-developers">
					<div class="founders-and-developers-img">
						<img src="assets/img/about/speaker-1.png" alt="img"/>
					<div class="inner-founders-and-developers">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					</div>
					<h3>Sharif Ahmed</h3>
					<p>Co-Founder &amp; Developer - Al-Murshed</p>
				</div>
			</div>
		</div>
		</div>
	</section>
	<!-- founders-and-developers ends -->
				<!-- advisors  area starts -->
				<div class="row">
					<div class="col-sm-12">
						<div class="section-title text-center pt-30">
							<h2> AL-Murshed is grateful to</h2>
						</div>
					</div>
				</div>
				<!--  -->	
				<section class="advisors-area">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="single-advisors-info pt-50 pb-50">
									<h6>Mufti, Muhaddis Mohammad Mahbubur Rahman</h6>
									<p class="con-text">Shariah Advisor - Al-Murshed</p>
									<p>Chief Muhaddis, Mohakhali Darul Ulum Hussainia Kamil Madrasa</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="single-advisors-info pt-50 pb-50">
									<h6>Mahbubur Rub Talha</h6>
									<p class="con-text">Technical Advisor - Al-Murshed</p>
									<p>Team Leader, Pipilika-Bangla Search Engine</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- advisors  area ends -->
		
				<!-- footer  area starts -->
				<footer class="footer-area pt-100 pb-50">
				<div class="container">
					<div class="row footer-info">
						<div class="col-md-4">
							<div class="single-footer">
								<h4>AL-Murshed</h4>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Founders</a></li>
									<li><a href="#">Developers</a></li>
								
									<li><a href="#">Advisors</a></li>
									<li><a href="#">Policies</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
								<!-- <img src="assets/img/payments2.png" alt="image" /> -->
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-footer">
								<h4>Advisors</h4>
								<ul>
									<li>Mufti, Muhaddis Mohammad Mahbubur Rahman</li>
									<li>Shariah Advisor - Al-Murshed</li>
									<li>Chief Muhaddis, Mohakhali Darul Ulum Hussainia Kamil Madrasa </li>
									<li>(Mahbubur Rub Talha</li>
									<li>Technical Advisor - Al-Murshed</li>
									<li>Team Leader, Pipilika-Bangla Search Engine</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="single-footer">
								<h4>Contact with Us</h4>
								<ul>
									<li>Address: Global</li>
									<li>Email: support@al-murshed.org</li>
									<li>Phone: +8801900000000</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row footer-text">
						<div class="col-sm-12">
							<p>&copy 2020 All rights reserved.</p>
						</div>
					</div>
				</div>
				</footer>
				<!-- footer  area ends -->
	  		</div>
	 	</div>
	  <!-- side-menu bar -->
	</div>

		<script>
			function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
			}
			function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			}
		</script>
		<script type="application/javascript">
			$document(ready).(function(){
				$('ul a').click(function(){
					$('a').removeClass("active");
					$(this).addClass("active");
				})
			})
		</script>
	  <!-- Main JS -->
      <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
      <!-- Popper JS -->
      <script src="{{ asset('assets/js/popper.min.js')}}"></script>
      <!-- Bootstrap JS -->
      <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
      <!-- Owl Carousel JS -->
      <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
      <!-- Manific Popup JS -->
      <script src="{{ asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
      <!-- One Page Nav JS -->
      <script src="{{ asset('assets/js/onepagenav.js')}}"></script>
	  <!-- Isotope JS -->
      <script src="{{ asset('assets/js/isotope.js')}}"></script>
	  <!-- Imageload JS -->
      <script src="{{ asset('assets/js/imageloaded.min.js')}}"></script>
      <!-- Counter JS -->
      <script src="{{ asset('assets/js/jquery.counterup.min.js')}}"></script>
	  <!-- Waypoint JS -->
      <script src="{{ asset('assets/js/waypoint.min.js')}}"></script>
      <!-- Main JS -->
      <script src="{{ asset('assets/js/main.js')}}"></script>
   </body>
</html>