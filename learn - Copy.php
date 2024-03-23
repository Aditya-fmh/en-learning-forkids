<!DOCTYPE html>
<html>

<head>
	<title>Learn English</title>
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

	<header data-role="header" data-position="fixed" data-theme="b">
		<a href="index.php" class="ui-input-btn ui-btn ui-icon-arrow-l ui-btn-icon-notext ui-btn-a ui-corner-all">Back</a>
		<p align="center">Learn English</p>
	</header>
	<div data-role="content">
		<table align="center">
			<tr>
				<td>
					<!-- Audio Control -->
					<audio id="alphabet">
						<source src="audio/alphabet/alphabet.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For Audio -->
					<center><a href="alphabet.php"><img src="img/abc.png" width="100" height="100" alt="Alphabet"></a></center>
					<center><b>Alphabet</b></center>
					<center><b>( alfəˌbet )</b></center>
					<br>
					<center><b>< Alfabet ></b></center>
					<center><a href="#" class="ui-btn ui-icon-audio ui-btn-icon-notext ui-btn-b" onClick="document.getElementById('alphabet').play(); return true">Listen</a></center>
				</td>

				<td>
					<!-- Audio Control -->
					<audio id="number">
						<source src="audio/number/number.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For Audio -->
					<center><a href="number.php"><img src="img/123.png" width="100" height="100" alt="Number"></a></center>
					<center><b>Number</b></center>
					<center><b>( ˈnəmbər )</b></center>
					<br>
					<center><b>< Nomor ></b></center>
					<center><a href="#" class="ui-btn ui-icon-audio ui-btn-icon-notext ui-btn-b" onClick="document.getElementById('number').play(); return true">Listen</a></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- Audio Control -->
					<audio id="color">
						<source src="audio/color/color.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For Audio -->
					<center><a href="color.php"><img src="img/color.png" width="100" height="100" alt="Color"></a></center>
					<center><b>Color</b></center>
					<center><b>( ˈkələr )</b></center>
					<br>
					<center><b>< Warna ></b></center>
					<center><a href="#" class="ui-btn ui-icon-audio ui-btn-icon-notext ui-btn-b" onClick="document.getElementById('color').play(); return true">Listen</a></center>
				</td>

				<td>
					<!-- Audio Control -->
					<audio id="shape">
						<source src="audio/shape/shape.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For Audio -->
					<center><a href="shape.php"><img src="img/shape.png" width="100" height="100" alt="Shape"></a></center>
					<center><b>Fruit</b></center>
					<center><b>( fro͞ot )</b></center>
					<br>
					<center><b>< Buah ></b></center>
					<center><a href="#" class="ui-btn ui-icon-audio ui-btn-icon-notext ui-btn-b" onClick="document.getElementById('shape').play(); return true">Listen</a></center>
				</td>
			</tr>

			<td colspan="2">
				<!-- Audio Control -->
				<audio id="audio_play">
					<source src="audio/alphabet/alphabet.mp3" type="audio/ogg" />
				</audio>
				<!-- Image For Audio -->
				<center><a href="animal.php"><img src="img/animals.png" width="100" height="100" alt="Alphabet" onClick="document.getElementById('audio_play').play(); return true"></a></center>
				<center><b>Animal</b></center>
				<center><b>( ˈanəməl )</b></center>
				<center><a href="#" class="ui-btn ui-icon-audio ui-btn-icon-notext ui-btn-b" onClick="document.getElementById('audio_play').play(); return true">Listen</a></center>
			</td>
			</tr>
		</table>
	</div>
	<footer data-role="footer" data-position="fixed" data-theme="b">
		<h2>
			<marquee>English Learning For Kids</marquee>
		</h2>
	</footer>
</body>

</html>