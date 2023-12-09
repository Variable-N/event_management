<?php
// Sample data (replace this with your database connection and query)

include("../load_data.php");
$output = "";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Update Member</title>
    <?php
// Sample data (replace this with your database connection and query)

include("admin_style.php");
?>
</head>

<body>
    <?php include("topbar.php");
    ?>
    </div>
    <br>
    <h1 align=center>
        <a href = "view_members.php"> <font class = 'btn btn-login' style='; font-family: "Times New Roman"'> All Members</font>  </a>
    </h1>
    <h1 align=center>
        <a href = "view_car_rent.php"> <font class = 'btn btn-login' style='; font-family: "Times New Roman"'> All Cars</font>  </a>
    </h1>
    <h1 align=center>
        <a href = "view_decorator.php"> <font class = 'btn btn-login' style='; font-family: "Times New Roman"'> All Decorators</font>  </a>
    </h1>
    <h1 align=center>
        <a href = "view_venues.php"> <font class = 'btn btn-login' style='; font-family: "Times New Roman"'> All Venues</font>  </a>
    </h1>
</body>

</html>