<!DOCTYPE html>
<html>

<head>
	<title>Number</title>
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
		<p align="center">Number</p>
		<a href="#mypanel" data-rel="push" class="ui-input-btn ui-btn ui-icon-bars ui-btn-icon-notext ui-btn-a ui-corner-all">Go To</a>
	</header>

	<div data-role="content">
		<marquee>Become Premium Now, <a href="membership.php">Click Here!!!</a></marquee>
		<p align="center"><b>Tap Image to Hear The Pronounciation</b></p>
		<p align="center"><b>(Sentuh Gambar Untuk Mendengarkan Pengucapannya)</b></p>
		<table align="center">
			<tr>
				<td>
					<!-- 1 Audio -->
					<audio id="1">
						<source src="audio/number/1.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 1 -->
					<center><img src="img/1.gif" width="100" height="100" alt="1" data-inline="true" onClick="document.getElementById('1').play(); return false;"></center>
					<center><b>1 [One]</b></center>
					<center><b>( wən )</b></center>
				</td>

				<td>
					<!-- 2 Audio -->
					<audio id="2">
						<source src="audio/number/2.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 2 -->
					<center><img src="img/2.gif" width="100" height="100" alt="2" data-inline="true" onClick="document.getElementById('2').play(); return false;"></center>
					<center><b>2 [Two]</b></center>
					<center><b>( to͞o )</b></center>
				</td>

			<tr>
				<td>
					<!-- 3 Audio -->
					<audio id="3">
						<source src="audio/number/3.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 3 -->
					<center><img src="img/3.gif" width="100" height="100" alt="3" onClick="document.getElementById('3').play(); return false;"></center>
					<center><b>3 [Three]</b></center>
					<center><b>( THrē )</b></center>
				</td>

				<td>
					<!-- 4 Audio -->
					<audio id="4">
						<source src="audio/number/4.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 4 -->
					<center><img src="img/4.gif" width="100" height="100" alt="4" onClick="document.getElementById('4').play(); return false;"></center>
					<center><b>4 [Four]</b></center>
					<center><b>( fôr )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- 5 Audio -->
					<audio id="5">
						<source src="audio/number/5.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/5.gif" width="100" height="100" alt="5" onClick="document.getElementById('5').play(); return false;"></center>
					<center><b>5 [Five]</b></center>
					<center><b>( fīv )</b></center>
				</td>

				<td>
					<!-- 6 Audio -->
					<audio id="6">
						<source src="audio/number/6.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 6 -->
					<center><img src="img/6.gif" width="100" height="100" alt="6" onClick="document.getElementById('6').play(); return false;"></center>
					<center><b>6 [Six]</b></center>
					<center><b>( siks )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- 7 Audio -->
					<audio id="7">
						<source src="audio/number/7.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 7 -->
					<center><img src="img/7.gif" width="100" height="100" alt="7" onClick="document.getElementById('7').play(); return false;"></center>
					<center><b>7 [Seven]</b></center>
					<center><b>( ˈsevən )</b></center>
				</td>

				<td>
					<!-- 8 Audio -->
					<audio id="8">
						<source src="audio/number/8.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 8 -->
					<center><img src="img/8.gif" width="100" height="100" alt="8" onClick="document.getElementById('8').play(); return false;"></center>
					<center><b>8 [Eight]</b></center>
					<center><b>( āt )</b></center>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<!-- 9 Audio -->
					<audio id="9">
						<source src="audio/number/9.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 9 -->
					<center><img src="img/9.gif" width="100" height="100" alt="9" onClick="document.getElementById('9').play(); return false;"></center>
					<center><b>9 [Nine]</b></center>
					<center><b>( nīn )</b></center>
				</td>
			</tr>

			<tr>
				<td colspan="2">
					<!-- 10 Audio -->
					<audio id="10">
						<source src="audio/number/10.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 10 -->
					<center><img src="img/10.gif" width="100" height="100" alt="10" onClick="document.getElementById('10').play(); return false;"></center>
					<center><b>10 [Ten]</b></center>
					<center><b>( ten )</b></center>
				</td>
			</tr>
		</table>
	</div>
	<footer data-role="footer" data-position="fixed" data-theme="b">
		<h2>English Learning For Kids</h2>
	</footer>
</body>

</html>