<?php
/*$config = parse_ini_file(__DIR__ ."../config.ini",true);

$host = $config["database"]["host"];
$database = $config["database"]["database"];
$dsn = "mysql:host=$host;dbname=$database";
$username = $config["database"]["username"];
$password = $config["database"]["password"];*/

$host = "127.0.0.1"; // localhost
$database = "nails_by_dion";
$dsn = "mysql:host=$host;dbname=$database";
$username = "root";
$password = "";

// mysql port = 3306

// MySqli
$conn = new mysqli($host, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
/*   // PDO
try {
    $pdo = new PDO($dsn, $username, $password); 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<script>console.log('Connected successfully')</script>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
*/
