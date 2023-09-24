<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle image update submission

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

    // Get product ID from the URL parameter
    $product_id = $_GET['id'];

    // Check if a file was uploaded
    if (isset($_FILES['new_image']) && $_FILES['new_image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = "uploads/";
        $new_image_name = $_FILES['new_image']['name'];
        $new_image_tmp = $_FILES['new_image']['tmp_name'];

        // Move the uploaded file to the uploads directory
        move_uploaded_file($new_image_tmp, $upload_dir . $new_image_name);

        // Update the product's first image in the database
        $sql = "UPDATE products3 SET image1 = '$new_image_name' WHERE id = $product_id";

        if ($conn->query($sql) === TRUE) {
            echo "Image updated successfully!";
        } else {
            echo "Error updating image: " . $conn->error;
        }
    } else {
        echo "No image uploaded or an error occurred during upload.";
    }

    // Close the database connection
    $conn->close();
} else {
    // Display the image update form
    $product_id = $_GET['id'];
    ?>

    <!DOCTYPE html>
    <html lang="en">
    
    <head>
    <link rel="icon" type="image/x-icon" href="/images/sport-shoe.png">
        <meta charset="UTF-8">
        
    <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Image</title>
        <script
      src="https://code.jquery.com/jquery-3.3.1.js"
      integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
      crossorigin="anonymous">
  </script>
  <script> 
  $(function(){
    $("#realheader").load("Components/header.html"); 
    $("#realfooter").load("Components/footer.html");
  });
  </script> 
    </head>
    <body>
        <div id="realheader"></div>
        <h1>Update Image</h1>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="new_image" accept="image/*" required>
            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
            <button type="submit" class="normal">Update</button>
        </form>
    </body>
    </html>

    <?php
}
?>
