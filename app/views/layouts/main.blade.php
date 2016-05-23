<html>
<head>
	<meta charset="UTF-8">
	<title>Rolof</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes">

	{{ HTML::style('css/main.css'); }}
	{{ HTML::script('jQuery/jquery.js'); }}
	{{ HTML::script('jQuery/jquery-1.10.2.js'); }}
	{{ HTML::script('jQuery/jquery-core.js'); }}
	{{ HTML::script('jQuery/jquery-latest.js'); }}
	{{ HTML::script('jQuery/jquery-slide.js'); }}
	{{ HTML::script('js/script.js'); }}

</head>

<body>
	<div class="menu-bar">
		<h1 class="menuText">Reality Olof</h1>
	</div>



	@yield('content')


</body>