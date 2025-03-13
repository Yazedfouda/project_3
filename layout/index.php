<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="css/normalize.css" />
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Cardo:ital,wght@0,400;0,700;1,400&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <!-- css -->
<link rel="stylesheet" href="css/index.css" />
<!-- font asweam -->
<link rel="stylesheet" href="css/all.css" />
<!-- bootsrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php 
    include("head.php");
    ?>

    <section class="hero-section">
        <div class="overlay"></div>
        <div class="content text-center text-white">
            <h1>Learning Today, Leading Tomorrow</h1>
            <p>We are a team of talented designers making websites with Bootstrap</p>
            <a href="#" class="btn btn-outline-light">Get Started</a>
        </div>
    </section>
    <!-- جزء الكتب -->
        <div class="continer">
            <h4 >Some quality items</h4>
            <div class="titel">
                <h1>Featured Books</h1>
        <div class="line"></div>
            </div>
        </div>
        <!-- المحتوي -->

         <div class="cont-card" style="margin-left:5%; display:flex">
            <div class="card" style="width: 18rem; margin-left:5px;">
                <img src="images/main-banner1.jpg" class="card-img-top" alt="..." style="height:300px">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Card title</h5>
                    <a href="#" class="btn btn-primary" style="width: 100px; margin-left:15px">Read</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-left:5px;">
                <img src="images/product-item1.jpg" class="card-img-top" alt="..." style="height:300px">
                <div class="card-body">
                    <h5 class="card-title"  style="text-align: center;">Card title</h5>
                    <a href="#" class="btn btn-primary" style="width: 100px; margin-left:15px">Read</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-left:5px;">
                <img src="images/product-item2.jpg" class="card-img-top" alt="..." style="height:300px">
                <div class="card-body">
                    <h5 class="card-title"  style="text-align: center;">Card title</h5>
                    <a href="#" class="btn btn-primary" style="width: 100px; margin-left:15px">Read</a>
                </div>
            </div>
            <div class="card" style="width: 18rem; margin-left:5px;">
                <img src="images/product-item3.jpg" class="card-img-top" alt="..." style="height:300px">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <a href="#" class="btn btn-primary" style="width: 100px; margin-left:15px">Read</a>
                </div>
            </div>
        </div>
        <a class="icon-link icon-link-hover mt-3" style="--bs-link-hover-color-rgb: 25, 135, 84; font-size:18px;margin-left:85%;text-decoration: none;" href="#">
            View all products
            <svg class="bi" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
        </a>
        
        <!-- best  -->
            <div class="continer">
            <h4 >Some quality items</h4>
            <div class="titel">
                <h1>Popular Books</h1>
        <div class="line"></div>
            </div>
        </div>

                <!-- المحتوي -->
                <div class="cont-card" style="margin-left:5%; display:flex">
                <div class="card" style="width: 18rem; margin-left:5px;">
                    <img src="images/product-item8.jpg" class="card-img-top" alt="..." style="height:300px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>

                        <a href="#" class="btn btn-primary" style="width: 100px; margin-left:15px">Read</a>
                        </div>
                    </div>
                <div class="card" style="width: 18rem; margin-left:5px;">
                    <img src="images/product-item7.jpg" class="card-img-top" alt="..." style="height:300px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#" class="btn btn-primary" style="width: 100px; margin-left:15px">Read</a>
                        </div>
                    </div>
                <div class="card" style="width: 18rem; margin-left:5px;">
                    <img src="images/product-item6.jpg" class="card-img-top" alt="..." style="height:300px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#" class="btn btn-primary" style="width: 100px; margin-left:15px">Read</a>
                        </div>
                    </div>
                <div class="card" style="width: 18rem; margin-left:5px;">
                    <img src="images/product-item5.jpg" class="card-img-top" alt="..." style="height:300px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <a href="#" class="btn btn-primary" style="width: 100px; margin-left:15px">Read</a>
                        </div>
                </div>
            </div>
            <a class="icon-link icon-link-hover mt-3" style="--bs-link-hover-color-rgb: 25, 135, 84; font-size:18px;margin-left:85%;text-decoration: none;" href="#">
            View all products
<svg class="bi" aria-hidden="true"><use xlink:href="#arrow-right"></use></svg>
</a>
<?php 
include("footer.php");
?>
</body>
</html>