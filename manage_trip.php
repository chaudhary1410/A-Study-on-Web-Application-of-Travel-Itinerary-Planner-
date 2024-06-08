<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}

$trip_id = $_GET['trip_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Trip</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Manage Trip</h1>
    <div class="container">
        <form action="add_flight.php" method="post">
            <h2>Add Flight</h2>
            <input type="hidden" name="trip_id" value="<?php echo $trip_id; ?>">
            <input type="text" name="flight_number" placeholder="Flight Number" required>
            <input type="text" name="departure" placeholder="Departure" required>
            <input type="text" name="arrival" placeholder="Arrival" required>
            <input type="datetime-local" name="departure_time" required>
            <input type="datetime-local" name="arrival_time" required>
            <button type="submit">Add Flight</button>
        </form>

        <form action="add_hotel.php" method="post">
            <h2>Add Hotel</h2>
            <input type="hidden" name="trip_id" value="<?php echo $trip_id; ?>">
            <input type="text" name="hotel_name" placeholder="Hotel Name" required>
            <input type="datetime-local" name="check_in" required>
            <input type="datetime-local" name="check_out" required>
            <button type="submit">Add Hotel</button>
        </form>

        <form action="add_activity.php" method="post">
            <h2>Add Activity</h2>
            <input type="hidden" name="trip_id" value="<?php echo $trip_id; ?>">
            <input type="text" name="activity_name" placeholder="Activity Name" required>
            <input type="datetime-local" name="activity_date" required>
            <button type="submit">Add Activity</button>
        </form>
    </div>
</body>
</html>
