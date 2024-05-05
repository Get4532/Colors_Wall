<html>

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

        $pno = $_POST['pno'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $repass = $_POST['repass'];

        if ($_POST['pass'] === $_POST['repass']) {

            $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            if ($row['mob'] == $pno) {

                //Sql code to be executed 
                $sqlup = "UPDATE `users` SET  `password` = '$pass' WHERE `users`.`username` = '$username'";
                $resultup = mysqli_query($conn, $sqlup);
                if (!$resultup) {
                    echo "Insertion unsuccessful";
                } else {
                    header("Location: Loginpage.php");
                }
            }
        }
    }

    ?>

    <center><u>
        </u>
        <form method="POST">
        <b><i><h1 style="color: white";>FORGOT PASSWORD</h1></i></b><br><br>

        <b><b><input type="text" id="username" name="username" placeholder="USERNAME" required></b><br><br>
        <b><b><input type="text" id="Number" name="pno" placeholder="MOBILE NO" required maxlength="10" pattern="[0-9]+"></b><br><br>
        <b><b><input type="password" id="pass" name="pass" placeholder="NEW PASSWORD" required></b><br><br>
        <b><b><input type="password" id="pass" name="repass" placeholder="Re-ENTER PASSWORD" required></b><br><br><br>
        <button style="color: white;" type="submit" id="button">SAVE</button>
                            <a href="Loginpage.php" class="btn">BACK</a><br><br>    
        </form>
</body>

</html>
