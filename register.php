<?php
$succ = False;
include("includes/connection.php");

$output = "";

if (isset($_POST['register'])) {
    $nid = $_POST['nid'];
    $uname = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    $c_pass = $_POST['confirm_password'];
    $usertype = $_POST['usertype'];
    $error = array();

    if (empty($nid)) {
        $error['error'] = "NID is Empty";
    }
    if (empty($uname)) {
        $error['error'] = "username is empty";
    }
    if (empty($pass)) {
        $error['error'] = "Enter Password";
    }
    if (empty($c_pass)) {
        $error['error'] = "Confirm Password";
    }
    if ($pass != $c_pass) {
        $error['error'] = "Both password do not match";
    }



    if (isset($error['error'])) {
        $output .= $error['error'];
    } else {
        $output .= "";
    }

    if (count($error) < 1) {

        if ($usertype == 'C') {
            $id = rand(100000001, 199999999);
        } else {
            $id = rand(200000001, 299999999);
        }


        $query1 = "INSERT INTO member(id,name,username,nid,dob,email,password,contact,usertype) VALUES('$id', '$name','$uname','$nid','$dob','$email','$pass','$phone','$usertype');";
        if ($usertype == 'C') {
            $query2 = "INSERT INTO `customer` (`id`, `orders`, `order_count`) VALUES ('$id', 0, 0);";
        }
        else {
            $query2 = "INSERT INTO `owner` (`id`, `venue_id`, `total_income`) VALUES ('$id', 0, 0);";
        }
        if (mysqli_query($connect, $query1) && mysqli_query($connect, $query2)) {
            // echo "New record created successfully";
            $succ = True;
            header("Location:registration_successful.php");
        } else {
            echo "Error: " . $query1 . "<br>" . mysqli_error($connect);
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - EventM</title>
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
            padding-top: 0%;
            padding-bottom: 0%;
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
        <h1>Register to <div class=" eventm"> EventM </div>
        </h1>
        <?php echo '<h2> <font color = "red">' . $output . '</h2>' ?>

        <form method="POST">
            <div class="input-group">
                <label for="username">
                    <font color="#111166"><b>Username:</b></font>
                </label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="name">
                    <font color="#111166"><b>Full Name:</b></font>
                </label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">
                    <font color="#111166"><b>Email:</b></font>
                </label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="nid">
                    <font color="#111166"><b>NID No:</b></font>
                </label>
                <input type="number" id="nid" name="nid" required>
            </div>
            <div class="input-group">
                <label for="dob">
                    <font color="#111166"><b>Date of Birth:</b></font>
                </label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="input-group">
                <label for="phone">
                    <font color="#111166"><b>Phone:</b></font>
                </label>
                <input type="number" id="phone" name="phone" required>
            </div>
            <div class="input-group">
                <label for="password">
                    <font color="#111166"><b>Password:</b></font>
                </label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <label for="confirm_password">
                    <font color="#111166"><b>Confirm Password:</b></font>
                </label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="input-group">
                <label for="usertype">
                    <font color="#111166"><b>I am </b></font>
                </label>
                <select id="usertype" name=usertype class="custom-dropdown">
                    <option value="C">Customer</option>
                    <option value="O">Owner</option>
                </select>
            </div>
            <button type="submit" name=register class="btn btn-login">Register</button>
            <a href='get_started.html' class="btn btn-login">Go Back</a>

        </form>
    </div>
</body>

</html>