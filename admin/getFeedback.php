<?php
$db = mysqli_connect('localhost', 'root', '', 'pet_adoption');
$animalID = isset($_GET['animalID']) ? (int)$_GET['animalID'] : 0;

$sql = "SELECT feedbackID, userID, comments, rating, submitted_at FROM feedback WHERE animalID = ?";
$stmt = $db->prepare($sql);
$stmt->bind_param("i", $animalID);

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Feedback ID: " . $row['feedbackID'] . "<br>";
        echo "User ID: " . $row['userID'] . "<br>";
        echo "Comments: " . $row['comments'] . "<br>";
        echo "Rating: " . $row['rating'] . "<br>";
        echo "Submitted at: " . $row['submitted_at'] . "<br><br>";
    }
} else {
    echo "No feedback found.";
}

$stmt->close();
$db->close();
?>
