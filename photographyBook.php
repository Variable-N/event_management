<?php
include("load_data.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Venue</title>
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
        .info-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
            gap: 20px;
            max-width: 1800px; /* Adjust the maximum width as needed */
            margin: 0 auto; /* Center the container */
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

<body>
<?php include("topbar.php");
    ?>
    </div>
    <h2 align = center> <div class ="motto" > Select Your Photographer & Cinematographer Team </div> </h2>
    <div class="dashboard">
        <div class="info-container">
            <?php
            // $venue_count = mysqli_fetch_assoc(mysqli_query($connect, "SELECT COUNT(venue_id) AS venue_count FROM venues;"))['venue_count'] ?? 0;
            //for ($i = 1; $i <= $venue_count; $i++) {
            //  echo '<div class="info-panel">';

            //}
            $query = "SELECT * FROM `photo_cinema`";
            $result = mysqli_query($connect, $query);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="info-panel">';
                    echo '<h1>' . $row['name'] . '</h1>';
                    echo '<h2>Services: <font color = "black"> ' . $row['Services'] . '</font></h2>';
                    echo '<b>Team Details:</b> ' . $row['Team Details'] . '<br>';
                    echo '<h3>Location: ' . $row['Location'] . '</h3>';
                    echo '<h3>Provides Cinematography: ' . $row['Cinematography'] . '</h3>';
                    echo '<h2>Price: ' . $row['Price'] . ' BDT </h2>';
                    echo '<h4>Contact No: ' . $row['contact'] . '<br>';
                    echo '<br><br><br><a href="photographyBook.php" class="btn btn-login button2">Book Now</a>';
                    echo '</div>';
                }

                mysqli_free_result($result); // Free the result set
            } else {
                echo "Error executing query: " . mysqli_error($connect);
            }
            ?>
            
        </div>
    </div>
</body>

</html>
