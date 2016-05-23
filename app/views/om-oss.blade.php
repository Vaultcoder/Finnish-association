<!-- author Eric Friman
			Dennis Grundberg
 -->
@extends('layouts.master')

@section('content')

<div class="main">

	<h2 class="info-text"><b>Om Oss</b></h2>

	<div class="logo-img"></div>

	<div class="line2"></div>

	<div style="width: auto; min-height: 100px; overflow: hidden;">
		@foreach ($about as $item)
			@if($item->front == 0)
				<!--om "front == 0" så är man frontend-->
				<div class="personal-box">
					<h3 class="startText" style="text-align: center;"><b><nobr>{{ $item -> name }}</nobr></b></h3>
					<p style="text-align: center;"><b>Back-End</b></p>
					<p style="text-align: center;">{{ $item -> contact}}</p>
					<p style="text-align: center;">{{ $item -> info }}</p></br>
				</div>
			@endif
		@endforeach

		@foreach ($about as $item)
			@if($item->front == 1)
				<!--om "front == 1" så är man backend-->
				<div class="personal-box">
					<h3 class="startText" style="text-align: center;"><b><nobr>{{ $item -> name }}</nobr></b></h3>
					<p style="text-align: center;"><b>Front End</b></p>
					<p style="text-align: center;">{{ $item -> contact}}</p>
					<p style="text-align: center;">{{ $item -> info }}</p></br>
				</div>
			@endif
		@endforeach
	</div>

	<div class="samarb">
		<br>
		<h3 style="text-align: center; margin-top: 0; margin-bottom: 0;">I samarbete med Finska Föreningen</h3>
	</div>

</div>
@stop