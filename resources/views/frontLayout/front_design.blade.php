<!DOCTYPE html>
<html lang="en">
<head>
<title>Home Nurse Care</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/styles/bootstrap-4.1.2/bootstrap.min.css">

<link href="{{asset('frontend')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/plugins/OwlCarousel2-2.3.4/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/plugins/OwlCarousel2-2.3.4/owl.theme.default.css">

<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/plugins/OwlCarousel2-2.3.4/animate.css">
<link href="{{asset('frontend')}}/plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">

<link href="{{asset('frontend')}}/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

	@include('frontLayout.front_header')
	
	@yield('content')
	
	@include('frontLayout.front_footer')

<script src="{{asset('frontend')}}/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('frontend')}}/styles/bootstrap-4.1.2/popper.js"></script>
<script src="{{asset('frontend')}}/styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{asset('frontend')}}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{asset('frontend')}}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{asset('frontend')}}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{asset('frontend')}}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{asset('frontend')}}/plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="{{asset('frontend')}}/plugins/easing/easing.js"></script>
<script src="{{asset('frontend')}}/plugins/progressbar/progressbar.min.js"></script>
<script src="{{asset('frontend')}}/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{asset('frontend')}}/plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="{{asset('frontend')}}/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="{{asset('frontend')}}/js/custom.js"></script>
</body>
</html>
</body>
</html>