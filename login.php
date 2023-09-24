<?php
// Include your database connection code here
// Database configuration
$host = "localhost";
    $username = "id21289058_lyall12";
    $password = "viChEADELARM.12#";
    $database = "id21289058_lyall"; // Replace with your database password

// Attempt to create a database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Retrieve user input
$username = $_POST['username'];
$usercode = $_POST['usercode'];

// Perform database query to check credentials
// Replace 'your_db_connection' with your actual database connection code

$sql = "SELECT * FROM users WHERE username = :username AND usercode = :usercode";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':usercode', $usercode);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    // Redirect to the main page if credentials are correct
    header("Location: admin");
    exit();
} else {
    // Display an error message if credentials are incorrect
    echo "Invalid username or usercode. Please try again.";
}
?>
