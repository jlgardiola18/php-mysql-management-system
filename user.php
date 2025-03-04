<?php
session_start();

if ($_SESSION['role'] == 'admin') {
    header("Location: dashboard.php");
    exit;
}

?>

<h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
<p>This is your user page.</p>
<a href="logout.php">Logout</a>
