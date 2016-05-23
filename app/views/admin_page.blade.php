@extends('layouts.master')
<!-- @ author Dennis Grundberg
			  Eric Friman
 -->
@section('content')

<div class="main">
	<h3 class="centerText"><a href="{{ URL::to('logout') }}" class="logout"><b>Logout</b></a></h3>

		<div class="thumbnail">
			<h3 style="text-align: center;">Lägg till en medarbetare</h3><br>
			<ul>	
				{{ Form::open(array('url' => 'admin_page/about')) }}
				{{ Form::open(array('url' => 'admin_page')) }}
				<li>{{ Form::text('name', Input::old('name'), array('placeholder' => 'Namn')) }}</li>
				<li>{{ Form::text('age', Input::old('age'), array('placeholder' => 'Ålder')) }}</li>
				<li>{{ Form::text('contact', Input::old('contact'), array('placeholder' => 'Kontakt')) }}</li>
				<li>{{ Form::text('info', Input::old('info'), array('placeholder' => 'Info')) }}</li>
				<li>{{ Form::text('front', Input::old('front'), array('placeholder' => 'Front')) }}</li>
			</ul>
			<br>
			{{ Form::submit('Lägg till medarbetare', array('class'=>'btn btn-large btn-primary btn-block'))}}
			{{ Form::close() }}

		</div>

	<div class="thumbnail">

		<h3 style="text-align: center;">Lägg till app info</h3><br>
			{{ Form::open(array('url' => 'admin_page/app')) }}
		<ul>
			<li>{{ Form::text('info', Input::old('info'), array('placeholder' => 'Info')) }}</li>
		</ul>
		<br>
		{{ Form::submit('Lägg till', array('class'=>'btn btn-large btn-primary btn-block'))}}
		{{ Form::close() }}
	</div>

	<H1>Update/Delete</H1>
	<div class="thumbnail">
		<h1>Appinfo</h1>

		@foreach ($app as $item)
			{{$id = $item -> id }}
			. 
			{{ $item -> info }}
			<br>
		@endforeach

		{{ Form::open(array('url' => 'admin_page/delete_appinfo')) }}
				{{ Form::text('id', Input::old('id'), array('placeholder' => 'id, t.ex. 3')) }}
				
			<br>
			{{ Form::submit('Ta bort app information', array('class'=>'btn btn-large btn-primary btn-block'))}}
		{{ Form::close() }}

	</div>
	<div class="thumbnail">
		<h3>Tabort medarbetare</h3>
		@foreach ($about as $item)
			{{ $item -> id}}
			. 
			{{ $item -> name }}

			</br>
		@endforeach

		{{ Form::open(array('url' => 'admin_page/delete_about')) }}
			
			{{ Form::text('id', Input::old('id'), array('placeholder' => 'id, t.ex. 3')) }}
				
			<br>
			{{ Form::submit('Ta bort medarbetare', array('class'=>'btn btn-large btn-primary btn-block'))}}
		{{ Form::close() }}
	</div>
</div>




@stop