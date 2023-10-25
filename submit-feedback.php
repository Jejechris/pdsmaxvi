<?php
// Database connection parameters
$servername = "sql211.byethost18.com";
$username = "b18_35279406"; // Your MySQL username
$password = "Jesen3101"; // Your MySQL password
$dbname = "b18_35279406_pds"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$feedbackType = $_POST["feedback-type"];
$comments = $_POST["comments"];

// Prepare SQL query
$sql = "INSERT INTO feedback (name, email, feedback_type, comments) VALUES ('$name', '$email', '$feedbackType', '$comments')";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
