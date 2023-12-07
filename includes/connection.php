<?php

$connect = mysqli_connect("localhost","root","","event_management");
if(!$connect){
    die(mysqli_error($con));
}
?>