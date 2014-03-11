@extends('master')

@section('title')
	@parent
		Editor
@stop

@section('head')
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript" ></script>
	<link async rel="StyleSheet" href="{{URL::to('css/navBlackOrange.css')}}" type="text/css" />
@stop

@section('header')
	@include('navBar')
@stop

@section('content')
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-sm-offset-1">
			<h2>The Editor</h2>
		</div>
	</div>
@stop

@section('footer')
@stop

@section('foot')
@stop



