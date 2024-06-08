<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $trip_id = $_POST['trip_id'];
    $activity_name = $_POST['activity_name'];
    $activity_date = $_POST['activity_date'];

    $sql = "INSERT INTO activities (trip_id, activity_name, activity_date) 
            VALUES ('$trip_id', '$activity_name', '$activity_date')";

    if ($conn->query($sql) === TRUE) {
        header("Location: manage_trip.php?trip_id=$trip_id");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
