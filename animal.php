<!DOCTYPE html>
<html>

<head>
	<title>Animal</title>
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
		<p align="center">Animal</p>
		<a href="#mypanel" data-rel="push" class="ui-input-btn ui-btn ui-icon-bars ui-btn-icon-notext ui-btn-a ui-corner-all">Go To</a>
	</header>

	<div data-role="content">
		<p align="center"><b>Tap Image to Hear The Pronounciation</b></p>
		<p align="center"><b>(Sentuh Gambar Untuk Mendengarkan Pengucapannya)</b></p>
		<table align="center">
			<tr>
				<td>
					<!-- 1 Audio -->
					<audio id="ant">
						<source src="audio/animal/ant.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 1 -->
					<center><img src="img/animal/ant.png" width="100" height="100" alt="Ant" data-inline="true" onClick="document.getElementById('ant').play(); return false;"></center>
					<center><b>Ant</b></center>
					<center><b>( ant )</b></center>
					<br>
					<center><b>[ Semut ]</b></center>
				</td>

				<td>
					<!-- 2 Audio -->
					<audio id="bird">
						<source src="audio/animal/bird.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 2 -->
					<center><img src="img/animal/bird.png" width="100" height="100" alt="bird" data-inline="true" onClick="document.getElementById('bird').play(); return false;"></center>
					<center><b>Bird</b></center>
					<center><b>( bərd )</b></center>
					<br>
					<center><b>[ Burung ]</b></center>
				</td>

			<tr>
				<td>
					<!-- 3 Audio -->
					<audio id="cat">
						<source src="audio/animal/cat.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 3 -->
					<center><img src="img/animal/cat.png" width="100" height="100" alt="cat" onClick="document.getElementById('cat').play(); return false;"></center>
					<center><b>Cat</b></center>
					<center><b>( kat )</b></center>
					<br>
					<center><b>[ Kucing ]</b></center>
				</td>

				<td>
					<!-- 4 Audio -->
					<audio id="chicken">
						<source src="audio/animal/chicken.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 4 -->
					<center><img src="img/animal/chicken.png" width="100" height="100" alt="chicken" onClick="document.getElementById('chicken').play(); return false;"></center>
					<center><b>Chicken</b></center>
					<center><b>( ˈCHikən )</b></center>
					<br>
					<center><b>[ Ayam ]</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- 5 Audio -->
					<audio id="dog">
						<source src="audio/animal/dog.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/animal/dog.png" width="100" height="100" alt="dog" onClick="document.getElementById('dog').play(); return false;"></center>
					<center><b>Dog</b></center>
					<center><b>( dôɡ )</b></center>
					<br>
					<center><b>[ Anjing ]</b></center>
				</td>

				<td>
					<!-- 5 Audio -->
					<audio id="duck">
						<source src="audio/animal/duck.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/animal/duck.png" width="100" height="100" alt="duck" onClick="document.getElementById('duck').play(); return false;"></center>
					<center><b>Duck</b></center>
					<center><b>( dək )</b></center>
					<br>
					<center><b>[ Bebek ]</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- 5 Audio -->
					<audio id="fish">
						<source src="audio/animal/fish.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/animal/fish.png" width="100" height="100" alt="fish" onClick="document.getElementById('fish').play(); return false;"></center>
					<center><b>Fish</b></center>
					<center><b>( fiSH )</b></center>
					<br>
					<center><b>[ Ikan ]</b></center>
				</td>

				<td>
					<!-- 5 Audio -->
					<audio id="fly">
						<source src="audio/animal/fly.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/animal/fly.png" width="100" height="100" alt="fly" onClick="document.getElementById('fly').play(); return false;"></center>
					<center><b>Fly</b></center>
					<center><b>( flī )</b></center>
					<br>
					<center><b>[ Lalat ]</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- 5 Audio -->
					<audio id="goat">
						<source src="audio/animal/goat.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/animal/goat.png" width="100" height="100" alt="goat" onClick="document.getElementById('goat').play(); return false;"></center>
					<center><b>Goat</b></center>
					<center><b>( ɡōt )</b></center>
					<br>
					<center><b>[ Kambing ]</b></center>
				</td>

				<td>
					<!-- 5 Audio -->
					<audio id="horse">
						<source src="audio/animal/horse.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/animal/horse.png" width="100" height="100" alt="horse" onClick="document.getElementById('horse').play(); return false;"></center>
					<center><b>Horse</b></center>
					<center><b>( hôrs )</b></center>
					<br>
					<center><b>[ Kuda ]</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- 5 Audio -->
					<audio id="mosq">
						<source src="audio/animal/mosquito.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/animal/mosquito.png" width="100" height="100" alt="mosq" onClick="document.getElementById('mosq').play(); return false;"></center>
					<center><b>Mosquito</b></center>
					<center><b>( məˈskēdō )</b></center>
					<br>
					<center><b>[ Nyamik ]</b></center>
				</td>

				<td>
					<!-- 5 Audio -->
					<audio id="mouse">
						<source src="audio/animal/mouse.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/animal/mouse.png" width="100" height="100" alt="mouse" onClick="document.getElementById('mouse').play(); return false;"></center>
					<center><b>Mouse</b></center>
					<center><b>( mows )</b></center>
					<br>
					<center><b>[ Tikus ]</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- 5 Audio -->
					<audio id="sheep">
						<source src="audio/animal/sheep.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/animal/sheep.png" width="100" height="100" alt="shep" onClick="document.getElementById('sheep').play(); return false;"></center>
					<center><b>Sheep</b></center>
					<center><b>( SHēp )</b></center>
					<br>
					<center><b>[ Domba ]</b></center>
				</td>

				<td>
					<!-- 5 Audio -->
					<audio id="spider">
						<source src="audio/animal/spider.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For 5 -->
					<center><img src="img/animal/spider.png" width="100" height="100" alt="spider" onClick="document.getElementById('spider').play(); return false;"></center>
					<center><b>Spider</b></center>
					<center><b>( ˈspīdər )</b></center>
					<br>
					<center><b>[ Laba-laba ]</b></center>
				</td>
			</tr>
		</table>
	</div>
	<footer data-role="footer" data-position="fixed" data-theme="b">
		<h2>English Learning For Kids</h2>
	</footer>

</body>

</html>