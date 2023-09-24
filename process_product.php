<?php
// Add this code at the beginning of your process_product.php script to create the "uploads" directory if it doesn't exist.
$upload_dir = "uploads/";

if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0755, true); // Creates the "uploads" directory with appropriate permissions.
}

// Database connection parameters
$servername = "localhost";
    $username = "id21289058_lyall12";
    $password = "viChEADELARM.12#";
    $dbname = "id21289058_lyall";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

// Get form data
$product_name = $_POST['product_name'];
$size = $_POST['size'];
$color = $_POST['color'];
$price = $_POST['price'];
$company = $_POST['company'];

// File uploads
$image1 = $_FILES['image1']['name'];
// $image2 = $_FILES['image2']['name'];
// $image3 = $_FILES['image3']['name'];

// Move uploaded files to a directory
$upload_dir = "uploads/";
move_uploaded_file($_FILES['image1']['tmp_name'], $upload_dir . $image1);
// move_uploaded_file($_FILES['image2']['tmp_name'], $upload_dir . $image2);
// move_uploaded_file($_FILES['image3']['tmp_name'], $upload_dir . $image3);

// Insert product data into the database
$sql = "INSERT INTO products (product_name, size, color, price, company, image1)
        VALUES ('$product_name', '$size', '$color', '$price', '$company', '$image1')";

if ($conn->query($sql) === TRUE) {
    echo "Product added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>


