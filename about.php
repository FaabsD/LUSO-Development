<?php

?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/about.css">
    <script src="script/stop-loop.js"></script>
    <title>Diensten</title>
</head>
<body>
<div class="navigation">
    <div class="navigation-content">
        <div class="navigation-button">
            <a href="about.php" class="navigation-link link-active">OVER ONS</a>
        </div>
        <div class="navigation-button">
            <a href="products.php" class="navigation-link">DIENSTEN</a>
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
<div class="image-holder">
    <img src="images/imgIndex/Team-foto-large.jpg" alt="" class="big-picture">
</div>
<div class="page-content">
    <div class="about-us">
        <h1 class="about-us__head">Over ons</h1>
        <p class="about-us__text">Dit is ons team, gemotiveerd om u een product te geven waar u het helemaal mee eens
            bent. Dit is onze specialiteit aangezien we het erg belangrijk vinden om u (de klant) mee te nemen in het
            ontwerp proces. Het team deelt deze mindset om zo veel mogelijk contact te behouden en iets te leveren waar
            u zelf deel van hebt uitgemaakt. Het team staat altijd klaar en staat open voor <span class="about-us__underline">communi</span>catie.</p>

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


