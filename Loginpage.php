<html>
<head>
<title>ColorsWall</title>
<link rel="stylesheet"  href="TwoD.css">
</head>
<body background="logo6.PNG" text="white">
    <?php
    require './_db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //Sql code to be executed 
           $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if($password == $row['password']) {
                session_start();
                $_SESSION['Curruser'] = $username;

                header("Location: Homepage.php");
            }else {
                echo "<script>
                   alert(`Invalid Username or Password...!! 
 Please Re-enter the credentials`); 
                </script>";
             }
             
    }  
   
    ?>
    
<center><div class="container">
<form action="loginpage.php" method="POST">
<img src="Loginlo1.png" alt="ColorsWall">
<i><h1 style="color: white;">Login</h1><br/></i>
<b><b><input type="username" id="username" name="username" placeholder="USERNAME"required></b><br><br>
<b><b><input type="password" id="password" name="password" placeholder="PASSWORD" required></b><br><br>
<button type="submit" class="btn1">Login</button><br/><br/>
<a style="color: white;"href="Forgot.php">ForgotPassword?</a><br><br/>
<a style="color: blue;"href="NewReg.php">NEW REGISTER</a>
</form>

</div>
</center>
</body>
</html>
