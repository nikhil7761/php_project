<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
echo "Welcome, " . $_SESSION['username'] . "!";
echo "<br><a href='boat_list.php'>Book a Boat</a>";
echo "<br><a href='logout.php'>Logout</a>";
?>
