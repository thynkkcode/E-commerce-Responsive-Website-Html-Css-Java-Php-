<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <link rel="icon" type="image/x-icon" href="/images//lyall logo (2).png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #121212; /* Dark background color */
            color: #ffffff; /* Light text color */
        }
        .table {
            background-color: #333; /* Dark table background color */
            color: #ffffff; /* Light table text color */
        }
        .table th, .table td {
            border-color: #454545; /* Darker border color */
        }
        .btn-primary {
            background-color: #007bff; /* Primary button color */
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker primary button color on hover */
        }
        .table th, tbody td{
            text-align: center;
        }
    </style>
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

    <div class="container">
        <h1 class="text-light">Chains List</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Company</th>
                    <th>Image 1</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
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

                // Fetch all products from the database
                $sql = "SELECT * FROM products ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['size'] . "</td>";
                        echo "<td>" . $row['color'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['company'] . "</td>";
                        echo "<td><img src='uploads/" . $row['image1'] . "' width='100'></td>";
                        echo "<td><a  href='update_image.php?id=" . $row['id'] . "'><button class='normal'>Update Image</button></a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No products found.</td></tr>";
                }

                // Close the database connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h1 class="text-light">Rings List</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Company</th>
                    <th>Image 1</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
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

                // Fetch all products from the database
                $sql = "SELECT * FROM products2 ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['size'] . "</td>";
                        echo "<td>" . $row['color'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['company'] . "</td>";
                        echo "<td><img src='uploads/" . $row['image1'] . "' width='100'></td>";
                        echo "<td><a  href='update_image2.php?id=" . $row['id'] . "'><button class='normal'>Update Image</button></a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No products found.</td></tr>";
                }

                // Close the database connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <h1 class="text-light">Bracelets List</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Company</th>
                    <th>Image 1</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
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

                // Fetch all products from the database
                $sql = "SELECT * FROM products3 ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['size'] . "</td>";
                        echo "<td>" . $row['color'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['company'] . "</td>";
                        echo "<td><img src='uploads/" . $row['image1'] . "' width='100'></td>";
                        echo "<td><a  href='update_image3.php?id=" . $row['id'] . "'><button class='normal'>Update Image</button></a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No products found.</td></tr>";
                }

                // Close the database connection
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <!-- Add Bootstrap JS CDN link here (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
