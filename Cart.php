<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="/images//lyall logo (2).png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
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
  <style>
    .no-underline {
        text-decoration: none;
    }
</style>
</head>
<body>
<div id="realheader"></div>
    <div class="section-p1">
        <?php
        // Check if the product ID is provided in the URL
        if (isset($_GET['id'])) {
            $product_id = $_GET['id'];

            // Database connection parameters (same as in your previous code)
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

            // Fetch product data by ID
            $sql = "SELECT * FROM products WHERE id = $product_id";
            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                // Display product information
                $row = $result->fetch_assoc();
                echo '<div class="row mt-4">';
                echo '<div class="col-md-4">';
                echo '<img class="img-thumbnail" src="uploads/' . $row['image1'] . '" alt="Product Image">';
                echo '</div>';
                echo '<div class="col-md-8">';
                echo '<h2 >' . $row['product_name'] . '</h2>';
                echo '<p >Size: ' . $row['size'] . '</p>';
                echo '<p >Color: ' . $row['color'] . '</p>';
                echo '<p >Price: PKR ' . $row['price'] . '</p>';
                echo '<a  href="confirm-order?id=' . $row['id'] . '"  ><button class="normal">Checkout</button></a>';
                echo '</div>';
                echo '</div>';
            } else {
                echo "Product not found.";
            }

            // Close the database connection
            $conn->close();
        } else {
            echo "Product ID not provided.";
        }
        ?>
        </div>
        <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p></p>
        <div class="pro-cont">
        
    
        <?php
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
    
        // Fetch product data from the database
        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Loop through the results and display each product
            while ($row = $result->fetch_assoc()) {
                echo '<div class="pro">';
                echo "<a href='Cart.php?id=" . $row['id'] . "' class='no-underline'>";
                echo '<img class="product-image" src="uploads/' . $row['image1'] . '" alt="Product Image">';
                echo '<div class="des">';
                echo '<h5>' . $row['product_name'] . '</h5>';
                echo '<span>Company: ' . $row['company'] . '</span>';
                echo '<br>';
                echo '<span>Size: ' . $row['size'] . '</span>';
                echo '<br>';
                echo '<span>Color: ' . $row['color'] . '</span>';
                echo '<h4>Price: PKR ' . $row['price'] . '</h4>';
                echo '</div>';
                echo "<a href='Cart.php?id=" . $row['id'] . "'><i class='fa-solid fa-bag-shopping cart'></i></a>";
                echo '</a>';
                echo '</div>';
            }
        } else {
            echo "No products found.";
        }

        $sql = "SELECT * FROM products2";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Loop through the results and display each product
            while ($row = $result->fetch_assoc()) {
                echo '<div class="pro">';
                echo "<a href='Cart2.php?id=" . $row['id'] . "' class='no-underline'>";
                echo '<img class="product-image" src="uploads/' . $row['image1'] . '" alt="Product Image">';
                echo '<div class="des">';
                echo '<h5>' . $row['product_name'] . '</h5>';
                echo '<span>Company: ' . $row['company'] . '</span>';
                echo '<br>';
                echo '<span>Size: ' . $row['size'] . '</span>';
                echo '<br>';
                echo '<span>Color: ' . $row['color'] . '</span>';
                echo '<h4>Price: PKR ' . $row['price'] . '</h4>';
                echo '</div>';
                echo "<a href='Cart2.php?id=" . $row['id'] . "'><i class='fa-solid fa-bag-shopping cart'></i></a>";
                echo '</a>';
                echo '</div>';
            }
        } else {
            echo "No products found.";
        }

        $sql = "SELECT * FROM products3";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Loop through the results and display each product
            while ($row = $result->fetch_assoc()) {
                echo '<div class="pro">';
                echo "<a href='Cart3.php?id=" . $row['id'] . "' class='no-underline'>";
                echo '<img class="product-image" src="uploads/' . $row['image1'] . '" alt="Product Image">';
                echo '<div class="des">';
                echo '<h5>' . $row['product_name'] . '</h5>';
                echo '<span>Company: ' . $row['company'] . '</span>';
                echo '<br>';
                echo '<span>Size: ' . $row['size'] . '</span>';
                echo '<br>';
                echo '<span>Color: ' . $row['color'] . '</span>';
                echo '<h4>Price: PKR ' . $row['price'] . '</h4>';
                echo '</div>';
                echo "<a href='Cart3.php?id=" . $row['id'] . "'><i class='fa-solid fa-bag-shopping cart'></i></a>";
                echo '</a>';
                echo '</div>';
            }
        } else {
            echo "No products found.";
        }
    
        // Close the database connection
        $conn->close();
        ?>
        </div>
        </section>
        
        
    <div id="realfooter"></div>
</body>
</html>
