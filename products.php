<?php
require('includes/functions.php');
$connection = dbConnect();
// haal de producten op
$statement = getProducts($connection);
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/products.css">
    <script src="script/stop-loop.js"></script>
    <title>Diensten</title>
</head>
<body>
<div class="navigation">
    <div class="navigation-content">
        <div class="navigation-button">
            <a href="about.php" class="navigation-link">OVER ONS</a>
        </div>
        <div class="navigation-button">
            <a href="products.php" class="navigation-link link-active">DIENSTEN</a>
        </div>
        <div class="navigation-logo">
            <a href="">
                <img src="images/doorlopen.gif" alt="Logo" class="navigation-logo-image" id="loop"
                     onload="setTimeout(stopLoop, 1000)">
            </a>
        </div>
        <div class="navigation-button">
            <a href="portfolio.php" class="navigation-link">PORTFOLIO</a>
        </div>
        <div class="navigation-button">
            <a href="" class="navigation-link">CONTACT</a>
        </div>
    </div>
</div>
<div class="page-content">
    <h1 class="page-content__head">portfolio</h1>
    <div class="products--product-container">
        <?php foreach ($statement as $product): ?>
            <div class="product-container">
                <img src="images/imgIndex/<?php echo $product['image'] ?>" alt="" class="product-image">
                <h2 class="product-name"><?php echo $product['product_name'] ?></h2>
                <p class="product-description"><?php echo $product['description'] ?></p>
                <a href="portfolio.php" class="product__more-button">Vraag aan</a>
            </div>

        <?php endforeach; ?>
    </div>
</div>
<footer class="kleur1">
    <section class="footer--Positionering">

        <article class="footerItems artClassSec">
            <a class="footerItems" href="#">Over ons</a>

            <a class="footerItems" href="#">Wij van Luso stellen <br>
                communicatie <br>
                boven alles.<br>
                Wij nemen u mee in <br>
                het ontwerp proces <br>
                en zorgen voor een <br>
                luxe uitkomst, waar <br>u achter staat</a>

        </article>

        <p class="footerRuimte"></p>

        <article class="footerItems artClassSec artClassSec2">
            <a class="footerItems" href="#">Links</a>
            <a class="footerItems2" href="http://firesofdestruction.nl/idp/online/index.html">Home</a>
            <a class="footerItems2" href="#">Over ons</a>
            <a class="footerItems2" href="#">Diensten</a>
            <a class="footerItems2" href="#">Portfolio</a>
            <a class="footerItems2" href="http://firesofdestruction.nl/idp/online/contact.html">Contact</a>
        </article>

        <p class="footerRuimte"></p>


        <article class="footerItems artClassSec artClassSec3">
            <a class="footerItems" href="http://firesofdestruction.nl/idp/online/contact.html">Contact</a>
            <a class="footerItems" href="#">luso.design@hotmail.com</a>
            <a class="footerItems" href="#">06 12 34 56 78</a>

            <div class="">
                <a class="footerItemsImg" href=""><img src="./images/social/linkedin.png" alt="Linkedin"></a>
                <a class="footerItemsImg" href=""><img src="./images/social/instagram.png" alt="Instagram"></a>
                <a class="footerItemsImg" href=""><img src="./images/social/facebook.png" alt="Facebook"
                                                       style="width: 15px"></a>
            </div>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" style="width: 85px"
                     alt="Valide CSS!"></a>
        </article>
    </section>
</footer>
</body>
</html>


