<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    echo "You don't have permission to access this page.";
    exit;
}
?>

<h1>Admin Dashboard</h1>
<a href="user.php">Manage Users</a>
<a href="logout.php">Logout</a>
