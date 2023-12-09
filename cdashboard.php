<?php
session_start();
include("includes/connection.php");
$uname = $_SESSION['user'];
$query = "SELECT * FROM member WHERE username ='$uname'";
$res = mysqli_query($connect,$query);
$data = mysqli_fetch_array($res);
$id = $data[0];
$name = $data[1];
$nid = $data[3];
$dob = $data[4];
$email = $data[5];
$phone = $data[7];
$type = $data[8];

date_default_timezone_set('Asia/Dhaka');

$currentTime = date('H:i:s');

if ($currentTime >= '06:00:00' && $currentTime < '12:00:00') {
    $welcome = 'Good Morning!';
} elseif ($currentTime >= '12:00:00' && $currentTime < '18:00:00') {
    $welcome = 'Good Afternoon!';
} else {
    $welcome = 'Good Evening!';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #dd6d868e;
            color: #fff;
            padding: 15px;
            text-align: right;
        }

        .dashboard {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .info-panel {
            background-color: #f2f2f29b;
            border: 1px solid #dddddd9b;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            flex: 1;
            text-align: left;
        }

        h2 {
            color: #000000;
        }

        p {
            color: #000000;
        }

        .logout-btn {
            background-color: #f44336;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #d32f2f;
        }
        .btn {
            padding: 15px 30px;
            font-size: 20px;
            border: 2px solid transparent;
            /* Set border to transparent */
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
            margin: 10px;
            background-color: transparent;
            /* Set background color to transparent */
            color: #000;
            /* Button text color */
        }

        .btn-login {
            border-color: #5b3a9a;
            color: #5b3a9a;
            /* Set border color on normal state */
        }

        .btn-login:hover {
            background-color: #5b3a9a;
            /* Semi-transparent color on hover */
            border-color: #5b3a9a;
            /* Set border color on hover */
            color: #fff;
            /* Text color on hover */
        }

        .btn-register {
            border-color: #5b3a9a;
            color: #5b3a9a;
            /* Set border color on normal state */
        }

        .btn-register:hover {
            background-color: #5b3a9a;
            /* Semi-transparent color on hover */
            border-color: #5b3a9a;
            /* Set border color on hover */
            color: #fff;
            /* Text color on hover */
        }
        a {
            text-decoration: none;
        }
        .eventm {
            font-size: 40px;
            color: #ffffff;
            font-family: Brush Script MT;
        }
        .motto{
            font-size: 70px;
            color: #5b3a9a;
            font-family: Brush Script MT;
        }
        .top-bar {
            background-color: rgba(215, 152, 163, 0.7); /* Light pinkish color with 0.7% transparency */
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .user-info {
            text-align: right;
        }

        .user-info span {
            margin-right: 10px;
        }
        h2 {
            font-family: 'Times New Roman';
            color :#5b3a9a;
        }
    </style>
</head>

<body background = 'img\eventM.jpg'>
    <div class="top-bar">
    <div class =" eventm" align = 'left'> EventM </div>
    <div class="user-info">
            <span>Welcome</span>
            <span> <?php echo $name ?> </span>
            <a href = 'logout.php' class="logout-btn"> Logout </a>
        
    </div>
    </div>
    <h2 align = center> <div class ="motto" > <?php echo $welcome ?>! How can we help you today? </div> </h2>
    <div class="dashboard">
        <div class="info-panel">
            <h2>Looking for venues for your next event?</h2>
            <h2>Checkout our list of venues based on your location...</h2>
            <a href="venuebook.php" class="btn btn-login button2"> Book Your Venue</a>
        </div>

        <div class="info-panel">
            <h2> Take a look to the world class services we provide...</h2>
            <h2> Photography & Cinematography </h2>
            <br>
            <a href="photographyBook.php" class="btn btn-login button2">Book Your Team</a>
            <br>
            <br>
            <h2> Decorate your own venue </h2>
            <br>
            <a href="decorationBook.php" class="btn btn-login button2">Explore Decorations</a>
            <br>
            <br>
            <h2> Finding the best food in the best price? </h2>
            <br>
            <a href="foodBook.php" class="btn btn-login button2">Check Our Foods</a>
            <br>
            <br>
            <h2> Looking for transport? Check here... </h2>
            <br>
            <a href="carBook.php" class="btn btn-login button2"> Rent A Car</a>


        </div>

        <div class="info-panel">
            <h2> User Information </h2>
            <h2> Name: <?php echo $name ?> </h2>
            <h2> Email: <?php echo $email ?> </h2>
            <h2> Phone: <?php echo $phone ?></h2>
            <h2> Date of Birth: <?php echo $dob ?></h2>
            <br>
            <br>
            <h2>Want to change your information? Update here...</h2>
            <a href="settings.php" class="btn btn-login button2">Settings</a>
        </div>
    </div>
</body>

</html>
