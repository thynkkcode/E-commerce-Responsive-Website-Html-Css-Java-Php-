<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Order</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="/images//lyall logo (2).png">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script> 
        $(function(){
            $("#realheader").load("Components/header.html"); 
            $("#realfooter").load("Components/footer.html");
        });
    </script> 
</head>
<body>
    <div id="realheader"></div>
    
    <section id="form-details">
        <form action="confirm-order" method="post">
            <h2>Fill info to confirm your order.</h2>

            <label for="custname">Your Full Name:</label>
            <input type="text" name="custname" required><br>

            <label for="email">E-mail:</label>
            <input type="email" name="email" required><br>

            <label for="number">Phone Number:</label>
            <input type="number" name="number" maxlength="11" required><br>

            <label for="address1">Address:</label>
            <input type="text" name="address1" required><br>

            <label for="address2">City:</label>
            <input type="text" name="address2" required><br>

            <label for="pcode">Postal Code:</label>
            <input type="text" maxlength="6" type="number" name="pcode" required><br>

            <?php
            // Connect to the database
            $servername = "localhost";
            $username = "id21289058_lyall12";
            $password = "viChEADELARM.12#";
            $dbname = "id21289058_lyall";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch product_name based on id from the URL
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $sql_product_name = "SELECT product_name FROM products WHERE id = '$id'";
                $result = $conn->query($sql_product_name);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $product_name = $row["product_name"];

                    // Add a hidden field for product_name
                    echo '<input type="hidden" name="product_name" value="' . $product_name . '">';
                }
            }
            ?>

            <input type="hidden" name="pid" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">

            <button type="submit" class="normal">Confirm Order</button>
            
            <?php
            // Handle form submissions
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $custname = mysqli_real_escape_string($conn, $_POST["custname"]);
                $email = mysqli_real_escape_string($conn, $_POST["email"]);
                $number = mysqli_real_escape_string($conn, $_POST["number"]);
                $address1 = mysqli_real_escape_string($conn, $_POST["address1"]);
                $address2 = mysqli_real_escape_string($conn, $_POST["address2"]);
                $pcode = mysqli_real_escape_string($conn, $_POST["pcode"]);
                $pid = mysqli_real_escape_string($conn, $_POST["pid"]); // Retrieve pid
                $product_name = mysqli_real_escape_string($conn, $_POST["product_name"]); // Retrieve product_name

                // Modify your SQL query to include the 'product_name' and 'pid' fields
                $sql = "INSERT INTO orders (custname, email, number, address1, address2, pcode, pid, product_name)
                        VALUES ('$custname', '$email', '$number', '$address1', '$address2', '$pcode', '$pid', '$product_name')";

                if ($conn->query($sql) === TRUE) {
                    echo "Order confirmed successfully!";
                } else {
                    echo "Product has been sold!";
                }
            }

            $conn->close();
            ?>
        </form>
    </section>
    <div id="realfooter"></div>
</body>
</html>
