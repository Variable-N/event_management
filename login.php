<?php 
session_start();
include("includes/connection.php");
$output = "";
if (isset($_POST['login'])) {
  	   
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    if (empty($uname)) {
        $output = "Please enter your username";
    }else if(empty($pass)){
        $output = "Please enter your password";
    }else{

    $query = "SELECT * FROM member WHERE username ='$uname' AND password='$pass'";
    $res = mysqli_query($connect,$query);

    if (mysqli_num_rows($res) == 1) {
        $data = mysqli_fetch_array($res);
        $type = $data[8];
        if ($type == 'C') {
            $_SESSION['user'] = $uname;
            $_SESSION['type'] = $type;
            header("Location: cdashboard.php");
            
        } else if ($type == 'O'){
            $_SESSION['user'] = $uname;
            $_SESSION['type'] = $type;
            header("Location: odashboard.php");
        } else if ($type == 'A'){
            $_SESSION['user'] = $uname;
            $_SESSION['type'] = $type;
            header("Location: admin/adashboard.php");
        }
    }else{
        $output .= "Failed to login";
    }

    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - EventM</title>
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
            padding-top: 4%;
            padding-bottom: 4%;
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
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2); /* Transparent background */
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
    </style>
</head>

<body background="img\wp7488228.png">
    <div class="container">
        <h1>Login to <div class =" eventm" > EventM </div></h1>
        <?php echo '<h2> <font color = "red">' . $output . '</h2>';?>
        <form method="POST"> 
            <div class="input-group">
                <label for="username"><font color = "#111166"><b>Username:</b></font></label>
                <input type="text" id="username" name="username">
            </div>
            <div class="input-group">
                <label for="password"><font color = "#111166"><b>Password</b></font>:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit" name = login class="btn btn-login">Login</font></button>
            <a href = 'get_started.html' class="btn btn-login">Go Back</a>
                
        </form>
    </div>
</body>

</html>
