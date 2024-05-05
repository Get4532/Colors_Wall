<link rel="stylesheet" href="header.css">
<header>

<?php 
  $sql = "SELECT * FROM `cart` WHERE `username` = '$Curruser' " ;
  $result = mysqli_query($conn, $sql);
?>

<nav>
 <div class="container">

<div class="nav-links">
<b><a href="Homepage.php">Home</a>
    <a href="Painting.php">Painting</a>
    <a href="Sket.php">Sketch</a>
    <a href="Threadart.php">Thread Art</a>
    <a href="Sculpture.php">Sculpture</a>
    <a href="clayart.php">Clay Art</a>
    <a href="contact.php">Contact</a>
    <a href="about.php">About</a></b>
</div>
<a href="Profile.php" class="prof-icon">
<h3 style="color: white">Profile</h3>
 <img src="profile.PNG" alt="User Icon">
</a>

<div class="cart">
 <a href="cart.php" class="cart-icon">
 <img src="cart.PNG" alt="Cart Icon">
</a>
<span class="cart-count"><?php
echo mysqli_num_rows($result);
?>
</span>
</div>
</div>
</nav>
</header>
