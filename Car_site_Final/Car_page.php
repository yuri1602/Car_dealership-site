<?php

   @include 'upload/config.php';
   
   if(isset($_POST['add_product'])){
   
      $product_title = $_POST['product_title'];
      $product_price = $_POST['product_price'];
      $product_description = $_POST['product_description'];
      $product_image = $_FILES['product_image']['name'];
      $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
      $product_image_folder = 'uploaded_img/'. $product_image;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logo.png">
    <title>Налични Коли</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/Style_car.css">
    <!--Box Icons-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Navbar -->
    <?php include("app/includes/heder.php") ?>
    
    <section class="cars" id="cars">
            <div class="cars-container container">
                <div class="box-car">
              <?php  $select = mysqli_query($conn, "SELECT * FROM cars");   ?>
                <?php while($row = mysqli_fetch_assoc($select)){ ?>
                    
                        <div class= "img"><img src="upload/uploaded_img/<?php echo $row['image']; ?>"></div>
                        <div class="des"><h4 ><?php echo $row['description']; ?> </h4></div>
               
                    
                                <div class=""> 
                                    <h2 > <?php echo $row['title']; ?> </h2>
                                    <p> <?php echo $row['price']; ?> лв.</p>
                                    </div>
                                    
                
                                
                </div>
                
                    <div class="box-car">

                
                    
                    <?php }?>
                </div>
                
            </div>
                
    </section>
  
    <!-- Footer-->
    <?php include("app/includes/footer.php") ?>
    <!-- Js Link -->
    <script src="main.js"></script>
</body>
</html>