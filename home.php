<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>HOME PAGE</title>
    </head>
    <body>
        <header>
            <div class="logo">EASYPARK</div>
            <div  class="one">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div> 
            </div>
            <nav class="nav-bar">
               
                <ul>
                    <li><a href="home.php" class="active">Home</a></li>
                    <li><a href="about us.php">About</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="choice.php">Get Started</a></li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <div class="box3">
                <img src="CAR.jpg" 10 pix>
                </div>
                <p>Suffer no more,<br>EasyPark just made parking easier.</p>
            
            </div>
     <div class="footer">
        <p>Valuing your precious time</p>
    </div>
        


        <script>
            one = document.querySelector(".one");
        one.onclick = function() {
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
        </script>       
    </body>
</html>