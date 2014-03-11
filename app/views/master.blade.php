<!DOCTYPE html>
<html>
<head>
	<title>
		@section('title')
			EditTogether -
		@show
	</title>
	<script type="text/javascript">
		document.write("\<script src='//code.jquery.com/jquery-latest.min.js' type='text/javascript'>\<\/script>");
	</script>
	<link async rel="StyleSheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css" />
	<meta property="og:image"content="" />
	<style>
		body {
			background-color:#444;
			color:#ddd;
		}

		.modal-header {
			background-color:#555;
			color:#ddd;
		}
		.modal-content {
			background-color:#444;
			color:#ddd;
		}
		.modal-footer {
			background-color:#555;
			color:#ddd;
		}

		.modal-content button {
			color:#000;
			text-shadow: 0 0 20px rgba(0,0,0,1);
		}

		.modal-content .close {
			color:#bb4600;
			text-shadow: 0 0 3px rgba(0,0,0,1);
			opacity:.8;
		}

		.errors {
			color:red;
			padding-left:0em;
			list-style-type: none;
		}
	</style>
	@yield('head')
</head>
<body>
	@yield('header')
	@yield('content')
	@yield('footer')
</body>
	@yield('foot')
</html>

