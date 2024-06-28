<?php
    
    if(isset($_GET['add_to_cart'])){
        $server="localhost:3309";

        include('connect.php');
         
         $ip = getIPAddress(); 
         $get_product_id = $_GET['add_to_cart'];
         $sql = "SELECT * FROM `cart_details` WHERE ip_address=$ip and 
                product_id=$get_product_id ";

         $result = mysqli_query($connect , $sql);
         $count = mysqli_num_rows($result);
         if( $count>0){
            echo "<script> alert(' CE PRODUIT EXISTE DEJA DANS VOTRE PANIER') <script>";
            echo "<script>window.open('home.php')<script>";
         }else{
            $insert_querry = "INSERT INTO `cart_details` ( product_id , ip_address , quantity) VALUES ('$get_product_id','$ip',0)";
            $result = mysqli_query($connect , $insert_querry);
         }

    }
 ?>