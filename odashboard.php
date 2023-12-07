<?php
include("load_data.php");
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

<body background = 'img\eventM.jpg  '>
    <div class="top-bar">
    <div class =" eventm" align = 'left'> EventM </div>
    <div class="user-info">
            <span>Welcome</span>
            <span> <?php echo $name ?></span>
            <a href = 'logout.php' class="logout-btn"> Logout </a>
        
    </div>
    </div>
    <h2 align = center> <div class ="motto" > Good Morning! How can we help you today? </div> </h2>
    <div class="dashboard">
        <div class="info-panel">
            <h2>Your currently active venues:</h2>
            <h2>Your Income: </h2>
            <h2>Add a new venue</h2>
            <br>
            <a href="venuebook.php" class="btn btn-login button2"> Add Venue</a>
            <br>
            <br>
            <h2> View & Approve Orders </h2>
            <br>
            
            <a href="venuebook.php" class="btn btn-login button2"> Orders</a>
        </div>

        <div class="info-panel">
            <h2> Add services you provides</h2>
            <h2> Photography & Cinematography </h2>
            <br>
            <a href="photographyBook.php" class="btn btn-login button2">Add a Team</a>
            <br>
            <br>
            <h2> Decorators </h2>
            <br>
            <a href="decorationBook.php" class="btn btn-login button2">Add Decorations</a>
            <br>
            <br>
            <h2> Food Items </h2>
            <br>
            <a href="foodBook.php" class="btn btn-login button2">Add a new food item</a>
            <br>
            <br>
            <h2> Your Vehicles </h2>
            <br>
            <a href="carBook.php" class="btn btn-login button2"> Add New Vehicles</a>


        </div>

        <div class="info-panel">
            <h2> User Information </h2>
            <h2> Name: Full Name </h2>
            <h2> Email:Email </h2>
            <h2> Phone: 0123456789 </h2>
            
            <br>
            <br>
            <h2>Want to change your information? Update here...</h2>
            <a href="settings.php" class="btn btn-login button2">Settings</a>
        </div>
    </div>
</body>

</html>
