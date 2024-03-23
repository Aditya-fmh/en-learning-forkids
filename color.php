<!DOCTYPE html>
<html>

<head>
	<title>Color</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width , initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="script/jquery.mobile-1.4.5.min.css" />
	<script src="script/jquery-1.11.1.min.js"></script>
	<script src="script/jquery.mobile-1.4.5.min.js"></script>
	<style>
		table,
		th,
		td {
			border: 0px solid black;
			border-collapse: collapse;
			padding: 20px;
			text-align: center;
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
			<li><a href="fruit.php"><img src="img/fruit.png" alt="Fruit" class="ui-li-icon">Fruit</a></li>
			<li><a href="vegetable.php"><img src="img/vegetable.png" alt="Vegetable" class="ui-li-icon">Vegetable</a></li>
			<li><a href="animal.php"><img src="img/animals.png" alt="Animal" class="ui-li-icon">Animal</a></li>
		</ul>
		<p align="center"><a href="#" data-rel="close" class="ui-btn ui-corner-all ui-btn-inline ui-icon-delete ui-btn-icon-right ui-btn-a">Close</a> <a href="learn.php" class="ui-btn ui-corner-all ui-btn-inline ui-icon-home ui-btn-icon-right ui-btn-a">Home</a></p>
	</div>

	<header data-role="header" data-position="fixed" data-theme="b">
		<a href="learn.php" class="ui-input-btn ui-btn ui-icon-home ui-btn-icon-notext ui-btn-a ui-corner-all">Home</a>
		<p align="center">Color</p>
		<a href="#mypanel" data-rel="push" class="ui-input-btn ui-btn ui-icon-bars ui-btn-icon-notext ui-btn-a ui-corner-all">Go To</a>
	</header>

	<div data-role="content">
		<p align="center"><b>Tap Image to Hear The Pronounciation</b></p>
		<p align="center"><b>(Sentuh Gambar Untuk Mendengarkan Pengucapannya)</b></p>
		<table align="center">
			<tr>
				<td>
					<!-- Yellow Audio -->
					<audio id="yellow">
						<source src="audio/color/yellow.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For Yellow -->
					<center><img src="img/yellow.png" width="100" height="100" alt="yellow" data-inline="true" onClick="document.getElementById('yellow').play(); return false;"></center>
					<center><b>Yellow</b></center>
					<center><b>( yelō )</b></center>
				</td>

				<td>
					<!-- Green Audio -->
					<audio id="green">
						<source src="audio/color/green.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For Green -->
					<center><img src="img/green.png" width="100" height="100" alt="green" data-inline="true" onClick="document.getElementById('green').play(); return false;"></center>
					<center><b>Green</b></center>
					<center><b>( ɡrēn )</b></center>
				</td>

			<tr>
				<td>
					<!-- Blue Audio -->
					<audio id="blue">
						<source src="audio/color/blue.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For Blue -->
					<center><img src="img/blue.png" width="100" height="100" alt="blue" onClick="document.getElementById('blue').play(); return false;"></center>
					<center><b>Blue</b></center>
					<center><b>( blo͞o )</b></center>
				</td>

				<td>
					<!-- Red Audio -->
					<audio id="red">
						<source src="audio/color/red.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For Red -->
					<center><img src="img/red.png" width="100" height="100" alt="red" onClick="document.getElementById('red').play(); return false;"></center>
					<center><b>Red</b></center>
					<center><b>( red )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- Orange Audio -->
					<audio id="orange">
						<source src="audio/color/orange.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/orange.png" width="100" height="100" alt="orange" onClick="document.getElementById('orange').play(); return false;"></center>
					<center><b>Orange</b></center>
					<center><b>( ˈôrənj )</b></center>
				</td>

				<td>
					<!-- Violet Audio -->
					<audio id="violet">
						<source src="audio/color/violet.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/violet.png" width="100" height="100" alt="violet" onClick="document.getElementById('violet').play(); return false;"></center>
					<center><b>Violet</b></center>
					<center><b>( ˈvī(ə)lət )</b></center>
				</td>
			</tr>
		</table>
	</div>
	<footer data-role="footer" data-position="fixed" data-theme="b">
		<h2>English Learning For Kids</h2>
	</footer>

</body>

</html>