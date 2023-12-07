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