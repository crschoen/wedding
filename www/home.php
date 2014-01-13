<?php
date_default_timezone_set('America/Chicago');
try {
    
?>
<html>
    <head>
        <link rel="stylesheet" href="/resources/css/main.css" type="text/css">
        <link rel="shortcut icon" href="/img/favicon.ico?v=2">
        <script src="/resources/js/jquery.js"></script>
    </head>
    <body>
        <div id="content">
            <div class="navigation">
                <div id="topbreak"></div>
                <a href="/">Welcome</a><br>
                <a href="?location=about">About Us</a><br>
                <a href="?location=proposal">Our Proposal</a><br>
                <a href="?location=ceremony">Ceremony</a><br>
                <a href="?location=reception">Reception</a><br>
                <a href="?location=honeymoon">Honeymoon</a><br>
                <a href="?location=info">Guest Information</a><br>
                <a href="?location=map">Map of Events</a><br>
                <a href="?location=clearlake">Clear Lake</a><br>
                <a href="?location=houston">Downtown Houston</a><br>
                <div id="bottombreak"></div>
            </div>
            <div class="main">
              <?php
                if ($_GET['location']) {
                    include $_GET['location'] . '.php';
                } else {
              ?>
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
                <img src="/img/firstscroll600.png">
                <?php }; ?>
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