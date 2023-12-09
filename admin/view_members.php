<?php
// Sample data (replace this with your database connection and query)

include("../load_data.php");
$output = "";
// Check if the form is submitted for updating or deleting the record
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $newName = $_POST['new_name'];
        $newUsername = $_POST['new_username'];
        $newNID = $_POST['new_nid'];
        $newDOB = $_POST['new_dob'];
        $newEmail = $_POST['new_email'];
        $newPassword = $_POST['new_password'];
        $newContact = $_POST['new_contact'];
        $newUserType = $_POST['new_usertype'];

        // Update the record in the database
        $updateQuery = "UPDATE member SET 
                        name='$newName', 
                        username='$newUsername', 
                        nid='$newNID', 
                        dob='$newDOB', 
                        email='$newEmail', 
                        password='$newPassword', 
                        contact='$newContact', 
                        usertype='$newUserType' 
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
        $deleteQuery = "DELETE FROM member WHERE id='$id'";
        $deleteResult = mysqli_query($connect, $deleteQuery);

        if ($deleteResult) {
            $output =  "Record deleted successfully!";
        } else {
            $output =  "Error deleting record: " . mysqli_error($connect);
        }
    }
}

$query = "SELECT * FROM member";
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
        <font style='color: #2200AA ; font-family: "Times New Roman"'> All Members      .     <a class="btn btn-login" href = "adashboard.php">Dashboard </a></font> 
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
                <th>Name</th>
                <th>Username</th>
                <th>NID</th>
                <th>DOB</th>
                <th>Email</th>
                <th>Password</th>
                <th>Contact</th>
                <th>User Type</th>
                <th>Action</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td>
                        <?= $row['id'] ?>
                    </td>
                    <td>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <input type="hidden" name="edit" value="1">
                            <input type="text" id="new_name" name="new_name" value="<?= $row['name']; ?>" required>
                    </td>
                    <td>
                        <!-- Add input fields for other columns -->
                        <input type="text" id="new_username" name="new_username" value="<?= $row['username']; ?>" required>
                    </td>
                    <td>
                        <input type="text" id="new_nid" name="new_nid" value="<?= $row['nid']; ?>" required>
                    </td>
                    <td>
                        <input type="date" id="new_dob" name="new_dob" value="<?= $row['dob']; ?>" required>
                    </td>
                    <td>
                        <input type="email" id="new_email" name="new_email" value="<?= $row['email']; ?>" required>
                    </td>
                    <td>
                        <input type="password" id="new_password" name="new_password" value="<?= $row['password']; ?>"
                            required>
                    </td>
                    <td>
                        <input type="text" id="new_contact" name="new_contact" value="<?= $row['contact']; ?>" required>
                    </td>
                    <td>
                        <input type="text" id="new_usertype" name="new_usertype" value="<?= $row['usertype']; ?>" required>
                    </td>
                    <td>
                        <button type="submit" class="btn-login" onclick="return confirmUpdate()">Update</button>
                        </form>

                        <!-- Add a delete button with a confirmation dialog -->
                        <form id="deleteForm_<?= $row['id'] ?>" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <input type="hidden" name="delete" value="1">
                            <button type="button" class='btn-delete'
                                onclick="confirmDelete(<?= $row['id'] ?>)">Delete</button>
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