 <?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking Status | Monarch</title>
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
    
    <!-- Main JS (Do not remove) -->
    <script src="js/main.js"></script>
</head>
<body>
<section id="home" class="video-hero" style="height: 1300px; background-image: url(images/cover_bg_3.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
    <div class="qbootstrap-overlay"></div>
        <div class="display-t text-center">
            <div class="display-tc">
                <div class="container">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="animate-box svg-sm colored">
                            <img src="images/flaticon/svg/004-nature.svg" class="svg" alt="">
                            <h1 class="holder" style="color:gray; font-family: 'Clicker Script', cursive; font-size: 50px;"><span>BOOKING STATUS</span></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="main" style="height: 350px;">
        <div id="wrapper" class="wrapper_w3layouts">
<form action="delhi.php" method="post">
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="the_monarch"; // Database name

$conn=mysqli_connect("$host", "$username", "$password", "$db_name")or die("cannot connect");
$tbl_name = mysqli_query($conn, "CREATE TABLE details(name varchar(30) NOT NULL, number BIGINT NOT NULL PRIMARY KEY, check_in_time DATE, check_out_time DATE, no_rooms INT)");

if(!empty($_SESSION['uname']) or !empty($_POST['uname']))
$sql = mysqli_query($conn, "INSERT INTO details VALUES('$_POST[uname]','$_POST[psw]','$_POST[check_in_date]','$_POST[check_out_date]','$_POST[no_rooms]')");

if (isset($_POST['uname']))
{
	$name = htmlspecialchars($_POST['uname']);
        $number = htmlspecialchars($_POST['psw']);
        $check_in_date = htmlspecialchars($_POST['check_in_date']);
        $check_out_date = htmlspecialchars($_POST['check_out_date']);
        $no_rooms = htmlspecialchars($_POST['no_rooms']);
	// show the $name
	echo "Thanks $name for choosing your stay with us!<br>";
echo "Following are the details of your booking: <br>";
echo "Name: $name <br>";
echo "Contact: $number <br>";
echo "Check in Date: $check_in_date <br>";
echo "Check out Date: $check_out_date <br>";
echo "No of Rooms: $no_rooms <br>";
}
else
{
echo "It is not booked! <br> Please click the button below to return to the home page!<br>";
}
mysqli_close($conn);
?>
<button> Return to Home page </button>
</form> 
<div class="agileits_copyright" style="margin-top: 10px">
                    <p>© 2017 All rights reserved | Design by <a href="delhi.php">The Monarch</a></p>
                </div>
        </div>
    </div>
    </section>
</body>
</html>
