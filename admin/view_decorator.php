<?php
// Sample data (replace this with your database connection and query)

include("../load_data.php");
$output = "";
// Check if the form is submitted for updating or deleting the record
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
$newOwner = $_POST['new_owner'];
$newName = $_POST['new_name'];
$newServices = $_POST['new_services'];
$newTeamDetails = $_POST['new_team_details'];
$newLocation = $_POST['new_location'];
$newCoverage = $_POST['new_coverage'];
$newContact = $_POST['new_contact'];
$newPrice = $_POST['new_price'];


        // Update the record in the database
        $updateQuery = "UPDATE decorator SET 
                owner='$newOwner', 
                name='$newName', 
                services='$newServices', 
                team_details='$newTeamDetails', 
                location='$newLocation', 
                coverage='$newCoverage', 
                contact='$newContact', 
                price='$newPrice' 
                WHERE id='$id'";

        $updateResult = mysqli_query($connect, $updateQuery);

        if ($updateResult) {
            $output =  "Record updated successfully!";
        } else {
            $output =  "Error updating record: " . mysqli_error($connect);
        }
    } elseif (isset($_POST['delete'])) {
        // Display a confirmation dialog before proceeding with the deletion
    
        $id = $_POST['id'];

        // Delete the record from the database
        $deleteQuery = "DELETE FROM decorator WHERE id='$id'";
        $deleteResult = mysqli_query($connect, $deleteQuery);

        if ($deleteResult) {
            $output =  "Record deleted successfully!";
        } else {
            $output =  "Error deleting record: " . mysqli_error($connect);
        }
    }
}

$query = "SELECT * FROM `decorator`";
$result = mysqli_query($connect, $query);

if (!$result) {
    die("Error executing query: " . mysqli_error($connect));
}
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
        <font style='color: #2200AA ; font-family: "Times New Roman"'> All Decorators      .     <a class="btn btn-login" href = "adashboard.php">Dashboard </a></font> 
    </h1>
    <h2 align=center>
        <font style='color: #00AA00 ; font-family: "Times New Roman"'> <?php echo $output ?></font> 
    </h2>
    <br>
    <br>
    <div class="dashboard">
    <div class="info-panel">
    <table id='customers' border="2">
    <tr>
        <th>ID</th>
        <th>Owner</th>
        <th>Name</th>
        <th>Services</th>
        <th>Team Details</th>
        <th>Location</th>
        <th>Coverage</th>
        <th>Contact</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="hidden" name="edit" value="1">
                    <input type="text" id="new_owner" name="new_owner" value="<?= $row['owner']; ?>" required>
            </td>
            <td>
                <input type="text" id="new_name" name="new_name" value="<?= $row['name']; ?>" required>
            </td>
            <td>
                <input type="text" id="new_services" name="new_services" value="<?= $row['services']; ?>" required>
            </td>
            <td>
                <input type="text" id="new_team_details" name="new_team_details" value="<?= $row['team_details']; ?>"
                    required>
            </td>
            <td>
                <input type="text" id="new_location" name="new_location" value="<?= $row['location']; ?>" required>
            </td>
            <td>
                <input type="text" id="new_coverage" name="new_coverage" value="<?= $row['coverage']; ?>" required>
            </td>
            <td>
                <input type="text" id="new_contact" name="new_contact" value="<?= $row['contact']; ?>" required>
            </td>
            <td>
                <input type="text" id="new_price" name="new_price" value="<?= $row['price']; ?>" required>
            </td>
            <td>
                <button type="submit" class="btn-login" onclick="return confirmUpdate()">Update</button>
                </form>

                <!-- Add a delete button with a confirmation dialog -->
                <form id="deleteForm_<?= $row['id'] ?>" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="hidden" name="delete" value="1">
                    <button type="button" class='btn-delete' onclick="confirmDelete(<?= $row['id'] ?>)">Delete</button>
                </form>
            </td>
        </tr>
    <?php endwhile; ?>

</table>



        <script>
            function confirmUpdate() {
                return confirm("Are you sure you want to update this record?");
            }
            function confirmDelete(id) {
                    var confirmDelete = confirm("Are you sure you want to delete this record?");
                    if (confirmDelete) {
                        document.getElementById("deleteForm_" + id).submit();
                    }
                }
            
        </script>

        <?php
        mysqli_free_result($result);
        mysqli_close($connect);
        ?>
    </div>
</body>

</html>