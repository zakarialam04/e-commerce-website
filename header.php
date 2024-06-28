


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Bebas+Neue&family=DM+Serif+Display:ital@0;1&family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">

    
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=DM+Serif+Display:ital@0;1&family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Anton&family=Bebas+Neue&family=Covered+By+Your+Grace&family=DM+Serif+Display:ital@0;1&family=Dancing+Script&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'></script>

   
    

    
 <STYle>
    

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
    
    
    padding-top: 100px ;
    background-image: linear-gradient(to right,black,transparent);
    
   }
   .content p{
    padding-left: 100px;
    font-size: 1.5rem;
    font-family:"Bebas Neue" ;
    text-transform: lowercase;
   }
 
   .btn-primary{
    display: flex;
    justify-content: center;
   }
    
    /*list hover for category*/
    /* Style The Dropdown Button */
    .dropbtn {
  
   color: black;
  
    font-size: 16px;
    border: none;
    cursor: pointer;
   }

     /* The container <div> - needed to position the dropdown content */
   .dropdown {
   position: relative;
   display: inline-block;
  }

  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  }

  /* Links inside the dropdown */
  .dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  }

  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {background-color: #f1f1f1}

  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {
  display: block;
  }

  /* Change the background color of the dropdown button when the dropdown content is shown */
  .dropdown:hover .dropbtn {
  border-bottom: 5px solid ;
  transition: 1s ;
  }








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






</STYle>
  </head>
  <?php include('fun_get_ip.php') ?>
  <?php 
      include('count_cart_items.php');
      if(isset($_GET['user_id'])){
        $user_id=$_GET['user_id'];
     }
        
 ?>
  <body  >
    
    <header>
      <div class="hero">
        <nav>
          <div class="logo"><img src="LOGOZL-removebg-preview.png" alt=""></div>
          <div class="navlinks">
            <ul class="links">
              <li><a href="home.php?user_id=<?php echo $user_id; ?>" class="a_nav"><i class="fa-solid fa-house" style="padding-top: 10px;"></i> HOME</a></li>
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
            <a href="cart_shopping.php?add_to_cart=<?php echo $row['product_id']; ?>&user_id=<?php echo $user_id; ?>" class="cart_shop"><i class="fa-solid fa-cart-shopping"><sup><?php cart_items() ?></sup></i></a>
            <a href="home.php" class="cart_shop" style="font-size: smaller;"><i class="fa-solid fa-right-from-bracket"></i> LOG OUT</a>

          </div>

          
          <img src="menu-btn.png" alt="" class="menu" />
          
          
          
        </nav>
        
      </div>
    </header>

    
    
        

   

    </body>
    </html>