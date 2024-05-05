<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scal=1.0">
    <title>ColorsWall</title>
    <link rel="stylesheet" href="sea.css">
</head>

<body background-color="logoag.PNG" text="black">

    <?php
    require './_db.php';

    ?>


    <marquee direction="right" background-color="grey" style="color: black;">
        <h1>COLORSWALL</h1>
    </marquee>
    <?php
    require './_header.php';
    ?>

    <main>
        
        <center>
            <form method="POST">
                <input type="search" id="search-bar" name="text" placeholder="Type to search"required>
                <input type="submit" id="search-btn" value="Search" name="search">
                <a href="Homepage.php" class="btn">BACK</a>

            </form>
            <br/>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['search'])) {
                    $searchimg = $_POST['text'];

                    $sql = "SELECT * FROM `images` WHERE `imgName` = '$searchimg'";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result)) {

                        for ($i = 0; $i < mysqli_num_rows($result); $i++) {
                            $row = mysqli_fetch_assoc($result);
                            echo '
  <form action="Search.php" method="POST">
  <div class="product-card">
  <img src="' . $row['img'] . '" alt="' . $row['imgName'] . '">
 <h3>' . $row['imgName'] . '</h3>
 <h5>₹<s>' . $row['MRP'] . '</s></h5>
 <h4>₹' . $row['price'] . '</h4><br/>
 <input type="hidden" value="' . $row['imgName'] . '" name="imgname">
 <button class="btn" name="cart" type="submit" >Add to cart</button><br><br>
 <button href="Buy.php" type="submit" name="buy" class="btn">Buy Now</button><br><br>
 </div>
</form>';
                        }
                    }
                    else {
                        echo' Result Not Found..';
                    }
                }
            }
            ?>
            </center>
            </main>
        </body>
        </html>
