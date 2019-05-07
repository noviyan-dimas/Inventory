
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>Sistem Inventaris</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
		.mySlides {display:none}
		.demo {cursor:pointer}
	</style>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css" media="screen">
	<link rel="stylesheet" href="css/grid.css" media="screen">
	<link rel="stylesheet" href="css/style.css" media="screen">
	<link rel="stylesheet" href="plugin/font-awesome/css/font-awesome.css" media="screen">
	<!-- <link rel="stylesheet" href="css/style.min.css" type="text/css" media="screen"> -->
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>

	<div class="menu">
		<div class="container clearfix">

			<div id="logo" class="grid_3">
				<img src="images/logo.png">
			</div>

			<div id="nav" class="grid_9 omega">
				<ul class="navigation">
					<li data-slide="1">Home</li>
					<li data-slide="2">EULA</li>
					<li data-slide="3">Barang</li>
				</ul>
			</div>

		</div>
	</div>


	<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<center>
			<div id="content" class="grid_12">
				<h1>Welcome!</h1>
				<h2>Your place to rent things!</h2>
				<p>Here we're providing you with a bunch of things we got from our User! PS: I'm not taking any credits from this</p>
				<p>
					<a class="btn btn-success btn-lg">Dashboard</a>
					<a class="btn btn-default btn-lg">Add Belongings</a>
				</p>
			</div>
			</center>
		</div>
	</div>



	<div class="slide" id="services" data-slide="2" data-stellar-background-ratio="0.5">
		<div class="container clearfix">
			<div>
				<div class="grid_3"><i class="fa fa-cogs"></i><br><h3>A</h3><br> -------------------</div>
				<div class="grid_3"><i class="fa fa-camera-retro"></i><br><h3>B</h3><br>-----------------</div>
				<div class="grid_3"><i class="fa fa-rocket"></i><br><h3>C</h3><br> ---------------------------- </div>
				<div class="grid_3 omega"><i class="fa fa-dashboard"></i><br><h3>D</h3><br> -----------------------------</div>
			</div>

		</div>
	</div>



	<div class="slide" id="about" data-slide="3" data-stellar-background-ratio="0.5">
		<div class="container clearfix">

			<h2>Barang Tersedia</h2>
			<p class="heading">...</p>
			<div>
				<div class="grid_3">
				</div>
				
					<div class="w3-content" style="max-width:1200px">
						<img class="mySlides" src="images/bing/4.png" style="width:100%">
  						<img class="mySlides" src="images/bing/2.png" style="width:100%">
  						<img class="mySlides" src="images/bing/1.png" style="width:100%">

  				<div class="w3-row-padding w3-section">
    			<div class="w3-col s4">
      					<img class="demo w3-opacity" src="images/bing/4.png" style="width:100%" onclick="currentDiv(1)">
					</div>
				<div class="w3-col s4">
      					<img class="demo w3-opacity" src="images/bing/2.png" style="width:100%" onclick="currentDiv(2)">
    				</div>
    			<div class="w3-col s4">
      					<img class="demo w3-opacity" src="images/bing/1.png" style="width:100%" onclick="currentDiv(3)">
    			</div>
  				</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/scripts.js"></script>
	<!-- <script type="text/javascript" src="js/scripts.min.js"></script> -->
</body>
</html>
