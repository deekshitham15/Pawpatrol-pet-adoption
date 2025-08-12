<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'pet_adoption');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $userID = (int)$_SESSION['user_id']; // Assuming you pass userID from a session or input
    $animalID = isset($_POST['animalID']) ? (int)$_POST['animalID'] : NULL;
    $comments = mysqli_real_escape_string($db, $_POST['comments']);
    $rating = (int)$_POST['rating'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $db->prepare("INSERT INTO feedback (userID, animalID, comments, rating) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("iisi", $userID, $animalID, $comments, $rating);

    // Execute the query
    if ($stmt->execute()) {
        echo "Feedback submitted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
    header('location: main.php');
}

// Close the database connection
$db->close();
?>
