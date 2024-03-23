<!DOCTYPE html>
<html>
<head>
	<title>Shape</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="script/jquery.mobile-1.4.5.min.css" />
	<script src="script/jquery-1.11.1.min.js"></script>
	<script src="script/jquery.mobile-1.4.5.min.js"></script>
	<style> 
        table, th, td { 
            border: 0px solid black; 
            border-collapse: collapse; 
            padding: 20px; 
            text-align:center; 
        	} 
    </style>
</head>

<body>
    <!-- panel -->
 		<div data-role="panel" data-position="right" data-display="popup" id="mypanel" data-theme="b">
 			<h3>Go To :</h3>
    		<ul data-role="listview" data-insert="true">
    			<li><a href="alphabet.php"><img src="img/abc.png" alt="Alphabet" class="ui-li-icon ui-corner-none">Alphabet</a></li>
    			<li><a href="number.php"><img src="img/123.png" alt="Number" class="ui-li-icon">Number</a></li>
    			<li><a href="color.php"><img src="img/color.png" alt="Color" class="ui-li-icon">Color</a></li>
    			<li><a href="shape.php"><img src="img/shape.png" alt="Shape" class="ui-li-icon">Shape</a></li>
    			<li><a href="animal.php"><img src="img/animals.png" alt="Animal" class="ui-li-icon">Animal</a></li>
    		</ul>
			<p align="center"><a href="#" data-rel="close" class="ui-btn ui-corner-all ui-btn-inline ui-icon-delete ui-btn-icon-right ui-btn-a">Close</a> <a href="learn.php" class="ui-btn ui-corner-all ui-btn-inline ui-icon-home ui-btn-icon-right ui-btn-a">Home</a></p>
		</div>

	<header data-role="header" data-position="fixed" data-theme="b">
		<a href="learn.php" class="ui-input-btn ui-btn ui-icon-home ui-btn-icon-notext ui-btn-a ui-corner-all">Home</a>
 		<p align="center">Shape</p>
 		<a href="#mypanel" data-rel="push" class="ui-input-btn ui-btn ui-icon-bars ui-btn-icon-notext ui-btn-a ui-corner-all">Go To</a>
 	</header>

 	<div data-role="content">
	 <marquee>Become Premium Now, <a href="membership.php">Click Here!!!</a></marquee>
 		<p align="center"><b>Tap Image to Hear The Pronounciation</b></p>
		<p align="center"><b>(Sentuh Gambar Untuk Mendengarkan Pengucapannya)</b></p>
 		<table align="center">
 		<tr>
 		<td>
 		<!-- Circle Audio -->	
 		<audio id="circle">
    		<source src="audio/shape/circle.mp3" type="audio/ogg" />
		</audio>
		<!-- Image For Circle -->
		<center><img src="img/circle.png" width="100" height="100" alt="circle" data-inline="true" onClick="document.getElementById('circle').play(); return false;"></center>
		<center><b>Circle</b></center>
		<center><b>( ˈsərk(ə)l )</b></center></td>

		<td>
		<!-- Triangle Audio -->
 		<audio id="triangle">
    		<source src="audio/shape/triangle.mp3" type="audio/ogg" />
		</audio>
		<!-- Image For Triangle -->
		<center><img src="img/triangle.png" width="100" height="100" alt="triangle" data-inline="true" onClick="document.getElementById('triangle').play(); return false;"></center>
		<center><b>Triangle</b></center>
		<center><b>( ˈtrīˌaNGɡəl )</b></center></td>

		<tr>
		<td>
		<!-- Rectangle Audio -->
 		<audio id="rectangle">
    		<source src="audio/shape/rectangle.mp3" type="audio/ogg" />
		</audio>
		<!-- Image For Rectangle -->
		<center><img src="img/rectangle.png" width="120" height="70" alt="rectangle" onClick="document.getElementById('rectangle').play(); return false;"></center>
		<center><b>Rectangle</b></center>
		<center><b>( ˈrekˌtaNGɡəl )</b></center></td>

		<td>	
		<!-- Oval Audio -->
 		<audio id="oval">
    		<source src="audio/shape/oval.mp3" type="audio/ogg" />
		</audio>
		<!-- Image For Oval -->
		<center><img src="img/oval.png" width="80" height="120" alt="oval" onClick="document.getElementById('oval').play(); return false;"></center>
		<center><b>Oval</b></center>
		<center><b>( ˈōvəl )</b></center></td></tr>

		<tr>
		<td>
		<!-- Rhombus Audio -->
 		<audio id="rhombus">
    		<source src="audio/shape/rhombus.mp3" type="audio/ogg" />
		</audio>
		<!-- Image For Rhombus -->
		<center><img src="img/rhombus.png" width="100" height="100" alt="rhombus" onClick="document.getElementById('rhombus').play(); return false;"></center>
		<center><b>Rhombus</b></center>
		<center><b>( ˈrämbəs )</b></center></td>

		<td>
		<!-- Square Audio -->
 		<audio id="square">
    		<source src="audio/shape/square.mp3" type="audio/ogg" />
		</audio>
		<!-- Image For Square -->
		<center><img src="img/square.png" width="100" height="100" alt="square" onClick="document.getElementById('square').play(); return false;"></center>
		<center><b>Square</b></center>
		<center><b>( skwer )</b></center></td>
		</tr>
		</table>
 	</div>
 	<footer data-role="footer" data-position="fixed" data-theme="b">
 		<h2>English Learning For Kids</h2>
 	</footer>

</body>
</html>