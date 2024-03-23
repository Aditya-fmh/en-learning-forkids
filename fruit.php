<!DOCTYPE html>
<html>

<head>
    <title>Fruit</title>
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
        <p align="center">Fruit</p>
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
                        <source src="audio/fruit/apple.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For apple -->
                    <center><img src="img/fruit/apple.png" width="100" height="100" alt="apple" data-inline="true" onClick="document.getElementById('yellow').play(); return false;"></center>
                    <center><b>Apple</b></center>
                    <center><b>( ˈapəl )</b></center>
                    <br>
                    <center><b>[ Apel ]</b></center>
                </td>

                <td>
                    <!-- Green Audio -->
                    <audio id="green">
                        <source src="audio/fruit/avocado.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For avocado -->
                    <center><img src="img/fruit/avocado.png" width="100" height="100" alt="avocado" data-inline="true" onClick="document.getElementById('green').play(); return false;"></center>
                    <center><b>Avocado</b></center>
                    <center><b>( ˌavəˈkädō )</b></center>
                    <br>
                    <center><b>[ Alpukat ]</b></center>
                </td>

            <tr>
                <td>
                    <!-- Blue Audio -->
                    <audio id="blue">
                        <source src="audio/fruit/banana.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For banana -->
                    <center><img src="img/fruit/bananas.png" width="100" height="100" alt="bananas" onClick="document.getElementById('blue').play(); return false;"></center>
                    <center><b>Banana</b></center>
                    <center><b>( bəˈnanə )</b></center>
                    <br>
                    <center><b>[ Pisang ]</b></center>
                </td>

                <td>
                    <!-- Red Audio -->
                    <audio id="red">
                        <source src="audio/fruit/cherry.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For cherries -->
                    <center><img src="img/fruit/cherries.png" width="100" height="100" alt="cherries" onClick="document.getElementById('red').play(); return false;"></center>
                    <center><b>Cherry</b></center>
                    <center><b>( ˈCHerē )</b></center>
                    <br>
                    <center><b>[ Ceri ]</b></center>
                </td>
            </tr>

            <tr>
                <td>
                    <!-- Orange Audio -->
                    <audio id="orange">
                        <source src="audio/fruit/coconut.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For coconut -->
                    <center><img src="img/fruit/coconut-drink.png" width="100" height="100" alt="coconut" onClick="document.getElementById('orange').play(); return false;"></center>
                    <center><b>Coconut</b></center>
                    <center><b>( ˈkōkəˌnət )</b></center>
                    <br>
                    <center><b>[ Kelapa ]</b></center>
                </td>

                <td>
                    <!-- Violet Audio -->
                    <audio id="violet">
                        <source src="audio/fruit/dragon fruit.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For dragon fruit -->
                    <center><img src="img/fruit/dragon-fruit.png" width="100" height="100" alt="dragon fruit" onClick="document.getElementById('violet').play(); return false;"></center>
                    <center><b>Dragon Fruit</b></center>
                    <center><b>( ˈdraɡən fro͞ot )</b></center>
                    <br>
                    <center><b>[ Buah Naga ]</b></center>
                </td>
            </tr>

            <tr>
                <td>
                    <!-- Orange Audio -->
                    <audio id="grape">
                        <source src="audio/fruit/grape.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For coconut -->
                    <center><img src="img/fruit/grapes.png" width="100" height="100" alt="grapes" onClick="document.getElementById('grape').play(); return false;"></center>
                    <center><b>Grape</b></center>
                    <center><b>( ɡrāp )</b></center>
                    <br>
                    <center><b>[ Anggur ]</b></center>
                </td>

                <td>
                    <!-- Violet Audio -->
                    <audio id="lemon">
                        <source src="audio/fruit/lemon.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For dragon fruit -->
                    <center><img src="img/fruit/lemon.png" width="100" height="100" alt="lemon" onClick="document.getElementById('lemon').play(); return false;"></center>
                    <center><b>Lemon</b></center>
                    <center><b>( ˈlemən )</b></center>
                    <br>
                    <center><b>[ Lemon ]</b></center>
                </td>
            </tr>

            <tr>
                <td>
                    <!-- Orange Audio -->
                    <audio id="mango">
                        <source src="audio/fruit/mango.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For coconut -->
                    <center><img src="img/fruit/mango.png" width="100" height="100" alt="mango" onClick="document.getElementById('mango').play(); return false;"></center>
                    <center><b>Mango</b></center>
                    <center><b>( ˈmaNGɡō )</b></center>
                    <br>
                    <center><b>[ Mangga ]</b></center>
                </td>

                <td>
                    <!-- Violet Audio -->
                    <audio id="orangejuice">
                        <source src="audio/fruit/orange.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For dragon fruit -->
                    <center><img src="img/fruit/orange-juice.png" width="100" height="100" alt="orange" onClick="document.getElementById('orangejuice').play(); return false;"></center>
                    <center><b>Orange</b></center>
                    <center><b>( ˈôrənj )</b></center>
                    <br>
                    <center><b>[ Jeruk ]</b></center>
                </td>
            </tr>

            <tr>
                <td>
                    <!-- Orange Audio -->
                    <audio id="pineapple">
                        <source src="audio/fruit/pineapple.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For coconut -->
                    <center><img src="img/fruit/pineapple.png" width="100" height="100" alt="pineapple" onClick="document.getElementById('pineapple').play(); return false;"></center>
                    <center><b>Pineapple</b></center>
                    <center><b>( ˈpīˌnapəl )</b></center>
                    <br>
                    <center><b>[ Nanas ]</b></center>
                </td>

                <td>
                    <!-- Violet Audio -->
                    <audio id="star">
                        <source src="audio/fruit/star fruit.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For dragon fruit -->
                    <center><img src="img/fruit/star-fruit.png" width="100" height="100" alt="star fruit" onClick="document.getElementById('star').play(); return false;"></center>
                    <center><b>Star Fruit</b></center>
                    <center><b>( stär fro͞ot )</b></center>
                    <br>
                    <center><b>[ Belimbing ]</b></center>
                </td>
            </tr>

            <tr>
                <td>
                    <!-- Orange Audio -->
                    <audio id="strawberry">
                        <source src="audio/fruit/strawberry.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For coconut -->
                    <center><img src="img/fruit/strawberry.png" width="100" height="100" alt="strawberry" onClick="document.getElementById('strawberry').play(); return false;"></center>
                    <center><b>Strawberry</b></center>
                    <center><b>( ˈstrôˌberē )</b></center>
                    <br>
                    <center><b>[ Stroberi ]</b></center>
                </td>

                <td>
                    <!-- Violet Audio -->
                    <audio id="watermelon">
                        <source src="audio/fruit/watermelon.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For dragon fruit -->
                    <center><img src="img/fruit/watermelon.png" width="100" height="100" alt="watermelon" onClick="document.getElementById('watermelon').play(); return false;"></center>
                    <center><b>Watermelon</b></center>
                    <center><b>( ˈwôdərˌmelən )</b></center>
                    <br>
                    <center><b>[ Semangka ]</b></center>
                </td>
            </tr>
        </table>
    </div>
    <footer data-role="footer" data-position="fixed" data-theme="b">
        <h2>English Learning For Kids</h2>
    </footer>

</body>

</html>