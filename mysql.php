<?php
$servername = "127.0.0.1";  // or 'localhost'
$username = "azure";
$password = "6#vWHD_$";
$dbname = "localdb";
$port = 49839; // replace with your actual port if different

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

echo "✅ MySQL connection successful!";
$conn->close();
?>
