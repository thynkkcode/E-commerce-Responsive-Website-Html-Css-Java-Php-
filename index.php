<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyall Presents You a Fine Quality of Chains, Bracelets and Rings for Men - Lyall</title>
    <meta name="description" content="Lyall Presents You a Fine Quality of Chains, Bracelets and Rings for Men">
    <meta name="keywords" content="rings, bracelets, lyall, online rings, men jewllery">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="/images/lyall logo.png">
      <!-- Script to include Header and Footer -->
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

<section id="hero">
        <h4>10% Discount</h4>
        <h2>LYALL</h2>
        <h1>Super value deals</h1>
        <h1>On all products</h1>
        <button class="normal" onclick="location.href='shop'">Shop Now</button>


</section>

<!-- <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="images/vans.svg" alt="">
            <h6>Vans</h6>
        </div>
        <div class="fe-box">
            <img src="images/nike.svg" alt="">
            <h6>Nike</h6>
        </div>
        <div class="fe-box">
            <img src="images/converse.svg" alt="">
            <h6>Converse</h6>
        </div>
        <div class="fe-box">
            <img src="images/adidas.svg" alt="">
            <h6>Adidas</h6>
        </div>
        <div class="fe-box">
            <img src="images/jordan.svg" alt="">
            <h6>Jordan</h6>
        </div>
        <div class="fe-box">
            <img src="images/new.svg" alt="">
            <h6>New Balance</h6>
        </div>
</section> -->

     <!-- The Code for Featured Products starts from here -->
<section id="product1" class="section-p1">
        <h2>Chains</h2>
        <p>Linking Style and Elegance: Explore Our Chains Collection!</p>
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
        $sql = "SELECT * FROM products ORDER BY id DESC LIMIT 4 ";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Loop through the results and display each product
            while ($row = $result->fetch_assoc()) {
                echo '<div class="pro">';
                echo "<a href='Cart?id=" . $row['id'] . "' class='no-underline'>";
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
                echo "<a href='Cart?id=" . $row['id'] . "'><i class='fa-solid fa-bag-shopping cart'></i></a>";
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

<section id="product1" class="section-p1">
        <h2>Rings</h2>
        <p>Discover Your Signature Sparkle: Rings that Define You!</p>
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

        // Fetch the first 4 products from the database
        $sql = "SELECT * FROM products2 LIMIT 4"; // Limit the query to 4 rows
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Loop through the results and display each product
            while ($row = $result->fetch_assoc()) {
                echo '<div class="pro">';
                echo "<a href='Cart2?id=" . $row['id'] . "' class='no-underline'>";
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
                echo "<a href='Cart2?id=" . $row['id'] . "'><i class='fa-solid fa-bag-shopping cart'></i></a>";
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

<section id="product1" class="section-p1">
        <h2>Bracelets</h2>
        <p>Wrap Your Wrist in Elegance and Style!</p>
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
        $sql = "SELECT * FROM products3 LIMIT 4";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Loop through the results and display each product
            while ($row = $result->fetch_assoc()) {
                echo '<div class="pro">';
                echo "<a href='Cart3?id=" . $row['id'] . "' class='no-underline'>";
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
                echo "<a href='Cart3?id=" . $row['id'] . "'><i class='fa-solid fa-bag-shopping cart'></i></a>";
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

    

<section id="newsletter" class="section-p1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <br>
            <p>Get E-mail updates about our latest products and <span>special offers</span></p>
            <br>
        </div>

        <div class="form">
            <input type="text" placeholder="Your E-mail address">
            <button class="btn">Sign Up</button>
        </div>
</section>

<div id="realfooter"></div>
    

<!--?php
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
        $sql = "SELECT * FROM products2";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Loop through the results and display each product
            while ($row = $result->fetch_assoc()) {
                echo '<div class="pro">';
                echo "<a href='Cart?id=" . $row['id'] . "' class='no-underline'>";
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
                echo "<a href='Cart?id=" . $row['id'] . "'><i class='fa-solid fa-bag-shopping cart'></i></a>";
                echo '</a>';
                echo '</div>';
            }
        } else {
            echo "No products found.";
        }
    
        // Close the database connection
        $conn->close();
?-->
</body>
</html>
