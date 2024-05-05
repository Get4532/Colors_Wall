<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scal=1.0">
<title>ColorsWall</title>
<link rel="stylesheet" href="Toolbar.css">
</head>
<body bgcolor="logoag.PNG" text="black">

<?php
    require './_db.php';
    ?>

<marquee direction="right" >
<img src="logoimg4.png" class="logo-text" id="logo">
<h1 class="logo-text">COLORSWALL</h1>
</marquee>

<?php
    require './_header.php';
?>

<main>
 <section class="products">
 <div class="container">
 <h1 id="heading"><u>SKETCH</u></h1>
  <div class="product-grid">

  <?php
  $sql = "SELECT * FROM `images` WHERE `Type` = 'Sketch'"; 
  $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result)) {

  for ($i=0; $i < mysqli_num_rows($result); $i++) { 
    $row = mysqli_fetch_assoc($result);
  echo '
  <form action="Sket.php" method="POST">
  <div class="product-card">
  <img src="'.$row['img']. '" alt="'.$row['imgName'].'">
 <h3>'.$row['imgName'].'</h3>
 <h5>₹<s>'.$row['MRP']. '</s></h5>
 <h4>₹'.$row['price']. '</h4>
 <input type="hidden" value="'.$row['imgName'].'" name="imgname">
 <button class="btn" name="cart" type="submit" >Add to cart</button>
 <button href="Buy.php" type="submit" name="buy" class="btn">Buy Now</button><br><br>
 </div>
</form>';
  }
}
?>


 
</div>
</div>
</section>
</main>

<footer>
<div class="container">
<p>&copy; 2023 ColorsWall. All rights reserved.</p>
</div>
</footer>
</body>
</html>

</body>
</html>  
