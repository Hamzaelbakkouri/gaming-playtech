<?php

include "admin/connexion.php";
$req1 = "SELECT * FROM `product` ";
$result = $con->query($req1);
$req1 = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <title>PlayTech</title>
</head>
<body>
<div class="brand">
                    <a href="#hero">
                        <h1> <a href="http://127.0.0.1:5500/index1.html">back retour</a></h1>
                    </a>
                </div>

    <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')">all</button>
        <button class="btn" onclick="filterSelection('hr')">HORROR games</button>
        <button class="btn" onclick="filterSelection('fps')">FPS games</button>
        <button class="btn" onclick="filterSelection('old')">OLD games</button>
        <button class="btn" onclick="filterSelection('normal')">NORMAL games</button>
    </div>

    <div class="container">
        <?php
        include_once 'admin/connexion.php';
        $req = mysqli_query($con, "SELECT * FROM `product` WHERE `cat_id`= 2");
        $rows = $req->fetch_all(MYSQLI_ASSOC);
        $space = " &ensp; &ensp;";
        $space2 =  $space ." : " . $space;
        foreach ($rows as $row) { 
            ?>
            <div class="filterDiv <?= $row['filter'] ?>"><img src="<?php echo $row['image'] ?>" alt="">
                <p> ProductName  <?php echo $space2 . $row['productName'] ?></p>
                <p> Price   &ensp; <?php echo $space.$space.$space .$space2 . $row['price'] ?> DH</p>
                <p> Quantity <?php echo  $space.$space2 . $row['quantity'] ?></p>
            </div>

        <?php }
        ?>
    </div>


    <footer>
        <div class="footer-all">
            <h3>follow us</h3>
            <li class="socialm">
                <ul> <img id="media" src="./pictures/insta__1_-removebg-preview.png" alt=""></ul>
                <ul> <img id="media" src="./pictures/insta__2_-removebg-preview.png" alt=""></ul>
                <ul> <img id="media" src="./pictures/twit-removebg-preview.png" alt=""></ul>
                <ul> <img id="media" src="./pictures/yt-removebg-preview.png" alt=""></ul>
            </li>
            <dd class="infofooter">
                <p>Lorem ipsum dolor <br> amet consectetur adipisicing elit. </p>
                <p>Lorem ipsum dolor <br> amet consectetur adipisicing elit. </p>
                <p>Lorem ipsum dolor <br> amet consectetur adipisicing elit. </p>
                <p>Lorem ipsum dolor <br> amet consectetur adipisicing elit. </p>
            </dd>

        </div>
    </footer>
    <script src="js/app.js"></script>
</body>

</html>