<?php
session_start();

include('connect.php');

include('fun_get_ip.php');


if(isset($_GET['user_id'])){
   $user_id=$_GET['user_id'];
}

//if ( !isset($_GET['user_id'])) {
  //  header("Location: login.php");
    //exit; // Stop further execution
  //}


  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <style>
        /* Your CSS styles here */
        .video-container {
            position: relative;
            width: 100%;
            height: 100vh; 
            overflow: hidden;
        }

        .video-container video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content {
            height: 100%;
            position: relative;
            color: white;
            padding-top: 100px;
            background-image: linear-gradient(to right, black, transparent);
        }

        .content p {
            padding-left: 100px;
            font-size: 1.5rem;
            font-family: "Bebas Neue";
            text-transform: lowercase;
        }

        .btn-primary {
            display: flex;
            justify-content: center;
        }

        /* Add more of your CSS styles here */

        .searchBox {
  display: flex;
  max-width: 230px;
  align-items: center;
  justify-content: space-between;
  gap: 8px;
  background: #2f3640;
  border-radius: 50px;
  position: relative;
}

.searchButton {
  color: white;
  position: absolute;
  right: 8px;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  /*background: var(--gradient-2, linear-gradient(90deg, #2AF598 0%, #009EFD 100%));*/
  background-color: red;
  border: 0;
  display: inline-block;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
}
/*hover effect*/
button:hover {
  color: #fff;
  background-color: #1A1A1A;
  box-shadow: rgba(0, 0, 0, 0.5) 0 10px 20px;
  transform: translateY(-3px);
}
/*button pressing effect*/
button:active {
  box-shadow: none;
  transform: translateY(0);
}

.searchInput {
  border: none;
  background: none;
  outline: none;
  color: white;
  font-size: 15px;
  padding: 24px 46px 24px 26px;
}


.slider {
    background: #efeef2;
    height: 100px;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
    cursor: default;
    user-select: none;
    touch-action: none;
}

.slider:before {
    left: 0;
    top: 0;
}
.slider:after,
.slider:before {
    background: linear-gradient(
        to right,
        #efeef2 0%,
        hsla(0, 0%, 100%, 0) 100%
    );
    content: "";
    height: 75pt;
    position: absolute;
    width: 200px;
    z-index: 2;
}
.slider:after {
    right: 0;
    top: 0;
    transform: rotateZ(180deg);
}
.slider:after,
.slider:before {
    background: linear-gradient(
        to right,
        #efeef2 0%,
        hsla(0, 0%, 100%, 0) 100%
    );
    content: "";
    height: 75pt;
    position: absolute;
    width: 200px;
    z-index: 2;
}

.slider .slide-track-1 {
    animation: scroll-l 30s linear infinite;
    display: flex;
    width: 3500px;
}
.slider .slide-track-2 {
    animation: scroll-r 30s linear infinite;
    display: flex;
    width: 3500px;
}

.slider .slide {
    height: 75pt;
    width: 250px;
    display: flex;
    align-items: center;
    text-align: center;
}
.slider .slide img {
    width: 180px;
    padding: 1pc;
    vertical-align: middle;
    margin: 0 auto;
    
    display: inline-block;
    max-width: 100%;
    height: auto;
}

@keyframes scroll-l {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(calc(-250px * 7));
    }
}
@keyframes scroll-r {
    100% {
        transform: translateX(0);
    }
    0% {
        transform: translateX(calc(-250px * 7));
    }
}




*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Open sans','sans-serif';

}
html,body {
    overflow-x: hidden;
}

.logo img{
    
    height: 100%;
    width: 300px;
}
.label{
    color: white;
    margin-top: 30px;
    display: flex;
    justify-content: center;
    font-size: 4rem;
}



li{
    list-style: none; 
}
.a_nav {
    text-decoration: none;
    color:black;
    font-size: 1rem;
    transition: 1s;
    font-family: "Poppins";
    font-weight: 300;
    font-size: 1.3rem;
  
}
.a_nav:hover{
    color: black;
    border-bottom: 5px solid;
    cursor: pointer;
}
header{
    position: relative;
    height: 80px;
    background-color: whitesmoke;
    
}
.login{
    
    
    text-decoration: none;
    padding:  10px;
    padding-bottom: 0;
    color: black;
    flex: 1;
    
    border-radius: 30px;
    font-family: "Poppins";
    font-weight: 600;
    font-size: 1.5rem;
    margin-left: 400px;
    
    
}
.cart_shop{
     
    text-decoration: none;
    padding:  10px;
    padding-bottom: 0;
    color: black;
    flex: 1;
    
    border-radius: 30px;
    font-family: "Poppins";
    font-weight: 600;
    font-size: 1.5rem;
    

}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    font-family: "Poppins", sans-serif;
    margin: 0 auto;
    
   
    
       
   

}

