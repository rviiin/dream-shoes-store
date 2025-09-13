<header class="header">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
                                                   
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Eczar&family=Graduate&family=Racing+Sans+One&display=swap" rel="stylesheet">
   <div class="flex">

      <a href="#" class="logo">
         <img src="images/logo.png" width="100px" alt="logo">


      <nav class="navbar">
         <a href="index.html">home</a>
         <a href="products.php">Products</a>
         <a href="admin.php">sell</a>      <!--Comment out this part after using -->
         <a href="aboutUs.html">about us</a>
         <a href="contact.html">contact</a>
         <a href="">account</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">cart <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>