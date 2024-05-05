<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "colorswall";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

if (!$conn) {
    echo 'connection error: ' . mysqli_connect_error();
}

session_start();
if (isset($_SESSION['Curruser'])) {
$Curruser = $_SESSION['Curruser'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cart'])) {
        $imgname = $_POST['imgname'];

        $sql = "SELECT * FROM `cart` WHERE `username` = '$Curruser' AND `imgName` = '$imgname'  ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) < 1) {

            // Sql query to be executed
            $sqlcart = "INSERT INTO `cart` (`username`, `imgname`) VALUES ('$Curruser', '$imgname')";
            $resultcart = mysqli_query($conn, $sqlcart);
            if (!$resultcart) {
                echo "Insertion unsuccessful";
            }
        }
        else{
            echo "<script>
            alert('The Product is already to the Cart..!!');
            </script>";
        }
    }

    if (isset($_POST['buy'])) {
        $_SESSION['buy'] = $_POST['imgname'];
        header("Location: Buy.php");

    }

}
} 
?>
