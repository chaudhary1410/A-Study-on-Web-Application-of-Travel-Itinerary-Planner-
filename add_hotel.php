<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $trip_id = $_POST['trip_id'];
    $hotel_name = $_POST['hotel_name'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];

    $sql = "INSERT INTO hotels (trip_id, hotel_name, check_in, check_out) 
            VALUES ('$trip_id', '$hotel_name', '$check_in', '$check_out')";

    if ($conn->query($sql) === TRUE) {
        header("Location: manage_trip.php?trip_id=$trip_id");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
