<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title -->
		<title>Hadith</title>
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
    
       <div class="login_area _padd_tb60">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4 col-md-6">
						<div class="login_form">
							<div class="row">
								<div class="col-md-12">
									<h2>Registration</h2>
								</div>
								<div class="col-md-12">
									<div class="sign_in_default _padd20">
                                    @if (session('alert_message'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('alert_message') }}
                                    </div>
                                    @endif
                                    @if (session('message'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('message') }}
                                    </div>
                                    @endif
										<form action="{{action('UserController@register')}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
											<div class="login_group">
												<input type="input" placeholder="Name" name="name">
												<span class="form_icon">
													<i class="far fa-envelope"></i>
												</span>
											</div>
											<div class="login_group">
												<input type="email" placeholder="Email" name="email">
												<span class="form_icon">
													<i class="far fa-envelope"></i>
												</span>
											</div>
											<div class="login_group">
												<input type="text" placeholder="Address" name="address">
												<span class="form_icon">
													<i class="far fa-envelope"></i>
												</span>
											</div>
											<div class="login_group">
												<input type="password" placeholder="Password" name="password">
												<span class="form_icon">
													<i class="fas fa-lock"></i>
												</span>
											</div>
											<!-- <div class="login_group login_group_forgot_pass">
												<span class="keep_logged"><input type="checkbox">Remember Me</span>	
												<span class="forgot_password">
													<a href="#">Forgot Password?</a>
												</span>	
											</div> -->
											<div class="login_group _mar_t10">
												<input class="block_btn" type="submit" value="Register">
											</div> 
										</form>	
									</div>
								<!-- 	<div class="sign_up_area _padd20" >
										<form action="#">
											<div class="login_group">
												<label>Name</label>
												<input type="text">
											</div>
											<div class="login_group">
													<label>Email</label>
													<input type="email">
												</div>
											<div class="login_group">
												<label>Password</label>
												<input type="password">
											</div>
											<div class="login_group">
												<label>Re-Password</label>
												<input type="password">
											</div>
											<div class="login_group">
												<input class="block_btn" type="submit" value="Sign Up">
											</div> 
										</form>	
									</div> -->
								</div>
								<div class="col-md-12">
									<p>Not a member ? <a href="/register" class="sign_up_link">Sign Up Now</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<script>
			function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
			}
			function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			}
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