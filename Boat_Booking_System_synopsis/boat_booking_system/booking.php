<?php
include 'db.php';


if (isset($_GET['id'])) {
    $boat_id = $_GET['id'];
    $user_name = "Demo User";  // For simplicity, static user
    $booking_date = date("Y-m-d");

    $query = "INSERT INTO bookings (boat_id, user_name, booking_date) VALUES ('$boat_id', '$user_name', '$booking_date')";
    
    if (mysqli_query($conn, $query)) {
        echo "Booking successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
