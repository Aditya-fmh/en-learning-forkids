<!DOCTYPE html>
<html>

<head>
	<title>Alphabet</title>
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
	<div data-role="panel" data-position="right" data-display="popup" id="goto" data-theme="b">
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
		<a href="learn.php" class="ui-input-btn ui-btn ui-icon-home ui-btn-icon-notext ui-btn-a ui-corner-all"></a>
		<p align="center">Alphabet</p>
		<a href="#goto" data-rel="goto" class="ui-input-btn ui-btn ui-icon-bars ui-btn-icon-notext ui-btn-a ui-corner-all"></a>
	</header>

	<div data-role="content">
		<p align="center"><b>Tap Image to Hear The Pronounciation</b></p>
		<p align="center"><b>(Sentuh Gambar Untuk Mendengarkan Pengucapannya)</b></p>
		<table align="center">
			<tr>
				<td>
					<!-- A Audio -->
					<audio id="a">
						<source src="audio/alphabet/a.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For A -->
					<center><img src="img/a.gif" width="100" height="100" alt="A" data-inline="true" onClick="document.getElementById('a').play(); return false;"></center>
					<center><b>A</b></center>
					<center><b>( eɪ )</b></center>
				</td>

				<td>
					<!-- B Audio -->
					<audio id="b">
						<source src="audio/alphabet/b.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For B -->
					<center><img src="img/b.gif" width="100" height="100" alt="B" data-inline="true" onClick="document.getElementById('b').play(); return false;"></center>
					<center><b>B</b></center>
					<center><b>( biː )</b></center>
				</td>

			<tr>
				<td>
					<!-- C Audio -->
					<audio id="c">
						<source src="audio/alphabet/c.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For C -->
					<center><img src="img/c.gif" width="100" height="100" alt="C" onClick="document.getElementById('c').play(); return false;"></center>
					<center><b>C</b></center>
					<center><b>( siː )</b></center>
				</td>

				<td>
					<!-- D Audio -->
					<audio id="d">
						<source src="audio/alphabet/d.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For D -->
					<center><img src="img/d.gif" width="100" height="100" alt="D" onClick="document.getElementById('d').play(); return false;"></center>
					<center><b>D</b></center>
					<center><b>( di: )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- E Audio -->
					<audio id="e">
						<source src="audio/alphabet/e.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For E -->
					<center><img src="img/e.gif" width="100" height="100" alt="E" onClick="document.getElementById('e').play(); return false;"></center>
					<center><b>E</b></center>
					<center><b>( iː )</b></center>
				</td>

				<td>
					<!-- F Audio -->
					<audio id="f">
						<source src="audio/alphabet/f.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For F -->
					<center><img src="img/F.gif" width="100" height="100" alt="F" onClick="document.getElementById('f').play(); return false;"></center>
					<center><b>F</b></center>
					<center><b>( ɛf )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- G Audio -->
					<audio id="g">
						<source src="audio/alphabet/g.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For G -->
					<center><img src="img/c.gif" width="100" height="100" alt="G" onClick="document.getElementById('g').play(); return false;"></center>
					<center><b>G</b></center>
					<center><b>( dʒiː )</b></center>
				</td>

				<td>
					<!-- H Audio -->
					<audio id="h">
						<source src="audio/alphabet/h.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For H -->
					<center><img src="img/h.gif" width="100" height="100" alt="H" onClick="document.getElementById('h').play(); return false;"></center>
					<center><b>H</b></center>
					<center><b>( eɪtʃ )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- I Audio -->
					<audio id="i">
						<source src="audio/alphabet/i.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For I -->
					<center><img src="img/i.gif" width="100" height="100" alt="I" onClick="document.getElementById('i').play(); return false;"></center>
					<center><b>I</b></center>
					<center><b>( aɪ )</b></center>
				</td>

				<td>
					<!-- J Audio -->
					<audio id="j">
						<source src="audio/alphabet/j.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For J -->
					<center><img src="img/j.gif" width="100" height="100" alt="J" onClick="document.getElementById('j').play(); return false;"></center>
					<center><b>J</b></center>
					<center><b>( dʒeɪ )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- K Audio -->
					<audio id="k">
						<source src="audio/alphabet/k.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For K -->
					<center><img src="img/k.gif" width="100" height="100" alt="K" onClick="document.getElementById('k').play(); return false;"></center>
					<center><b>K</b></center>
					<center><b>( keɪ )</b></center>
				</td>

				<td>
					<!-- L Audio -->
					<audio id="l">
						<source src="audio/alphabet/l.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For L -->
					<center><img src="img/l.gif" width="100" height="100" alt="L" onClick="document.getElementById('l').play(); return false;"></center>
					<center><b>L</b></center>
					<center><b>( ɛl )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- M Audio -->
					<audio id="m">
						<source src="audio/alphabet/m.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For M -->
					<center><img src="img/m.gif" width="100" height="100" alt="M" onClick="document.getElementById('m').play(); return false;"></center>
					<center><b>M</b></center>
					<center><b>( ɛm )</b></center>
				</td>

				<td>
					<!-- N Audio -->
					<audio id="n">
						<source src="audio/alphabet/n.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For N -->
					<center><img src="img/n.gif" width="100" height="100" alt="N" onClick="document.getElementById('n').play(); return false;"></center>
					<center><b>N</b></center>
					<center><b>( ɛn )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- O Audio -->
					<audio id="o">
						<source src="audio/alphabet/o.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For O -->
					<center><img src="img/o.gif" width="100" height="100" alt="O" onClick="document.getElementById('o').play(); return false;"></center>
					<center><b>O</b></center>
					<center><b>( oʊ )</b></center>
				</td>

				<td>
					<!-- P Audio -->
					<audio id="p">
						<source src="audio/alphabet/p.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For P -->
					<center><img src="img/p.gif" width="100" height="100" alt="P" onClick="document.getElementById('p').play(); return false;"></center>
					<center><b>P</b></center>
					<center><b>( piː )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- Q Audio -->
					<audio id="q">
						<source src="audio/alphabet/q.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For Q -->
					<center><img src="img/q.gif" width="100" height="100" alt="Q" onClick="document.getElementById('q').play(); return false;"></center>
					<center><b>Q</b></center>
					<center><b>( kjuː )</b></center>
				</td>

				<td>
					<!-- R Audio -->
					<audio id="r">
						<source src="audio/alphabet/r.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For R -->
					<center><img src="img/r.gif" width="100" height="100" alt="R" onClick="document.getElementById('r').play(); return false;"></center>
					<center><b>R</b></center>
					<center><b>( ɑr )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- S Audio -->
					<audio id="s">
						<source src="audio/alphabet/s.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For S -->
					<center><img src="img/s.gif" width="100" height="100" alt="S" onClick="document.getElementById('s').play(); return false;"></center>
					<center><b>S</b></center>
					<center><b>( ɛs )</b></center>
				</td>

				<td>
					<!-- T Audio -->
					<audio id="t">
						<source src="audio/alphabet/t.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For T -->
					<center><img src="img/t.gif" width="100" height="100" alt="T" onClick="document.getElementById('t').play(); return false;"></center>
					<center><b>T</b></center>
					<center><b>( ti: )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- U Audio -->
					<audio id="u">
						<source src="audio/alphabet/u.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For U -->
					<center><img src="img/u.gif" width="100" height="100" alt="U" onClick="document.getElementById('u').play(); return false;"></center>
					<center><b>U</b></center>
					<center><b>( ju: )</b></center>
				</td>

				<td>
					<!-- V Audio -->
					<audio id="v">
						<source src="audio/alphabet/v.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For V -->
					<center><img src="img/v.gif" width="100" height="100" alt="V" onClick="document.getElementById('v').play(); return false;"></center>
					<center><b>V</b></center>
					<center><b>( vi: )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- W Audio -->
					<audio id="w">
						<source src="audio/alphabet/w.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For W -->
					<center><img src="img/w.gif" width="100" height="100" alt="W" onClick="document.getElementById('w').play(); return false;"></center>
					<center><b>W</b></center>
					<center><b>( ˈdʌbəl juː )</b></center>
				</td>

				<td>
					<!-- X Audio -->
					<audio id="x">
						<source src="audio/alphabet/x.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For X -->
					<center><img src="img/x.gif" width="100" height="100" alt="X" onClick="document.getElementById('x').play(); return false;"></center>
					<center><b>X</b></center>
					<center><b>( ɛks )</b></center>
				</td>
			</tr>

			<tr>
				<td>
					<!-- Y Audio -->
					<audio id="y">
						<source src="audio/alphabet/y.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For Y -->
					<center><img src="img/y.gif" width="100" height="100" alt="Y" onClick="document.getElementById('y').play(); return false;"></center>
					<center><b>Y</b></center>
					<center><b>( waɪ )</b></center>
				</td>

				<td>
					<!-- Z Audio -->
					<audio id="z">
						<source src="audio/alphabet/z.mp3" type="audio/ogg" />
					</audio>
					<!-- Image For Z -->
					<center><img src="img/z.gif" width="100" height="100" alt="Z" onClick="document.getElementById('z').play(); return false;"></center>
					<center><b>Z</b></center>
					<center><b>( zi: )</b></center>
				</td>
			</tr>
		</table>
	</div>

	<footer data-role="footer" data-position="fixed" data-theme="b">
		<h2>English Learning For Kids</h2>
	</footer>
</body>

</html>