<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $trip_id = $_POST['trip_id'];
    $flight_number = $_POST['flight_number'];
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $departure_time = $_POST['departure_time'];
    $arrival_time = $_POST['arrival_time'];

    $sql = "INSERT INTO flights (trip_id, flight_number, departure, arrival, departure_time, arrival_time) 
            VALUES ('$trip_id', '$flight_number', '$departure', '$arrival', '$departure_time', '$arrival_time')";

    if ($conn->query($sql) === TRUE) {
        header("Location: manage_trip.php?trip_id=$trip_id");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
