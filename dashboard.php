<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to your Dashboard</h1>
    <div class="container">
        <form action="create_trip.php" method="post">
            <h2>Create New Trip</h2>
            <input type="text" name="trip_name" placeholder="Trip Name" required>
            <button type="submit">Create Trip</button>
        </form>
        <a href="view_trips.php">View My Trips</a>
    </div>
</body>
</html>
