<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">

		{{-- owl-carousel --}}
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="http://fonts.cdnfonts.com/css/junita-script" rel="stylesheet">
		<title>Research and Writing</title>

		
	</head>
	<body>
        @include('inc.header')
		 @yield('content')
		 @yield('services')
		 @yield('about')
		 @yield('terms')
		 @yield('reviews')
		 @yield('policies')
		 @yield('register')
		 @yield('contact')
		 @yield('samples')
		 @yield('order')
		 
		@include('inc.footer')
		{{-- jQuery --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

		{{-- owlcarousel --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
		<script src="{{ asset('js/app.js') }}" defer></script>
		<script src="{{ asset('js/main.js') }}" defer></script>
		
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
		<script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

		<!----- Ion Icons ----->
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		@yield('script')
	</body>
</html>