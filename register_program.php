<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courses_bd";

// Create the database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $user_id = $_POST['user_id'];
    $program = $_POST['program'];
    $message = $_POST['message'];

    // Insert data into the `program_registrations` table using prepared statements
    $sql = "INSERT INTO program_registrations (user_id, program, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $user_id, $program, $message);

    if ($stmt->execute()) {
        echo "Program registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
