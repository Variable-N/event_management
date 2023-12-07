<?php
session_start();
include("includes/connection.php");
$uname = $_SESSION['user'];
$query = "SELECT * FROM member WHERE username ='$uname'";
$res = mysqli_query($connect, $query);
$data = mysqli_fetch_array($res);
$id = $data[0];
$name = $data[1];
$nid = $data[3];
$dob = $data[4];
$email = $data[5];
$pass = $data[6];
$phone = $data[7];
$type = $data[8];
$output = "";

if (isset($_POST['submit'])) {
    $cpass = $_POST['pass'];
    $email = $_POST['email'];
    $nid = $_POST['nid'];

    $query = "SELECT * FROM member WHERE username ='$uname' AND Password='$cpass' AND Email ='$email' AND nid = '$nid';";
    $res = mysqli_query($connect, $query);
    if (mysqli_num_rows($res) == 1) {
        $sql1 = "DELETE FROM member WHERE username ='$uname';";
        if ($type = "C") {
            $sql2 = "DELETE FROM customer WHERE id ='$id';";
        } else {
            $sql2 = "DELETE FROM owner WHERE id ='$id';";
        }
        if (mysqli_query($connect, $sql1) && mysqli_query($connect, $sql2)) {
            header("Location: delete_successful.php");
        } else {
            $output = "An error occured";
        }

    } else {
        $output = "Wrong Credentials. Try again";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>** Delete Your Account **</title>
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
            color: #dd6d86;
            font-family: Brush Script MT;
        }

        .motto {
            font-size: 70px;
            color: #5b3a9a;
            font-family: Brush Script MT;
        }

        .top-bar {
            background-color: rgba(215, 152, 163, 0.7);
            /* Light pinkish color with 0.7% transparency */
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
            color: #5b3a9a;
        }

        .btn-delete {
            border-color: #FF0000;
        }

        .btn-delete:hover {
            background-color: rgba(255, 0, 0, 1);
            border-color: #FF0000;
            color: #fff;
        }

        .input-group {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            /* Transparent background */
            color: #000;
        }
    </style>
</head>

<body background='img\eventM.jpg'>
    <div class="container">
        <div class=" eventm"> EventM </div>
        <h2>
            <font color=red>Are you sure? All of your information will be removed</font>
        </h2>
        <br>
        <?php echo '<h2> <font color = "red">' . $output . '</h2>' ?>
        <form method="POST">
            <div class="input-group">
                <label for="username">
                    <font color="#111166"><b>Enter your current password:</b></font>
                </label>
                <input type="password" id="username" name="pass" required>
            </div>
            <div class="input-group">
                <label for="username">
                    <font color="#111166"><b>Enter your email:</b></font>
                </label>
                <input type="text" id="username" name="email" required>
            </div>
            <div class="input-group">
                <label for="username">
                    <font color="#111166"><b>Enter your NID:</b></font>
                </label>
                <input type="text" id="username" name="nid" required>
            </div>

            <button type="submit" name=submit class="btn btn-delete">
                Delete My Account
            </button>
            <?php
        if ($_SESSION['type'] == 'C') { ?>
            <a href="cdashboard.php" class="btn btn-login">No, I changed my mind</font></a>
        <?php } else { ?>
            <a href="odashboard.php" class="btn btn-login">No, I changed my mind</font></a>
            <?php
        } ?>
            </a>
        </form>
        <br>
    </div>
</body>

</html>