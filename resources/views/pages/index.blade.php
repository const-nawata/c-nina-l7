@extends('layouts.base')

@section('title', $title)

@section('header')
	@include('layouts.header.main')
@endsection

@section('body')
<div>Body -- Method: {{ $method_name }}</div>
<div>{{ __('prompts.welcome') }}</div>

<a href="{{ route('userslist') }}">Users list</a>
@endsection

@section('footer')
	<div>Footer</div>
@endsection
