<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Title -->
		<title>Admin</title>
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
		<link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
	<!-- Responsive Css -->
		<link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet">
        @yield('style')
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
	 <!--========== ADMIN SIDE MENU one ========-->
     <div class="_1side_menu">
		<div class="_1side_menu_logo">
			<div class="main_logo">
				<a href="/" >
					<span>MURSED</span>
				</a>
			</div>
	    </div>

        <!--~~~~~~~~ MENU CONTENT ~~~~~~~~-->
        <div class="_1side_menu_content">
            <div class="_1side_menu_img_name">
                <img class="_1side_menu_img" src="assets/img/profile.jpg" alt="" title="">
                <p class="_1side_menu_name"></p>
            </div>

                <!--~~~ MENU LIST ~~~~~~-->
            <div class="_1side_menu_list">
                <ul class="_1side_menu_list_ul">
                    <li class="_1side_menu_list_li">
                        <a href="admin_home">
                        Dashboard
                        </a>
                    </li>
                    <li class="_1side_menu_list_li">
                        <a href="admin_prayer">
                            Prayer Times
                        </a>
                    </li>
                    <li class="_1side_menu_list_li">
                        <a href="admin_video">
                            Scholar Video 
                        </a>
                    </li>
                    <li class="_1side_menu_list_li">
                        <a href="admin_hadith">
                            Hadith
                        </a>
                    </li>
                    <li class="_1side_menu_list_li">
                        <a href="admin_muslim_name">
                            Muslim Name
                        </a>
                    </li>
                    <li class="_1side_menu_list_li">
                        <a href="admin_dua">
                           Dua
                        </a>
                    </li>
                    <!-- <li class="_1side_menu_list_li">
                        <a href="admin_gallery">
                           Islamic Gallery
                        </a>
                    </li> -->
                    <li class="_1side_menu_list_li">
                        <a href="admin_contact">
                           Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--========= HEADER ==========-->
<div class="header">
	<div class="_2menu  _box_shadow">
 		 <div class="admin_info">
	
 		 </div>
	</div>
</div>
<!--========= HEADER ==========-->

        @yield('content')

    

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
      @yield('script')
   </body>
</html>