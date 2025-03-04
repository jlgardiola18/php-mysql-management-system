<?php
$host = 'sql12.freesqldatabase.com';  // Update this if using a remote database
$db = 'sql12765164';
$user = 'sql12765164';
$pass = '6YhCRCwI6t'; // Update with your password if necessary

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}
?>
