<?php 
// Include database connection or functions file
include '../functions.php';

// Ensure the user is logged in
if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../login.php');
    exit;
}

$conn = new mysqli('localhost', 'root', '', 'pet_adoption');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted via POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize the input data to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $submittedDate = date('Y-m-d H:i:s'); // Using current date and time
    $userID = $_SESSION['user']['userID']; // Assuming user ID is stored in session

    // Check if all fields are filled
    if (empty($username) || empty($email) || empty($message)) {
        $_SESSION['msg'] = "Please fill in all fields.";
        header('location: ../contactUs.php');
        exit;
    }

    // Prepare the SQL query to insert the query into the database
    $query = "INSERT INTO contact_us (username, email, message, submittedDate, userID) 
              VALUES ('$username', '$email', '$message', '$submittedDate', '$userID')";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        // If the query is successful, redirect back to the contact page with a success message
        $_SESSION['msg'] = "Your query has been submitted successfully!";
        header('location: ../contactUs.php');
    } else {
        // If there is an error, show the error message
        $_SESSION['msg'] = "Error: " . mysqli_error($conn);
        header('location: ../contactUs.php');
    }
} else {
    // If the form was not submitted via POST method
    $_SESSION['msg'] = "Invalid request.";
    header('location: ../contactUs.php');
}
exit;
?>
