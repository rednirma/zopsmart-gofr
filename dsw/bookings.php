<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking | Monarch</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content="" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:url" content="" />
        <meta name="twitter:card" content="" />
        <link rel="shortcut icon" href="favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/new.css">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="css/icomoon.css">
        <!-- Simple Line Icons -->
        <link rel="stylesheet" href="css/simple-line-icons.css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <!-- Magnific popup  -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="css/style(2).css" rel="stylesheet" type="text/css" media="all" />

        <!-- Modernizr JS -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        <link rel="stylesheet" href="new.css"/>
        <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- YTPlayer -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Parallax -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Magnific Popup -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    <!-- Main JS (Do not remove) -->
    <script src="js/main.js"></script>
</head>
<body>
    <section id="home" class="video-hero" style="height: 1500px; background-image: url(images/cover_bg_3.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="qbootstrap-overlay"></div>
        <div class="display-t text-center">
            <div class="display-tc">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="animate-box svg-sm colored">
                            <img src="images/flaticon/svg/004-nature.svg" class="svg" alt="">
                            <h1 class="holder" style="color:gray; font-family: 'Clicker Script', cursive; font-size: 50px;"><span>BOOKING</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main" style="height: 350px;">
        <div id="wrapper" class="wrapper_w3layouts">
            <form action="next.php" class="testform" id="testform" method="post" autocomplete="OFF">
                <fieldset class="personal-data w3_agileits_field">
                    <span class="w3l_personal">
                        <label class="agileits_label">name: <i class="required"></i></label>
                        <input type="text" id="name" name="uname" placeholder="Enter your name" required="" />
                    </span>

                    <span class="w3ls_personal">
                        <label class="agileits_label">number: <i class="required"></i></label>
                        <input type="number" name="psw" id="number" placeholder="Your contact number" required="" />
                    </span>

                    <span class="w3l_personal">
                    <label class="agileits_label">Pick a suite type:</label><br>
                                <select name="suite_ny">
                                    <option value="def">-Pick a Type-</option>
                                    <option value="pat_ny">Terrace Suite ($500)</option>
                                    <option value="king_ny">Mughal suite ($800)</option>
                                    <option value="buis_ny">Maharaja Suite ($1100)</option>
                                    <option value="pres_ny">Presidential Suite ($2000)</option>
                                </select>
                    </span>
                            <span class="w3l_personal">
                                <label class="agileits_label"><b>Pick a Check-In Date:</b></label><br/>
                                <input  type="date" id="datepicker" min="2017-11-15" name="check_in_date" maxlength="15" placeholder= "yyyy-mm-dd" size="20" class="agileits_label" /><br/>
                            </span>

                            <span class="w3l_personal">
                                <label class="agileits_label"><b>Pick a Check-Out Date:</b></label><br/>
                                <input type="date" id="datepicker1" min="2017-11-16" name="check_out_date" maxlength="15" placeholder= "yyyy-mm-dd"  size="20" class="agileits_label"/><br/>
                            </span>

                            <span class="w3l_personal">
                                <label class="agileits_label"><b>Rooms:</b></label><br/>
                                <select name="no_rooms">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select><br/>
                            </span>
         
                    <span class "w31s_personal">
                        <button name="next"> Next </button>
                    </span>
                   
                </fieldset>

                <div class="clear"></div>
            </form>
                <div class="agileits_copyright" style="margin-top: 10px">
                    <p>© 2017 All rights reserved | Design by <a href="delhi.php">The Monarch</a></p>
                </div>
        </div>
        
    </div>
    </section>
</body>
</html>