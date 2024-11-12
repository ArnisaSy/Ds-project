<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courses_bd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $test_name = $_POST['test_name'];
    $score = $_POST['score'];
    $level = $_POST['level'];

    $sql = "INSERT INTO test_results (user_id, test_name, score, level) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isis", $user_id, $test_name, $score, $level);

    if ($stmt->execute()) {
        echo "Test result saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
