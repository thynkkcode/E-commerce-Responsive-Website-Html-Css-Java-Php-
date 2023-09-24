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

// Handle status update
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $orderId = $_POST["id"];
    $newStatus = $_POST["status"];
    
    $sql = "UPDATE orders SET status = '$newStatus' WHERE id = '$orderId'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Status updated successfully!";
    } else {
        echo "Error updating status: " . $conn->error;
    }
}

// Fetch all products from the database
$sql = "SELECT * FROM orders ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
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
        <h1 class="text-light">Order List</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Sr.</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address 1</th>
                    <th>Address 2</th>
                    <th>Postal Code</th>
                    <th>Product Name</th>
                    <th>Status</th>
                    <th>Action</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['custname'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['number'] . "</td>";
                        echo "<td>" . $row['address1'] . "</td>";
                        echo "<td>" . $row['address2'] . "</td>";
                        echo "<td>" . $row['pcode'] . "</td>";
                        echo "<td>" . $row['product_name'] . "</td>";
                        echo "<td>" . $row['status'] . "</td>";
                        
                        // Add a button to update status for each order
                        echo "<td><button class='normal' data-id='" . $row['id'] . "'>Update</button></td>";
                        
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='10'>No orders found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
    <script>
    // JavaScript/jQuery to handle status update
    $(document).ready(function() {
        $(".normal").click(function() { // Change the selector to match the class "normal"
            var orderId = $(this).data("id");
            var newStatus = prompt("Enter new status (pending, dispatched, delivered, completed):");
            if (newStatus !== null && newStatus !== "") {
                // Send an AJAX request to update the status
                $.ajax({
                    url: "", // The same file (leave it empty to use the current file)
                    method: "POST",
                    data: { id: orderId, status: newStatus },
                    success: function(response) {
                        alert("Status updated! Refresh page.");
                        // You can update the UI here if needed
                    },
                    error: function() {
                        alert("An error occurred while updating status.");
                    }
                });
            }
        });
    });
</script>

</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
