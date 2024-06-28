

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        body{background-color: #000}.card{border:none}.product{background-color: #eee}.brand{font-size: 13px}.act-price{color:red;font-weight: 700}.dis-price{text-decoration: line-through}.about{font-size: 14px}.color{margin-bottom:10px}label.radio{cursor: pointer}label.radio input{position: absolute;top: 0;left: 0;visibility: hidden;pointer-events: none}label.radio span{padding: 2px 9px;border: 2px solid #ff0000;display: inline-block;color: #ff0000;border-radius: 3px;text-transform: uppercase}label.radio input:checked+span{border-color: #ff0000;background-color: #ff0000;color: #fff}.btn-danger{background-color: #ff0000 !important;border-color: #ff0000 !important}.btn-danger:hover{background-color: #da0606 !important;border-color: #da0606 !important}.btn-danger:focus{box-shadow: none}.cart i{margin-right: 10px}
    </STYle>
</head>
<body>
    <?php include('header.php') ?>
    <?php 
         $server="localhost:3309";
         $user="root";
         $pass="";
         $name_db="mydb";
         $connect="";
         
         $connect=mysqli_connect($server,$user,$pass,$name_db);
         
         $product_id = $_GET['product_id'];

         $stmt = $connect->prepare("SELECT * FROM products WHERE product_id = ? ");
         $stmt->bind_param("i",$product_id);
         $stmt->execute();

         $product = $stmt->get_result();
        
    ?>
<div class="container mt-5 mb-5" >
    <div class="row d-flex justify-content-center" style="margin-top: 150px; margin-bottom:100px">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                <?php while( $row = mysqli_fetch_assoc($product)){ ?>
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="<?php echo $row['product_img'];?>" width="250" /> </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            
                            <div class="mt-4 mb-3"> 
                                <h5 class="text-uppercase"><?php echo $row['product_name'];?></h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price"><?php echo $row['product_price'];?></span>
                                </div>
                            </div>
                            <p class="about">MARQUE : <?php echo $row['product_brand'];?> <br>CYLINDRE : <?php echo $row['product_cylindre']; ?></p>
                            
                            <div class="cart mt-4 align-items-center"><a href="home.php?add_to_cart=<?php echo $product_id ?>&ip_address=<?php echo $ip ?>"> <button name="add_to_cart" class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button></a> <i class="fa fa-heart text-muted"></i> <i class="fa fa-share-alt text-muted"></i> </div> 
                        </div>
                    </div>
                    <?php } ?>
                    

                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
  
</body>
</html>






