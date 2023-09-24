
  <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lyall Admin</title>
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
    <!-- ... (other head elements) ... -->
    <style>
        .text-light{
        color: #fff;
    }
        /* Remove bullets from the list */
        .admin-button-list {
            list-style: none;
            padding: 0;
        }

        /* Add a margin between list items */
        .admin-button-list li {
            margin-bottom: 5px;
        }

        /* Style the buttons */
        .admin-button-list li button {
            margin-right: 5px; /* Add a 5px margin between buttons */
        }
    </style>
</head>
<body>
    <section id="header">
        <h2 class="text-light">ADMIN PANEL.</h2>
    </section>

    <section id="hero">
        <h4>Dashboard</h4>
        <h2>Welcome Back!</h2>
        <ul class="admin-button-list">
            <li><button class="normal" onclick="location.href='product-upload'">Upload Chain</button></li>
            <li><button class="normal" onclick="location.href='ring-upload'">Upload Ring</button></li>
            <li><button class="normal" onclick="location.href='bracelet-upload'">Upload Bracelet</button></li>
            <li><button class="normal" onclick="location.href='Products-list'">Product List</button></li>
            <li><button class="normal" onclick="location.href='order-list'">Orders</button></li>
        </ul>
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
    <script src="script.js"></script>
</body>
</html>
