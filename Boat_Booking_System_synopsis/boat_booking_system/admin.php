<?php include 'db.php'; ?>

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
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM bookings");
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['boat_id']."</td>
                    <td>".$row['user_name']."</td>
                    <td>".$row['booking_date']."</td>
                  </tr>";
        }
        ?>
    </table>

    <a class="back-link" href="index.php">← Back to Home</a>

</body>
</html>
