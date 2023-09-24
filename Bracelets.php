<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rings</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <link rel="icon" type="image/x-icon" href="/images//lyall logo (2).png">
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
<section id="header">
        <a href="index.php"><img src="images//lyall logo.png" class="logo" alt=""></a>
        <div >

            <ul id="navbar">

                <li><a  href="index">Home</a></li>
                <li><a href="Rings">Rings</a></li>
                <li><a  href="Chains">Chains</a></li>
                <li><a class="active" href="Bracelets">Bracelets</a></li>
                <li><a  href="Contact">Contact</a></li>
                <!-- <li><a href="products.php">Products</a></li> -->
                <!-- <li id="lg-bag"><a href="index.php"><i class="fa-solid fa-bag-shopping"></i></a></li> -->
                <a href="#" id="close"><i class="fa-solid fa-x"></i></a>
            </ul>
        </div>
        <div id="mobile">
            
            <a href="cart.html"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fa-solid fa-bars"></i>
        </div>
</section>

    <section id="page-header">
        
        <h2>#Bracelets</h2>
        <p>Wrap Your Wrist in Elegance and Style!</p>


    </section>

    <section id="product1" class="section-p1">
        
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
        $sql = "SELECT * FROM products3 ORDER BY id DESC";
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
    
    

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
    </section>

    <section id="newsletter" class="section-p1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about our latest products and <span>special offers</span></p>
        </div>

        <div class="form">
            <input type="text" placeholder="Your E-mail address">
            <button class="btn">Sign Up</button>
        </div>
    </section>

    <div id="realfooter"></div>
    
</body>
</html>
