<?php
include("load_data.php");
$succ = False;
$output = "";
if (isset($_POST['register'])) {
    $venue_id = rand(111111111, 999999999);
    $owner = $uname;
    $venue_name = $_POST['venue_name'];
    $Size = $_POST['Size'];
    $Capacity = $_POST['Capacity'];
    $Location = $_POST['Location'];
    $Description = $_POST['Description'];
    $contact = $_POST['contact'];
    $Price = $_POST['Price'];
    $v_review_id = $venue_id;
    $income = 0;
    $rating = 0;
    $review = '';
    $sql = "INSERT INTO `venues` (`venue_id`, `owner`, `name`, `size`, `capacity`, `location`, `description`, `contact`, `price`, `v_review_id`, `income`, `Rating`, `review`) VALUES ('$venue_id', '$owner', '$venue_name', '$Size', '$Capacity', '$Location', '$Description', '$contact', '$Price', '$v_review_id', '$income', '$rating', '$review')";
    if (mysqli_query($connect, $sql)) {
        $succ = True;
        $output = '<br><font color = "green"> Successfully Added <font>';
    }
    else{
        $succ = False;
        $output = mysqli_error($connect);
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Your Venue</title>
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

        .dashboard {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .info-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
            gap: 20px;
            max-width: 1800px;
            /* Adjust the maximum width as needed */
            margin: 0 auto;
            /* Center the container */
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
    </style>
</head>

<body>
    <?php include("topbar.php");
    ?>
    </div>
    <h1 align=center>
        <font style='color: #2200AA ; font-family: "Times New Roman"'> Add a new venue</font>
        <font style='color: #FF0000 ; font-family: "Times New Roman"'> <?php echo $output; ?></font>
    </h1>

    <div class="dashboard">
        <div class="info-panel">
            <form method="POST">
                <div class="input-group">
                    <label for="venue_name">
                        <font color="#111166"><b>Venue Name:</b></font>
                    </label>
                    <input type="text" id="venue_name" name="venue_name" required>
                </div>
                <div class="input-group">
                    <label for="Size">
                        <font color="#111166"><b>Size(in square feet):</b></font>
                    </label>
                    <input type="text" id="Size" name="Size" required>
                </div>
                <div class="input-group">
                    <label for="Capacity">
                        <font color="#111166"><b>People Capacity:</b></font>
                    </label>
                    <input type="text" id="Capacity" name="Capacity" required>
                </div>
                <div class="input-group">
                    <label for="Location">
                        <font color="#111166"><b>Location:</b></font>
                    </label>
                    <input type="text" id="Location" name="Location" required>
                </div>
                <div class="input-group">
                    <label for="Description">
                        <font color="#111166"><b>Description:</b></font>
                    </label>
                    <input type="text" id="Description" name="Description" required>
                </div>

        </div>

        <div class="info-panel">
            <div class="input-group">
                <label for="phone">
                    <font color="#111166"><b>Phone:</b></font>
                </label>
                <input type="number" id="phone" name="contact" required>
            </div>
            <div class="input-group">
                <label for="Price">
                    <font color="#111166"><b>Price (Per Event):</b></font>
                </label>
                <input type="text" id="Price" name="Price" required>
            </div>

            <button type="submit" name=register class="btn btn-login">Add </button>
            <a href='odashboard.php' class="btn btn-login">Go Back</a>

            </form>
        </div>
</body>

</html>