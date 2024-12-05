<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Styled Navbar</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>
 
  <nav class="navbar">
    <div class="navbar-logo">
      <img src="images/logo1.jpg" alt="Logo">
    </div>
    <ul class="navbar-menu">
      <li><a href="home.php">Home</a></li> 
      <li><a href="about.php">About</a></li>
      <li><a href="service.php">Services</a></li>
      <li><a href="pricing.php">Pricing</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul> 
    <a href="login.php" class="button">Login</a>
    <a href="register_form.php" class="button">Register</a>
  </nav>

  <div class="container">
    <div class="content">
      <h1>LAUNDRY TIP</h1>
      <h3>
        Choose your detergent wisely. Make sure you choose a detergent that works best for your clothing and your skin. 
        Don't worry if you forget, though - we have quality detergents available for you.
</h3>
      <button class="cta-button">Learn More</button>
    </div>
    <div class="image-section">
      <div class="main-images">
        <img src="images/wash1.jpg" alt="Laundry Image">
      </div>
    </div>
  </div>

  <section class="services">
    <div class="service-item">
      <img src="icons/dry.png" alt="Dry Cleaning Icon">
      <p>Dry Cleaning</p>
    </div>
    <div class="service-item">
      <img src="icons/wet.png" alt="Wet Cleaning Icon">
      <p>Wet Cleaning</p>
    </div>
    <div class="service-item">
      <img src="icons/laundry.png" alt="Laundry Icon">
      <p>Laundry</p>
    </div>
    <div class="service-item">
      <img src="icons/iron.png" alt="Iron Clothes Icon">
      <p>Iron Clothes</p>
    </div>
    <div class="service-item">
      <img src="icons/fold.png" alt="Wash & Fold Icon">
      <p>Wash & Fold</p>
    </div>
    <div class="service-item">
      <img src="icons/bulk.png" alt="Bulk Discount Icon">
      <p>Bulk Discount</p>
    </div>
    <div class="service-item">
      <img src="icons/pick.png" alt="Laundry Pickup Icon">
      <p>Laundry Pickup</p>
    </div>
    <div class="service-item">
      <img src="icons/delivery.png" alt="Laundry Delivery Icon">
      <p>Laundry Delivery</p>
    </div>
  </section>
  <footer>
  <p>&copy; 2024 Lala's Laundry. All rights reserved.</p>
</footer>
</body>
</html>
