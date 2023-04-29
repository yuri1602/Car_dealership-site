
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/logo.png">
    <title>Начало</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Box Icons-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!-- Navbar -->
    <?php include("app/includes/heder.php") ?>
    
    <!-- Home -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>При нас има всичко <br>Ти искаш нова <span>кола</span> сега</h1>
            <p>Тя те очаква при нас</p>
            <!-- Home button -->
            <a href="Car_page.php" class="btn">Натисни тук сега</a> 
        </div>
    </section>
    <!-- Car Section -->
    <section class="cars" id="cars">
        <div class="heading">
            <span>Всички коли</span>
            <h2>С 2 години гаранция</h2>
            <p>Всички автомобили са проверени в сервиз</p>
        </div>
        <!-- Cars Container -->
        <div class="cars-container container">
            <!-- Box 1 -->
            <div class="box">
                <img src="assets/img/1.png" alt="">
                <h2>Land Rover</h2>
            </div>
            <!-- Box 2 -->
            <div class="box">
                <img src="assets/img/2.png" alt="">
                <h2>BMW X6</h2>
            </div>
            <!-- Box 3 -->
            <div class="box">
                <img src="assets/img/3.png" alt="">
                <h2>Audi A8</h2>
            </div>
            <!-- Box 4 -->
            <div class="box">
                <img src="assets/img/4.png" alt="">
                <h2>Mercedes-Benz E class</h2>
            </div>
            <!-- Box 5 -->
            <div class="box" herf="">
                <img src="assets/img/5.png" alt="">
                <a href="#home"><h2>Porsche Cayenne</h2></a>
            </div>
            <!-- Box 6 -->
            <div class="box">
                <img src="assets/img/6.png" >
                <h2>BMW X5 M-PACK</h2>
            </div>
        </div>
        </div>
     </div>
    </section>
    
    <!-- About -->
    <section class="about container" id="about">
        <div class="about-img">
            <img src="" alt="">
        </div>
        <div class="about-text">
            <span>Въпроси за употреба</span>
            <h2>Ниски цени за <br> Качествени Автомобили</h2>
            <p>Цените са добри</p>
            <!-- About Button -->
            <a href="Car_page.php" class="btn">Рабери повече</a>
        </div>
    </section>
    <!-- Footer-->
    <?php include("app/includes/footer.php") ?>
    <!-- Js Link -->
    <script src="assets/js/main.js"></script>
</body>
</html>