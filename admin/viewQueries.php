<?php

include '../functions.php';

// Ensure the admin is logged in
if (!isAdmin()) {
    $_SESSION['msg'] = "You must log in as an admin first";
    header('location: ../login.php');
    exit();
}

// Database connection
$conn = new mysqli('localhost', 'root', '', 'pet_adoption');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all queries from the database
$sql = "SELECT contactID, username, email, message, submittedDate, userID FROM contact_us ORDER BY contactID";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - View Queries</title>
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>User Queries</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>contact ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Submitted At</th>
                    <th>User ID</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['contactID']}</td>
                            <td>{$row['username']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['message']}</td>
                            <td>{$row['submittedDate']}</td>
                            <td>{$row['userID']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No queries found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="main.php" class="btn btn-primary">Back to Admin Panel</a>
    </div>
</body>
</html>
<?php
$conn->close();
?>
