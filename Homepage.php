<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scal=1.0">
    <title>ColorsWall</title>
    <link rel="stylesheet" href="Toolbar.css">
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
            <form action="Search.php" method="POST">
                <input type="search" id="search-bar" name="text" placeholder="Type to search"required>
                <input type="submit" id="search-btn" value="Search" name="search">
            </form>

        
        </center><br>
        <section class="hero">
            <p>Design your wall with our products.</p>
            <div class="container1">
                <br />
                <img src="logoimg.png" height="150px" alt="ColorsWall">
                <br /><br /><br /><br />
                <a href="OrderN.php" class="btn">Order Now</a>
            </div>
        </section>

        <section class="products">
            <center>
                <h2><b>Featured Products</b></h2>
            </center><br />
            <div class="container">


                <div class="product-grid">

                    <?php
                    $sql = "SELECT * FROM `images`";
                    $result = mysqli_query($conn, $sql);

                    for ($i = 0; $i < 40; $i++) {
                        $row = mysqli_fetch_assoc($result);
                        echo '
  <form action="Homepage.php" method="POST">
  <div class="product-card">
  <img src="' . $row['img'] . '" alt="' . $row['imgName'] . '">
 <h3>' . $row['imgName'] . '</h3>
 <h5>₹<s>' . $row['MRP'] . '</s></h5>
 <h4>₹' . $row['price'] . '</h4>
 <input type="hidden" value="' . $row['imgName'] . '" name="imgname">
 <button class="btn" name="cart" type="submit" >Add to cart</button>
 <button href="Buy.php" type="submit" name="buy" class="btn">Buy Now</button><br><br>
 </div>
</form>';
                    }
                    ?>
          
                </div><br>
                <center>
           <a href="OrderN.php" class="btn">View all</a>
                </center>

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
