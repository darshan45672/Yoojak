<!DOCTYPE html>
<html class="no-js" lang="en_AU">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>@yield('title') {{ config('app.name') }}</title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=no" />
	<meta name="HandheldFriendly" content="True" />
	<meta name="pinterest" content="nopin" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/style.css') }}" />
	<!-- Fav Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="#" />
</head>
<body data-instant-intensity="mousedown">
@include('user.user-profile-layout.nav')
<section class="section-5 bg-2">
    @yield('main')
	@yield('customJS')
</section>

@include('user.user-profile-layout.footer')
</body>
</html>