.navlinks{
    margin-right: 20px;
    display: flex;
    justify-content: space-between;
}
.links{
    gap: 2rem;
    display: flex;
    
    
}
.menu{
    display: none;
}
.banner1{
    display: flex;
    height: 100vh;
    width: 100%;
    
}
.test{
    width: 100%;
    
   /* background-image:  linear-gradient(to right,black,transparent),url('R6.jpg');*/
   
    
   
    background-size: cover;
    
     
}

.text_image{

    display: flex;
    justify-content: center;
    
    flex-direction: column;
    margin-top: 100px;
    padding-left: 50px;
    
}
.text_image h1{
    
    color: white;
    font-size: 3rem;

}
.text_image span{
    font-family: "Dancing Script";
    font-size: 1.4rem;
    line-height: 70px;
    color: white;
    padding-left: 40px;
    margin-top: 20px;
}
.text_image span .moto{
    color: red;
    font-size: 2rem;


}  
.separationban1ban2{
    
    border-left: 5px solid ;
    border-right: 5px solid ;
    text-align: center;
    margin: 60PX;
    color: red;
}  
.separationban1ban2 h2{
    font-family: "Abril Fatface";
    font-size: 2rem;
    background-color: #f1f5f9;
}
.banner2{
    border-top: 5px dashed;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 30px;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: center;
    
   
}

.card-title{
    font-family: "ANTON";
    text-align: center;
}

.card-text{
    font-family: "Abril Fatface" ;
}















@media screen and ( max-width:771px ){

    .navlinks{
       
        display: flex;
        
        position: absolute;
        background-color: #ffffff88;
        backdrop-filter: blur(7px);
        height: 100vh;
        right: 0;
        left: 0;
        align-items: center;
        justify-content: center;
        width: 100%;
        top: 0;
        
        margin-left: -100%;
        z-index: 100;
    }
    .links{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        font-size: bold;
    }

    .mobile-menu{
        margin-left: 0;
        
    }
    
    
    .menu{
       
        position:absolute;
        box-sizing: border-box;
        display: block;
        right: 20px;
       
        width: 20px;
        
        
    }
    
}

/* footer */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
    
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.container{

	max-width: 1170px;
	margin:auto;
    
}
.row{
	display: flex;
	flex-wrap: wrap;
}

ul{
	list-style: none;
    
}
.footer{
    width: 100%;
	background-color: #24262b;
    padding: 70px 0;
}
.footer-col{
    flex: 1;
   width: 25%;
   padding: 0 15px;
   
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}




.row img{
    margin-top: 20px;
    flex: 1;
    width: 50%;
}
.first{
    width: 100%;
    display: flex;

}




.card-img-top{
    
    width:100%;
    height:200px;
    object-fit: contain;
    transition: 0.7 ease;
    cursor: pointer;
}

.card-img-top :hover{
    opacity: 0.7;
}








