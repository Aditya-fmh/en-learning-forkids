<!DOCTYPE html>
<html>

<head>
    <title>Vegetable</title>
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
        <p align="center">Vegetable</p>
        <a href="#mypanel" data-rel="push" class="ui-input-btn ui-btn ui-icon-bars ui-btn-icon-notext ui-btn-a ui-corner-all">Go To</a>
    </header>

    <div data-role="content">
        <p align="center"><b>Tap Image to Hear The Pronounciation</b></p>
        <p align="center"><b>(Sentuh Gambar Untuk Mendengarkan Pengucapannya)</b></p>
        <table align="center">
            <tr>
                <td>
                    <!-- Yellow Audio -->
                    <audio id="broccoli">
                        <source src="audio/vegetable/broccoli.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For apple -->
                    <center><img src="img/vegetable/broccoli.png" width="100" height="100" alt="broccoli" data-inline="true" onClick="document.getElementById('broccoli').play(); return false;"></center>
                    <center><b>Broccoli</b></center>
                    <center><b>( ˈbräk(ə)lē )</b></center>
                    <br>
                    <center><b>[ Brokoli ]</b></center>
                </td>

                <td>
                    <!-- Green Audio -->
                    <audio id="cabbage">
                        <source src="audio/vegetable/cabbage.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For avocado -->
                    <center><img src="img/vegetable/cabbage.png" width="100" height="100" alt="cabbage" data-inline="true" onClick="document.getElementById('cabbage').play(); return false;"></center>
                    <center><b>Cabbage</b></center>
                    <center><b>( ˈkabij )</b></center>
                    <br>
                    <center><b>[ Kubis ]</b></center>
                </td>

            <tr>
                <td>
                    <!-- Blue Audio -->
                    <audio id="carrot">
                        <source src="audio/vegetable/carrot.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For banana -->
                    <center><img src="img/vegetable/carrot.png" width="100" height="100" alt="carrot" onClick="document.getElementById('carrot').play(); return false;"></center>
                    <center><b>Carrot</b></center>
                    <center><b>( ˈkerət )</b></center>
                    <br>
                    <center><b>[ Wortel ]</b></center>
                </td>

                <td>
                    <!-- Red Audio -->
                    <audio id="chili">
                        <source src="audio/vegetable/chili.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For cherries -->
                    <center><img src="img/vegetable/chili-pepper.png" width="100" height="100" alt="chili pepper" onClick="document.getElementById('chili').play(); return false;"></center>
                    <center><b>Chili</b></center>
                    <center><b>( ˈCHilē )</b></center>
                    <br>
                    <center><b>[ Cabai ]</b></center>
                </td>
            </tr>

            <tr>
                <td>
                    <!-- Orange Audio -->
                    <audio id="corn">
                        <source src="audio/vegetable/corn.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For coconut -->
                    <center><img src="img/vegetable/corn.png" width="100" height="100" alt="corn" onClick="document.getElementById('corn').play(); return false;"></center>
                    <center><b>Corn</b></center>
                    <center><b>( kôrn )</b></center>
                    <br>
                    <center><b>[ Jagung ]</b></center>
                </td>

                <td>
                    <!-- Violet Audio -->
                    <audio id="cucumber">
                        <source src="audio/vegetable/cucumber.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For dragon fruit -->
                    <center><img src="img/vegetable/cucumber.png" width="100" height="100" alt="cucumber" onClick="document.getElementById('cucumber').play(); return false;"></center>
                    <center><b>Cucumber</b></center>
                    <center><b>( ˈkyo͞oˌkəmbər )</b></center>
                    <br>
                    <center><b>[ Ketimun ]</b></center>
                </td>
            </tr>

            <tr>
                <td>
                    <!-- Orange Audio -->
                    <audio id="eggplant">
                        <source src="audio/vegetable/eggplant.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For coconut -->
                    <center><img src="img/vegetable/eggplant.png" width="100" height="100" alt="eggplant" onClick="document.getElementById('eggplant').play(); return false;"></center>
                    <center><b>Eggplant</b></center>
                    <center><b>( eggplant )</b></center>
                    <br>
                    <center><b>[ Terong ]</b></center>
                </td>

                <td>
                    <!-- Violet Audio -->
                    <audio id="onion">
                        <source src="audio/vegetable/onion.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For dragon fruit -->
                    <center><img src="img/vegetable/onion.png" width="100" height="100" alt="onion" onClick="document.getElementById('onion').play(); return false;"></center>
                    <center><b>Onion</b></center>
                    <center><b>( ˈənyən )</b></center>
                    <br>
                    <center><b>[ Bawang ]</b></center>
                </td>
            </tr>

            <tr>
                <td>
                    <!-- Orange Audio -->
                    <audio id="potato">
                        <source src="audio/vegetable/potato.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For coconut -->
                    <center><img src="img/vegetable/potato.png" width="100" height="100" alt="potato" onClick="document.getElementById('potato').play(); return false;"></center>
                    <center><b>Potato</b></center>
                    <center><b>( pəˈtādō )</b></center>
                    <br>
                    <center><b>[ Kentang ]</b></center>
                </td>

                <td>
                    <!-- Violet Audio -->
                    <audio id="pumpkin">
                        <source src="audio/vegetable/pumpkin.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For dragon fruit -->
                    <center><img src="img/vegetable/pumpkin.png" width="100" height="100" alt="pumpkin" onClick="document.getElementById('pumpkin').play(); return false;"></center>
                    <center><b>Pumpkin</b></center>
                    <center><b>( ˈpəm(p)kən )</b></center>
                    <br>
                    <center><b>[ Labu ]</b></center>
                </td>
            </tr>

            <tr>
                <td>
                    <!-- Orange Audio -->
                    <audio id="spinach">
                        <source src="audio/vegetable/spinach.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For coconut -->
                    <center><img src="img/vegetable/spinach.png" width="100" height="100" alt="spinach" onClick="document.getElementById('spinach').play(); return false;"></center>
                    <center><b>Spinach</b></center>
                    <center><b>( ˈspiniCH )</b></center>
                    <br>
                    <center><b>[ Bayam ]</b></center>
                </td>

                <td>
                    <!-- Violet Audio -->
                    <audio id="tomato">
                        <source src="audio/vegetable/tomato.mp3" type="audio/ogg" />
                    </audio>
                    <!-- Image For dragon fruit -->
                    <center><img src="img/vegetable/tomato.png" width="100" height="100" alt="tomato" onClick="document.getElementById('tomato').play(); return false;"></center>
                    <center><b>Tomato</b></center>
                    <center><b>( təˈmādō )</b></center>
                    <br>
                    <center><b>[ Tomat ]</b></center>
                </td>
            </tr>
        </table>
    </div>
    <footer data-role="footer" data-position="fixed" data-theme="b">
        <h2>English Learning For Kids</h2>
    </footer>

</body>

</html>