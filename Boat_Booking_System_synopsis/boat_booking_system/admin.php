<?php
include 'db.php';

// Handle deletion
if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $delete_query = "DELETE FROM bookings WHERE id = $delete_id";
    if (mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Booking deleted successfully'); window.location.href='admin.php';</script>";
    } else {
        echo "<script>alert('Error deleting booking');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

    <h2>All Bookings</h2>

    <table>
        <tr>
            <th>Booking ID</th>
            <th>Boat ID</th>
            <th>User Name</th>
            <th>Booking Date</th>
            <th>Action</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM bookings");
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['boat_id']."</td>
                    <td>".$row['user_name']."</td>
                    <td>".$row['booking_date']."</td>
                    <td><a class='delete-btn' href='admin.php?delete=".$row['id']."' onclick=\"return confirm('Are you sure you want to delete this booking?');\">Delete</a></td>
                  </tr>";
        }
        ?>
    </table>

    <a class="back-link" href="index.php">← Back to Home</a>

</body>
</html>