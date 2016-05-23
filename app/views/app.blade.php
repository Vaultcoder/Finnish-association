<!--author Eric Friman 
					 Dennis Grundberg
-->
@extends('layouts.master')

@section('content')

	<div class="main">

		<h2 class="info-text"><b>Applikationen</b></h2>

		<div class="logo-img"></div>
		
		<div class="line2"></div><br /><br />
		
		<div class="map-wrap">
			<img class="map" src="images/Karta2.jpg"></img>
		</div>
		
		<br /><br />
		<div class="line2"></div>

		<h2 class="info-text"><b>Så här gör du</b></h3>
		
		<ul class="info-list">
			@foreach ($app as $item)
				<li>{{ $item -> info }}</li>
			@endforeach
		</ul>
			<br>
	 </div>
@stop