<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
		<link rel="stylesheet" href="/path/to/cdn/fontawesome.min.css" />
		<title>Research and Writing</title>

		
	</head>
	<body>
        @include('inc.header')
		 @yield('content')
		 @yield('services')
		 @yield('about')
		 @yield('terms')

		@include('inc.footer')

        <script src="{{ asset('js/app.js') }}" defer></script>
		
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

		<!----- Ion Icons ----->
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>
</html>