button,
button::after {
 padding: 16px 20px;
 font-size: 18px;
 background: linear-gradient(45deg, transparent 5%, #ff013c 5%);
 border: 0;
 color: #fff;
 letter-spacing: 3px;
 line-height: 1;
 box-shadow: 6px 0px 0px #00e6f6;
 outline: transparent;
 position: relative;
}

button::after {
 --slice-0: inset(50% 50% 50% 50%);
 --slice-1: inset(80% -6px 0 0);
 --slice-2: inset(50% -6px 30% 0);
 --slice-3: inset(10% -6px 85% 0);
 --slice-4: inset(40% -6px 43% 0);
 --slice-5: inset(80% -6px 5% 0);
 content: "HOVER ME";
 display: block;
 position: absolute;
 top: 0;
 left: 0;
 right: 0;
 bottom: 0;
 background: linear-gradient(45deg, transparent 3%, #00e6f6 3%, #00e6f6 5%, #ff013c 5%);
 text-shadow: -3px -3px 0px #f8f005, 3px 3px 0px #00e6f6;
 clip-path: var(--slice-0);
}

button:hover::after {
 animation: 1s glitch;
 animation-timing-function: steps(2, end);
}

@keyframes glitch {
 0% {
  clip-path: var(--slice-1);
  transform: translate(-20px, -10px);
 }

 10% {
  clip-path: var(--slice-3);
  transform: translate(10px, 10px);
 }

 20% {
  clip-path: var(--slice-1);
  transform: translate(-10px, 10px);
 }

 30% {
  clip-path: var(--slice-3);
  transform: translate(0px, 5px);
 }

 40% {
  clip-path: var(--slice-2);
  transform: translate(-5px, 0px);
 }

 50% {
  clip-path: var(--slice-3);
  transform: translate(5px, 0px);
 }

 60% {
  clip-path: var(--slice-4);
  transform: translate(5px, 10px);
 }

 70% {
  clip-path: var(--slice-2);
  transform: translate(-10px, 10px);
 }

 80% {
  clip-path: var(--slice-5);
  transform: translate(20px, -10px);
 }

 90% {
  clip-path: var(--slice-1);
  transform: translate(-10px, 0px);
 }

 100% {
  clip-path: var(--slice-1);
  transform: translate(0);
 }
}


    </style>
</head>
<body>

    <!-- Header -->
    <?php include('count_cart_items.php') ?>
    <?php include_once('fun_get_prod_db.php'); $row = mysqli_fetch_assoc($result) ;?>
    <header>
      <div class="hero">
        <nav>
          <div class="logo"><img src="LOGOZL-removebg-preview.png" alt=""></div>
          <div class="navlinks">
            <ul class="links">
              <li><a href="home.php" class="a_nav"><i class="fa-solid fa-house" style="padding-top: 10px;"></i> HOME</a></li>
              <li><a href="" class="a_nav"><i class="fa-solid fa-person" style="padding-top: 10px;"></i> ABOUT</a></li>
              <li><a href="" class="a_nav"><i class="fa-solid fa-phone" style="padding-top: 10px;"></i> CONTACT</a></li>
              
              <li><div class="dropdown" style="font-family: Poppins;font-weight: 300;font-size: 1.3rem;">
                <a class="dropbtn a_nav" style="font-weight: 300;font-size: 1.3rem;"><i class="fa-solid fa-list" style="padding-top: 10px;"></i> CATEGORY</a>
                <div class="dropdown-content" style="font-family: Bebas Neue;">
                  <a href="#" style="font-family: Bebas Neue;">MOTO CROSS</a>
                  <a href="#" style="font-family: Bebas Neue;">MOTO SPORT</a>
                  <a href="#" style="font-family: Bebas Neue;">HARLEY</a>
                </div>
              </div>
              </li>
  
            </ul>
            <li><div class="searchBox" style="position:absolute ; margin-left: 80px ; top: 5px;">

<input class="searchInput" type="text" name="" placeholder="Search something" >
<button class="searchButton" href="#">
       
      

                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="29" viewBox="0 0 29 29" fill="none">
<g clip-path="url(#clip0_2_17)">
<g filter="url(#filter0_d_2_17)">
<path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path>
</g>
</g>
<defs>
<filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
<feOffset dy="4"></feOffset>
<feGaussianBlur stdDeviation="2"></feGaussianBlur>
<feComposite in2="hardAlpha" operator="out"></feComposite>
<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend>
</filter>
<clipPath id="clip0_2_17">
<rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect>
</clipPath>
</defs>
</svg>
         

</button>
</div></li>
            
            
            <a class="login" href="login.php"><i class="fa-solid fa-user"></i> </a>
            <?php 
                    if (isset($_GET['user_id'])) {
                        
                        echo '<a href="cart_shopping.php?user_id=' . htmlspecialchars($user_id) . '" class="cart_shop">' ?><i class="fa-solid fa-cart-shopping"><sup ><?php cart_items() ?></sup></i></a>
                        <?php echo ' <a href="home.php" class="cart_shop" style="font-size: smaller;"><i class="fa-solid fa-right-from-bracket"></i> LOG OUT</a>';
                    }
                    
                    ?>
            
          </div>

          
          <img src="menu-btn.png" alt="" class="menu" />
          
          
          
        </nav>
        
      </div>
    </header>
    

    <!-- Banner -->
    <content class="banner1">
        <div class="video-container">
            <video autoplay muted loop>
                <source src="pexels-c-technical-5803089 (2160p).mp4" type="video/mp4">
            </video>
            <div class="content">
                <img src="LOGOZL-removebg-preview.png" alt="">
                <p>ENTREPRISE SPECIALISE EN VENTE DES MOTOS SPORT ET MOTO CROSS <BR> STOP DREAMING AND LET'S GO FOR RIDE</p>
                <button class="button" style="margin-left:200px ;margin-top:50px "> HOVER ME</button>
            </div>
        </div>
    </content>

    <!-- Separation between banners -->
    <div class="separationban1ban2">
        <img src="LOGOZL-removebg-preview.png" alt="">
    </div>

    <div class="slider">
    <div class="slide-track-1">
        <div class="slide">
            <img style="width:fit-content" src="logo_bmw.png" alt="">
        </div>
        <div class="slide">
            <img src="logo_kawazaki.png" alt="">
        </div>

        <div class="slide">
            <img src="logo_yamaha.jpg" alt="">
        </div>
        <div class="slide">
            <img src="logo_honda.png" alt="">
        </div>
        <div class="slide">
            <img src="KTM-Logo.svg.png" alt="">
        </div>
        <div class="slide">
            <img src="logo_ducatti.png" alt="">
        </div>
        <div class="slide">
            <img src="logo_bmw.png" alt="">
        </div>
    </div>
    </div>

    <div class="slider">
    <div class="slide-track-2" style="height:200px">
        <div class="slide">
            <img src="logo_bmw.png" alt="">
        </div>
        <div class="slide">
            <img src="logo_kawazaki.png" alt="">
        </div>

        <div class="slide">
            <img src="logo_yamaha.jpg" alt="">
        </div>
        <div  class="slide">
            <img src="logo_honda.png" alt="">
        </div>
    </div>
    </div>

    
    <content class="banner2">
        <?php include('fun_get_prod_db.php') ?>
        <?php while ($row = mysqli_fetch_assoc($result)){?>
            <div class="card" style="width: 18rem; margin:10px ">
                <img class="card-img-top" src="<?php echo $row['product_img'];?>" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                    <p class="card-text">MARQUE : <?php echo $row['product_brand'];?> <br>CYLINDRE : <?php echo $row['product_cylindre']; ?></p>
                    <?php 
                    if ( !isset($_GET['user_id'])) {
                        echo '<a href="login.php" class="btn btn-danger" style="width: 100%;">' . $row['product_price'] . '</a>';
                    }else{
                    
                    echo '<a href="home.php?add_to_cart=' . $row['product_id'] . '&user_id=' . $user_id . '" class="btn btn-danger" style="width: 100%;">' . $row['product_price'] . '</a>';
                }
                    
                    ?>
                </div>
            </div>
        <?php } ?>
    </content>
    
    


    <!-- PHP code to handle adding products to the cart -->
    <?php
      include('connect.php');

    if(isset($_GET['add_to_cart']) && isset($_GET['user_id'])) {
        $get_product_id = $_GET['add_to_cart'];
        $get_ip_address = $_GET['user_id'];
        if(isset($_GET['user_id'])){
          $user_id=$_GET['user_id'];
       }
        $sql = "SELECT * FROM `cart_details` WHERE ip_address='$user_id' AND product_id='$get_product_id'";
        $result = mysqli_query($connect , $sql);
        $count = mysqli_num_rows($result);
        if($count > 0) {
         
    
          echo "<script>alert('CE PRODUIT EXISTE DEJA DANS VOTRE PANIER')</script>";
          
          echo "<script>window.open('home.php')</script>";
        } else {
            $insert_querry = "INSERT INTO `cart_details` (product_id, ip_address, quantity) VALUES ('$get_product_id','$user_id',1)";
            $result = mysqli_query($connect , $insert_querry);
            
            echo "<script>alert('CE PRODUIT A ETE AJOUTE A VOTRE PANIER')</script>";

        }
    } else {
      
    }
     
    
    
    
    ?>

    



    
    <!-- Your footer -->
    <?php include('footer.php') ?>

    <!-- JavaScript scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
    <script>
        // Your JavaScript code here
        const menuHamburger = document.querySelector(".menu");
        const navLinks = document.querySelector(".navlinks");

        menuHamburger.addEventListener("click", () => {
            navLinks.classList.toggle("mobile-menu");
        }

    );
    function updateCartItemCount() {
    fetch('count_cart_items.php')
        .then(response => response.text())
        .then(count => {
            document.getElementById('cartItemCount').textContent = count;
        })
        .catch(error => console.error('Error updating cart items count:', error));
}


    </script>
</body>
</html>

<?php 
session_destroy();
?>
