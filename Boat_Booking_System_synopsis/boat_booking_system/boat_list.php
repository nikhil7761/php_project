<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Available Boats</title>
    <link rel="stylesheet" href="boat_list.css">
</head>
<body>

    <h2>Available Boats</h2>

    <table>
        <tr>
            <th>Boat Name</th>
            <th>Type</th>
            <th>Price per Hour (₹)</th>
            <th>Book Now</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM boats");
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>".$row['name']."</td>
                    <td>".$row['type']."</td>
                    <td>".$row['price']."</td>
                    <td><a class='book-btn' href='booking.php?id=".$row['id']."'>Book</a></td>
                  </tr>";
        }
        ?>
    </table>

    <a class="back-link" href="index.php">← Back to Home</a>

</body>
</html>
