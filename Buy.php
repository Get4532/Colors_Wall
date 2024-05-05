<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scal=1.0">
<title>ColorsWall</title>
<link rel="stylesheet" href="confirm.css">

<body>

  <?php
  require './_db.php';
  $imgname = $_SESSION['buy'];

  ?>
  <center>
    
        <br />
        <?php
        $sql = "SELECT * FROM `images` WHERE `imgName` = '$imgname' ";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        //Sql code to be executed 
        $sqladd = "SELECT * FROM `users` WHERE `username` = '$Curruser'";
        $resultadd = mysqli_query($conn, $sqladd);
        $rowadd = mysqli_fetch_assoc($resultadd);

        echo '
<form action="Buy.php" method="POST">
<div class="container">
<h1><u><i>Confirm Your Order</i></u></h1><br>
<img  src="' . $row['img'] . '" height="15s0px"  alt="' . $row['img'] . '">
<h1>Product Name = <i>' . $row['imgName'] . '</i></h1>
<h2>Total = <i>₹' . $row['price'] . '</i></h2>
<h3>Delivery Address = <i>' . $rowadd['Address'] . '</i></h3>
<h3>Payment :<i>CASH ON DELIVERY</i></h3><br><br>
<a href="confirmed.php" class="btn">Confirm Order</a><br><br>
<a href="Homepage.php" class="btn">Cancel</a><br><br>

<br><br><br><br><br><br><br>
 </div>
</form>';

        ?>

   
  </center>
</body>

</html>
