<?php
date_default_timezone_set('America/Chicago');
try {
    
?>
<html>
    <head>
        <link rel="stylesheet" href="/resources/css/main.css" type="text/css">
        <link rel="shortcut icon" href="/img/favicon.ico?v=2">
        <script src="jquery.js"></script>
    </head>
    <body>
<!--        <div class="header">
            <img class="scroll" src="/img/firstscroll600.jpg">
        </div>-->
        <div id="content">
            <div class="navigation">
                <img src="/img/topbreak.jpg">
                <a href="/">Welcome</a><br>
                <a href="/about">About Us</a>
                <img src="/img/bottombreak.jpg">
            </div>
            <div class="main">
                <div>
                    <div>
                        <h1>Rachel Slovacek</br> + </br>Christopher Schoen</h1>
                    </div>
                </div>
                <div class="clock">
                     <?php print floor((1403373600 - date('U')) / 86400); ?> days to go!
                </div>
                <div class="greeting">
                    Dear family and friends,
                        We are so excited to be tying the knot on Saturday,
                        June 21, 2014. We hope you will be able to share this
                        special day with us!
                </div>
                <img src="/img/firstscroll600.jpg">
            </div>
        </div>
        <script src="/resources/js/home.js"></script>
    </body>
</html>
<?php 
} catch (Exception $e) {
    print_r($e);
}
?>