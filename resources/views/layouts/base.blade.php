<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Optional meta tags (NWT) -->
	<meta content="text/html; charset=utf-8" http-equiv="content-type" />
	<meta name="keywords" content="nina,container,465" />
	<meta name="description" content="Internet shop for container 465">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

{{--	<link rel="icon" type="image/png" href="{{ asset('images/H2-16.png') }}" sizes="16x16" />--}}

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

	<link href="{{ asset('sass/open-iconic/font/css/open-iconic-bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('sass/open-iconic/font/css/open-iconic-foundation.css') }}" rel="stylesheet">
	<link href="{{ asset('sass/app.css') }}" rel="stylesheet">

{{--
	<script src="{{ asset('js/cnina.js') }}" type="text/javascript" charset="utf-8"></script>
	<link href="{{ asset('open-iconic/font/css/open-iconic-bootstrap.css') }}" rel="stylesheet" />
--}}

</head>

<body>
@yield('header')

@yield('body')

@yield('footer')

{{--@section('javascript')--}}
{{--@show--}}
</body>
</html>