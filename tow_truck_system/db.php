 <?php
$host = "localhost";
$username = "tow_user";
 $password = "YOUR_NEW_PASSWORD";
$port = 3306;
$database = "tow_truck_db";
$port = 3306;

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database,
    $port
);

if ($conn->connect_error) {
    die("Database connection failed.");
}

$conn->set_charset("utf8mb4");
?>