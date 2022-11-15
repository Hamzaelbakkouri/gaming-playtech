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
                        <li><a href="/index.html">Home</a></li>
                        <li class="dropdown">
                           <a class="dropbtn">Gallery</a>
                           <div class="dropdown-content">
                             <a href="/gallery.html">games</a>
                             <a href="/product.html">accessories</a>
                           </div>
                         </li>						
                        <li><a href="#">Contact</a></li>
                   </ul>
                </div>
            </div>
        </div>
    </section>

    <div id="myBtnContainer">
        <button class="btn active" onclick="filterSelection('all')">all</button>
        <button class="btn" onclick="filterSelection('hr')">HORROR games</button>
        <button class="btn" onclick="filterSelection('fps')">FPS games</button>
        <button class="btn" onclick="filterSelection('old')">OLD games</button>
        <button class="btn" onclick="filterSelection('normal')">NORMAL games</button>
      </div>
      
      <div class="container">
        <div class="filterDiv hr"><img src="./gallery pic/evil within.jpg" alt=""> <p> The Evil Within</p></div>
        <div class="filterDiv hr fps"> <img src="./gallery pic/friday.jpg" alt=""> <p>Friday </p></div>
        <div class="filterDiv hr "><img src="./gallery pic/hello neighbor.jpg" alt=""> <p>Hello Neighbor</p></div>
        <div class="filterDiv hr "><img src="./gallery pic/resident evil village.jpg" alt=""> <p>Resident Evil Village</p> </div>
        <div class="filterDiv hr old"><img src="./gallery pic/resident evil.jpg" alt=""><p> Resident Evil 4 </p></div>
        <div class="filterDiv fps"><img src="./gallery pic/call of dutty wrzn.jpg" alt=""> <p>Call Of Dutty Warzones</p></div>
        <div class="filterDiv fps"> <img src="./gallery pic/fortnite.jpg" alt=""> <p>Fortnite</p></div>
        <div class="filterDiv fps"><img src="./gallery pic//r6s 4k 1.jpg" alt=""> <p>Tom Clancy's Rainbow Six Siege</p></div>
        <div class="filterDiv fps"><img src="./gallery pic/pubg_featured.jpg" alt=""> <p>PUBG BATTLEGROUNDS</p></div>
        <div class="filterDiv old"><img src="./gallery pic/gow.jpg" alt=""><p>God Of War</p></div>
        <div class="filterDiv old normal"><img src="./gallery pic/nedd f s.webp" alt=""><p>Need For Speed</p></div>
        <div class="filterDiv old"><img src="./gallery pic/prototype.jpg" alt=""><p>Prototype</p></div>
        <div class="filterDiv normal fps"><img src="./pictures/gta5 pic 1.jpg" alt=""><p>Grand Theft Auto</p></div>
        <div class="filterDiv normal"><img src="./gallery pic/fifa.jpg" alt=""><p>fifa 23</p></div>
        <div class="filterDiv normal"><img src="./gallery pic/hitman pic.jpg" alt=""><p>Hitman</p></div>
        <div class="filterDiv normal"><img src="./gallery pic/assassin's creed.jpg" alt=""><p>Assassin'S Creed</p></div>
        <div class="filterDiv fps "><img src="./gallery pic/valorant.png" alt=""><p>Valorant</p></div>
        <div class="filterDiv normal fps"><img src="./gallery pic/sniper elite.jpg" alt=""><p>Sniper elite</p></div>
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
     <script src="./js/app.js"></script>
</body>
</html>