<?php 
session_start();


if (isset($_SESSION['user'])) {
	unset($_SESSION['user']);

}



 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Sucessful - EventM</title>
    <style>
        body {
            font-family: Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-image: "carbglow.png";
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.7);
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 5%;
            padding-bottom: 5%;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin-bottom: 20px;
            color: #3333AA;
        }

        .input-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        input[type="password"] {
            width: 100%;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;
            margin-left: -10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            /* Transparent background */
            color: #000;
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
            border-color: #707da4;
            /* Set border color on normal state */
        }

        .btn-login:hover {
            background-color: rgba(0, 140, 186, 1);
            /* Semi-transparent color on hover */
            border-color: #707da4;
            /* Set border color on hover */
            color: #fff;
            /* Text color on hover */
        }

        a {
            text-decoration: none;
        }

        .eventm {
            font-size: 40px;
            color: #dd6d86;
            font-family: Brush Script MT;
        }

        .custom-dropdown {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ddd;
            border-radius: 5px;
            outline: none;
            background-color: #fff;
            /* Background color when not focused */
        }

        .custom-dropdown:hover,
        .custom-dropdown:focus {
            border-color: #007BFF;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Box shadow on hover/focus */
        }
    </style>
</head>

<body background="img\wp7488228.png">
    <div class="container">
        <h1>Account Deletion Sucessful! <br><br> <br>  We will miss you. - <div class=" eventm"> EventM </div>
        </h1>

        <a href="get_started.html" class="btn btn-login button2">Home</a>

    </div>
</body>

</html>