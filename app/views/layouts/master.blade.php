<!-- @author Dennis Grundberg
 -->

<html>
<head>
	<meta charset="UTF-8">
	<title>HistoriAR</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">
	<link rel="favicon" type="image/png" href="{{ asset('images/rolof_icon.png') }}"/>
	{{ HTML::style('css/main.css'); }}
	{{ HTML::script('jQuery/jquery.js'); }}
	{{ HTML::script('js/script.js'); }}
	{{ HTML::style('css/bootstrap.css'); }}
	{{ HTML::style('css/bootstrap-theme.css'); }}
</head>

<body>
	
	<div class="background"></div>

	<div class="menu-bar">
		<h2 class="menuText">HistoriAR</h2>
		<div class="slogan">
			<em style="color: white;">-Upplev Olofström ur ett finskt perspektiv!</em>
		</div>
	</div>

	<div class="header">
		<div class="home-button">
			<a href="{{ URL::to('/') }}" id="buttonText1" class="selected"><b>Hem</b></a>
		</div>
		<div class="omoss-button">
			<a href="{{ URL::to('/om-oss') }}" id="buttonText3" class="selected"><b>Om Oss</b></a>
		</div>
		<div class="app-button">
			<a href="{{ URL::to('/app') }}" id="buttonText2" class="selected"><b>App</b></a>
		</div>
	</div>

	@yield('content')

	<footer>
		<a href="#" class="back-up">Till toppen!</a>
		<div class="bot">
			<em> © 2014 HistoriAR - All Rights Reserved</em><br>
			<em>Dennis Grundberg / David Olsson / Jens Wallhoff / Eric Friman / Leo Magnusson / Johannes Westermark / Kristofer Kinberg</em>
		</div>
	</footer>
</body>
