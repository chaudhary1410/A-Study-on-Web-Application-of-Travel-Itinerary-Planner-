<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM trips WHERE user_id = '$user_id'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Trips</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>My Trips</h1>
    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='trip'>";
                echo "<h2>" . $row['trip_name'] . "</h2>";
                echo "<a href='manage_trip.php?trip_id=" . $row['id'] . "'>Manage Trip</a>";
                echo "</div>";
            }
        } else {
            echo "<p>No trips found. <a href='dashboard.php'>Create a new trip</a></p>";
        }
        ?>
    </div>
</body>
</html>
