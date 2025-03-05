<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    echo "Please log in to make a booking.";
    exit();
}

if (isset($_GET['id'])) {
    $boat_id = $_GET['id'];
    $user_name = $_SESSION['username'];  // ✅ Logged-in user's name
    $booking_date = date("Y-m-d");

    $query = "INSERT INTO bookings (boat_id, user_name, booking_date) VALUES ('$boat_id', '$user_name', '$booking_date')";
    
    if (mysqli_query($conn, $query)) {
        echo "Booking successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
