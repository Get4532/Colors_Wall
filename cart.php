<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scal=1.0">
<title>ColorsWall</title>
<link rel="stylesheet" href="Toolbar.css">
</head>
<body>

<?php
    require './_db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['deletebtn'])){
        $prod = $_POST['delete'];
        $sql = "DELETE FROM `cart` WHERE `imgName` = '$prod' AND `username` = '$Curruser'";
        $result = mysqli_query($conn, $sql);
        if(!$result){
           echo "Deletion unsuccessful";
        }
    }
}
   ?>


    <marquee direction="right" >
<img src="logoimg4.png" class="logo-text" id="logo">
<h1 class="logo-text">COLORSWALL</h1>
</marquee>
<a href="Homepage.php" class="btn"> Homepage</a><br><br>    
<div class="container">
    <center>
        <h1 id="heading">CART</h1>
</center>
</div>
<br/><br/>

<?php
//WHERE `sleep` = 'woke' 
  $sql = "SELECT * FROM `cart` WHERE `username` = '$Curruser' " ;
  $result = mysqli_query($conn, $sql);

   
  if (mysqli_num_rows($result) < 1) {
    echo '
    <center>
    <img src="carty2.gif" height="250px" alt="Cart Empty">
    <br>
    <h3>Your cart empty...</h3>
    <a href="OrderN.php" class="btn">Shop Now</a>
    </center>';
      } else {

        echo' <div class="container">
        <div class="product-grid">';

        for ($i=0; $i < mysqli_num_rows($result); $i++) { 

            $cartrow = mysqli_fetch_assoc($result);
            $imgname= $cartrow['imgName'];

            $sqlimg = "SELECT * FROM `images` WHERE `imgName` = '$imgname' " ;
            $resultimg = mysqli_query($conn, $sqlimg);
            $row = mysqli_fetch_assoc($resultimg);
          echo '
          <form action="cart.php" method="POST">
          <div class="product-card">
          <img src="'.$row['img']. '" alt="'.$row['imgName'].'">
         <h3>'.$row['imgName'].'</h3>
         <h5>₹<s>'.$row['MRP']. '</s></h5>
 <h4>₹'.$row['price']. '</h4>
         <input type="hidden" value="'.$row['imgName'].'" name="delete">
         <input type="hidden" value="'.$row['imgName'].'" name="imgname">
        <button class="btn" name="deletebtn">Remove</button>
        <button href="Buy.php" type="submit" name="buy" class="btn">Buy Now</button><br><br>

        </div>
        </form>';
        }  
    
    echo '</div>
    </div>';
    
    }
  ?>

</body>
</html>
