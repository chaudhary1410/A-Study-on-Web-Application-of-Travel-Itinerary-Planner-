<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $trip_name = $_POST['trip_name'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO trips (user_id, trip_name) VALUES ('$user_id', '$trip_name')";

    if ($conn->query($sql) === TRUE) {
        header("Location: dashboard.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
