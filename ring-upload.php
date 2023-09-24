
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Upload</title>
    <link rel="stylesheet" href="Css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="/images/sport-shoe.png">
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
    <section id="form-details">
    <form action="process-ring.php" method="post" enctype="multipart/form-data">
        <h2>Add a Product to Rings Section</h2>
        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" required><br>

        <label for="size">Size:</label>
        <input type="text" name="size"><br>

        <label for="color">Color:</label>
        <input type="text" name="color"><br>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required><br>

        <label for="company">Company:</label>
        <input type="text" name="company"><br>

        <label for="image1">Image 1:</label>
        <input type="file" name="image1" accept=".png, .jpg, .heic" required><br>

        <!-- <label for="image2">Image 2:</label>
        <input type="file" name="image2" accept="image/*" required><br>

        <label for="image3">Image 3:</label>
        <input type="file" name="image3" accept="image/*" required><br> -->

        <input type="submit" value="Add Product">
    </form>
    </section>
    <div id="realfooter"></div>
</body>
</html>
