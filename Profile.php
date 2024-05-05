<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scal=1.0">
<title>ColorsWall</title>
<link rel="stylesheet" href="Pro.css">
<body>
   
 <?php
  require './_db.php';
  ?>
   <center> 
        <section class="hero">
            <div class="container">
 <br/>
  <?php
  $sql = "SELECT * FROM `users` WHERE `username` = '$Curruser'"; 
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
echo '
  <form action="Profile.php" method="POST">
  <div class="container1">
  <h2><i>YOUR PROFILE</i></h2><br>
  <img src="'.$row['DP']. '" height="300px"  alt="'.$row['DP'].'">
 <h1><b>'.$row['Fullname'].'</b></h1>
 <h3>MOBILE No :<i>'.$row['mob']. '</i></h3>
 <h3>ADDRESS :<i>'.$row['Address']. '</i></h3>
 <a href="Homepage.php" class="btn">BACK</a><br><br>
 <a href="Change.php" class="btn">CHANGE PASSWORD</a><br><br>
 <a href="Loginpage.php" id="btn">LOGOUT</a>
<br><br><br><br><br><br><br>
 </div>
</form>';
  ?>

</section>
</center>
</body>
</html>
