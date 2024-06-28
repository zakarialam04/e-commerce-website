<?php


include('connect.php');

if(isset($_POST['insert_product'])) {
   $product_name = $_POST['product_name'];
   $product_brand = $_POST['product_brand'];
   $product_image1 = $_FILES['product_image1']['name'];
   $product_price = $_POST['product_price'];
   $product_cylindre = $_POST['product_cylindre'];
   $product_status = true;
   
   // Accessing image tmp names
   $temp_image1 = $_FILES['product_image1']['tmp_name'];
   
   // Checking if any required field is empty
   if (empty($product_name) || empty($product_brand) || empty($product_cylindre) || empty($product_image1)  ||empty($product_price)) {
       
       echo '<script>alert("Please fill all the available fields")</script>';
       exit();
   } else {
       // Move uploaded files to destination directory
       move_uploaded_file($temp_image1, "" . $product_image1);

       // Insert query
       $sql = "INSERT INTO products (product_name,product_brand , product_price,product_img,product_cylindre)
               VALUES ('$product_name', '$product_brand',
                       '$product_price', '$product_image1',
                       '$product_cylindre')";
      
      $result_query = mysqli_query($connect, $sql);
      
      if($result_query) {
          echo '<script>alert("Successfully inserted the product")</script>';
          echo '<script>window.open("home.php","_self")</script>';
      } else {
          echo '<script>alert("Error inserting the product")</script>';
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert-product</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <link rel="stylesheet" href="style.css">
    <style>
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
    
    
    .dropbtn {
  
   color: black;
  
    font-size: 16px;
    border: none;
    cursor: pointer;
   }

    
   .dropdown {
   position: relative;
   display: inline-block;
  }


  .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  }

 
  .dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  }

  
  .dropdown-content a:hover {background-color: #f1f1f1}


  .dropdown:hover .dropdown-content {
  display: block;
  }

  
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
 
  background-color: red;
  border: 0;
  display: inline-block;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
}

button:hover {
  color: #fff;
  background-color: #1A1A1A;
  box-shadow: rgba(0, 0, 0, 0.5) 0 10px 20px;
  transform: translateY(-3px);
}
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

    </style>
</head>
<body>


<header>
      <div class="hero">
        <nav>
          <div class="logo"><img src="LOGOZL-removebg-preview.png" alt=""></div>
          <div class="navlinks">
          <a class="login" href="login.php"><i class="fa-solid fa-user"></i> </a>
            
            <a href="home.php" class="cart_shop" style="font-size: smaller;"><i class="fa-solid fa-right-from-bracket"></i> LOG OUT</a>         
      </div>
          
        </nav>
        
      </div>
</header>
    <div class="container">
       <h1 class="text-center " >INSERT PRODUCTS</h1>
       <!-- form -->
       <form action="" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4 w-50 m-auto">
            <label class="form-label">product name</label>
            <input type="text" name="product_name" required autocomplete="off"  placeholder="enter product name" class="form-control" id="product_name">
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label class="form-label">product brand</label>
            <input type="text" name="product_brand" required autocomplete="off" placeholder="enter product brand" class="form-control" id="product_brand">
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label class="form-label">product_cylindre</label>
            <input type="text" name="product_cylindre" required autocomplete="off" placeholder="enter product cylindre" class="form-control" id="product_cylindre">
        </div>
        
        
       
        <div class="form-outline mb-4 w-50 m-auto">
            <label class="form-label">product_image1</label>
            <input type="file" name="product_image1" required  class="form-control" id="product_image1">
        </div>
        

        <div class="form-outline mb-4 w-50 m-auto">
            <label class="form-label">product price</label>
            <input type="text" name="product_price" required autocomplete="off" placeholder="enter product price" class="form-control" id="price">
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
           <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="insert product">
        </div>
       </form>
    </div>
    




    <?php include('footer.php') ?>











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>