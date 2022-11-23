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
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <h1><span>P</span>lay <span>T</span>ech</h1>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar">
                        </div>
                    </div>
                    <ul>
                        <li><a href="index1.php">Home</a></li>
                        <li class="dropdown">
                           <a class="dropbtn">Gallery</a>
                           <div class="dropdown-content">
                             <a href="gallery.php">games </a>
                             <a href="product.php">accessories</a>
                           </div>
                         </li>						
                        <li><a href="admin/login.php">admin</a></li>
                   </ul>
                </div>
            </div>
        </div>
    </section>

    <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')">all</button>
        <button class="btn" onclick="filterSelection('hr')">setup</button>
        <button class="btn" onclick="filterSelection('fps')">keyboards</button>
        <button class="btn" onclick="filterSelection('old')">mouses</button>
        <button class="btn" onclick="filterSelection('normal')">gaming chair</button>

      </div>
      
      <div class="container">

      <?php
        include_once 'admin/connexion.php';
        $req = mysqli_query($con, "SELECT * FROM `product` WHERE `cat_id`= 3");
        $rows = $req->fetch_all(MYSQLI_ASSOC);
        $space = " &ensp; &ensp;";
        $space2 =  $space ." : " . $space;
            foreach ($rows as $row) { 
                ?>
            
        <div class="filterDiv <?= $row['filter'] ?>"><img src="<?php echo $row['image'] ?>" alt="">
                <p> ProductName  <?php echo $space2 . $row['productName'] ?></p>
                <p> Price   <?php echo $space. $space.$space .$space2 . $row['price'] ?> DH</p>
                <p> Quantity <?php echo $space2 . $row['quantity'] ?></p>
            </div>
    
        <?php 
        }
    
        ?>
    
        <!-- <div class="filterDiv hr"><img src="" alt=""> <p> </p></div>
        <div class="filterDiv hr fps"> <img src="" alt=""> <p> </p></div>
        <div class="filterDiv hr "><img src="" alt=""> <p></p></div>
        <div class="filterDiv hr "><img src="" alt=""> <p></p> </div>
        <div class="filterDiv hr old"><img src="" alt=""><p> </p></div>
        <div class="filterDiv fps"><img src="" alt=""> <p></p></div>
        <div class="filterDiv fps"> <img src="" alt=""> <p></p></div>
        <div class="filterDiv fps"><img src="" alt=""> <p></p></div>
        <div class="filterDiv fps"><img src="" alt=""> <p></p></div>
        <div class="filterDiv old"><img src="" alt=""><p></p></div>
        <div class="filterDiv old normal"><img src="" alt=""><p></p></div>
        <div class="filterDiv old"><img src="" alt=""><p></p></div>
        <div class="filterDiv normal fps"><img src="" alt=""><p></p></div>
        <div class="filterDiv normal"><img src="" alt=""><p></p></div>
        <div class="filterDiv normal"><img src="" alt=""><p></p></div>
        <div class="filterDiv normal"><img src="" alt=""><p></p></div>
        <div class="filterDiv fps "><img src="" alt=""><p></p></div>
        <div class="filterDiv normal fps"><img src="" alt=""><p></p></div> -->
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
            <dd class="infofooter" >
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. </p>
            </dd>
            
        </div>
     </footer>
     <script src="js/app.js"></script>
</body>
</html>