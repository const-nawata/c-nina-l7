@extends('layouts.base')

@section('title', $title)

@section('header')
	<h2>Users list</h2>
@endsection

@section('body')
<div>Body -- Method: {{ $method_name }}</div>
<div>Users. {{ __('prompts.welcome') }}!!! Locale: {{ Config::get('app.locale') }}</div>

@endsection

@section('footer')
	<div>Users Footer</div>
@endsection
