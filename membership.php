<!DOCTYPE html>
<html>

<head>
    <title>Membership</title>
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
        <a href="learn.php" class="ui-input-btn ui-btn ui-icon-home ui-btn-icon-notext ui-btn-a ui-corner-all"></a>
        <p align="center">Membership Plan</p>
        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <a href="#" class="ui-input-btn ui-btn ui-icon-arrow-l ui-btn-icon-notext ui-btn-a ui-corner-all" onclick="goBack()"></a>
    </header>
    <div data-role="content" bg-color="black">
        <center><img src="img/membership.png" alt="Membership" width="300" height="97"></center><br>
        <div data-role="collapsible" data-theme="b" data-content-theme="a">
            <h4>1 Month Membership</h4>
            <p><b>Benefits:</b><br>
                - Softcopy of learning material.<br>
                - 1 Hour of exclusive zoom class everyday.<br>
                - PDF transcript of each podcast lesson.<br>
                - Vocabulary definitions & examples.<br>
                - Online quizzes for listening & language.<br>
                - Mobile-friendly lesson modules<br>
                - Dialog transcript with vocabulary definitions.<br>
                - Extra practice MP3s for review and practice.<br>
                - Free access to all the eBooks.<br><br>
            </p>
            <center>Price:<br>
                <button class="ui-btn ui-btn-b">IDR 100.000</button>
            </center>
        </div>

        <div data-role="collapsible" data-theme="b" data-content-theme="a">
            <h4>6 Month Membership</h4>
            <p><b>Benefits:</b><br>
                - Softcopy of learning material.<br>
                - 2 Hour of exclusive zoom class everyday.<br>
                - PDF transcript of each lesson.<br>
                - Vocabulary definitions & examples.<br>
                - Online quizzes for listening & language.<br>
                - Mobile-friendly lesson modules<br>
                - Dialog transcript with vocabulary definitions.<br>
                - Extra practice MP3s for review and practice.<br>
                - Free access to all the eBooks.<br><br>
            </p>
            <center>Price:<br>
                <button class="ui-btn ui-btn-b">IDR 500.000</button>
            </center>
        </div>

        <div data-role="collapsible" data-theme="b" data-content-theme="a">
            <h4>1 Year Membership</h4>
            <p><b>Benefits:</b><br>
                - Softcopy of learning material.<br>
                - 3 Hour of exclusive zoom class everyday.<br>
                - PDF transcript of each lesson.<br>
                - Vocabulary definitions & examples.<br>
                - Online quizzes for listening & language.<br>
                - Mobile-friendly lesson modules.<br>
                - Dialog transcript with vocabulary definitions.<br>
                - Extra practice MP3s for review and practice.<br>
                - Free access to all the eBooks.<br><br>
            </p>
            <center>Price:<br>
                <button class="ui-btn ui-btn-b">IDR 1.000.000</button>
            </center>
        </div>
        <br>
        <p>By buying our membership, get a lot of benefits for your english learning activity, starting from 1 month to 1 year membership.</P>
        <br>
        <p>Contact <b><i>e-learning-kids@dev.com</b></i> for more information</p>
    </div>
    <footer data-role="footer" data-position="fixed" data-theme="b">
        <h2>
            <marquee>English Learning For Kids</marquee>
        </h2>
    </footer>
</body>

</html>