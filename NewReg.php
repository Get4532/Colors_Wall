<html lang="en">

<head>
<title>ColorsWall</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scal=1.0">
    <link rel="stylesheet" href="TwoD.css"> 
</head>

<body background="logo6.PNG" style="color: white" ;>
    <?php
    require './_db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $address = $_POST['address'];
        $pno = $_POST['pno'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $full = $_POST['Fullname'];
        $dp = $_POST['image'];
        $_SESSION['Curruser'] = $username;
        // Insert user data into USER table
        $sql = "INSERT INTO `users` (`Address`, `mob`,`username`, `password`, `Fullname`, `DP`) VALUES ('$address', $pno, '$username', '$pass', '$full', '$dp')";
        $result = mysqli_query($conn, $sql);
        header("Location: Loginpage.php");

    }

    ?>

    <center>
        <form method="POST">
            
                <b><i><h1 style="color: white";>NEW REGISTER</h1></i></b>
        
            <b><b><input type="text" id="username" name="username" placeholder="USERNAME" required></b><br><br>
            <b><b><input type="text" id="Fullname" name="Fullname" placeholder="FULL NAME" required></b><br><br>
                <b><b><input type="text" id="Number" name="pno" placeholder="MOBILE" required maxlength="10" pattern="[0-9]+"></b><br><br>
                    <b><b><input type="password" id="pass" name="pass" placeholder="PASSWORD" required></b><br><br>
                        <b><b><input type="address" id="addr" name="address" placeholder="ADDRESS" required></b><br><br>
              <b><input type="text" id="prof"  name="image" placeholder="UPLOAD DP PATH" required></b><br><br>                   
        <button style="color: white;" type="submit" id="button">SAVE</button>
             <a href="Loginpage.php" class="btn">BACK</a><br><br>    

        </form>
</center>
    
</body>
</html>
