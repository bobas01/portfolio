<?php
try {
    $db = new PDO ('mysql:host=localhost;dbname=formulaireportfolio;charset=utf8','root');
}
catch(PDOException $e){
    echo "Erreur :" . $e->getMessage();
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOBAS.DEV</title>
    <link rel="stylesheet" href="./asset/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="row-limit-size">
            <div>
                <figure id="logo">
                    <img src="./asset/img/divers/logoCircle.svg" alt="logo">
                </figure>
                <figure id="pseudo">
                    <img src="./asset/img/divers/BOBAS.svg" alt="bobas.dev">
                </figure>
            </div>
        </div>
    </header>
    <section id="presentation">
        <div class="row-limit-size">
            <div>
                <figure>
                    <img src="./asset/img/icon/panda_with_computer.png" alt="panda_with_computer">
                </figure>
                <div>
                    <article>
                        <h1>Alexandre SEQUEIRA</h1>
                        <h3>Développeur fullstack</h3>
                    </article>
                    <div id="links">
                        <a class="icon" href="https://www.linkedin.com/in/alexandre-sequeira-258a29137/"><img
                                src="./asset/img/icon/icons8-linkedin-2.svg" alt="linkedin"></a>
                        <a class="icon" href="https://github.com/bobas01"><img src="./asset/img/icon/icons8-github.svg"
                                alt="github"></a>
                        <button id="C.V"><a href="#">Mon C.V.</a></button>
                    </div>
                </div>
            </div>
            <div id="txtPresentation">
                <img src="./asset/img/divers/cadrePhone.svg" alt="cadre1">
                <img src="./asset/img/divers/cadreStick.svg" alt="cadre2">

                <p>
                    Développeur web fullstack passionné par la création de sites web et d'applications. J'ai une
                    expérience
                    d’un an dans le domaine et j'aime travailler sur des projets stimulants qui me permettent de
                    repousser
                    mes limites. <br><br>

                    Je suis compétent dans plusieurs langages de programmation tels que le HTML, SCSS, CSS, JS et
                    PHP.
                    J'aime travailler en équipe et je suis toujours à la recherche de nouveaux défis. <br><br>

                    En dehors du développement web, j'aime le sport, les jeux vidéo, les mangas, et les grands
                    voyages.</p>

            </div>

        </div>
    </section>

    <section id="responsive">

        <div class="row-limit-size">
            <article>
                <h2>Développement web responsive</h2>
                <img src="./asset/img/projet/mokup-multidevice 1.webp" alt="mokup portfolio">
            </article>
        </div>
    </section>
    <section id="competences">
        <div class="row-limit-size">
            <article>
                <h2>Mes compétences</h2>
                <ul>
                    <li><img src="./asset/img/icon/htmlCirclePhone.svg" alt="html"></li>
                    <li><img src="./asset/img/icon/cssCirclePhone.svg" alt="CSS"></li>
                    <li><img src="./asset/img/icon/jsCirclePhone.svg" alt="JS"></li>
                    <li><img src="./asset/img/icon/sassCirclePhone.svg" alt="SASS"></li>
                    <li><img src="./asset/img/icon/phpCirclePhone.svg" alt="PHP"></li>
                    <li><img src="./asset/img/icon/bootstrapCirclePhone.svg" alt="bootstrap"></li>
                    <li><img src="./asset/img/icon/pythonCirclePhone.svg" alt="Python"></li>
                    <li><img src="./asset/img/icon/reactCirclePhone.svg" alt="reactJS"></li>
                    <li><img src="./asset/img/icon/figmCirclePhone.svg" alt="figma"></li>
                    <li><img src="./asset/img/icon/gitCirclePhone.svg" alt="github"></li>
                </ul>
            </article>
        </div>
    </section>
    <section id="projet">
        <div class="row-limit-size">
            <h2>Mes projets</h2>
            <div id="slider">
                <div id="leftArrow">
                    <img src="./asset/img/icon/leftArrow.svg" alt="left arrow">
                </div>
                <div id="window-slider">
                    <div id="list-slide">
                        <div class="slide"><img src="./asset/img/projet/projetKitsuthèque.jpg" alt="kitsuthèque"></div>
                        <div class="slide"><img src="./asset/img/projet/projetJadoo.jpg" alt="jadoo"></div>
                        <div class="slide"><img src="./asset/img/projet/projetGite.jpg" alt="Le gite du panda"></div>
                        <div class="slide"><img src="./asset/img/projet/projetflag.jpg" alt="flags"></div>
                        <div class="slide"><img src="./asset/img/projet/ProjetResto.jpg" alt="restaurant"></div>
                        <div class="slide"><img src="./asset/img/projet/projetclosdeMarsault.jpg"
                                alt="Leclos de projetclosdeMarsault"></div>
                        <div class="slide"><img src="./asset/img/projet/projetVueLamp.jpg" alt="VueLamp"></div>
                    </div>
                </div>
                <div id="rightArrow">
                    <img src="./asset/img/icon/rightArrow.svg" alt="arrow">
                </div>
            </div>
            <figure id="swipe"><img src="./asset/img/icon/doubleArrow.svg" alt="swipe"
                    style="width: 50px; height: 50px;"></figure>
        </div>
    </section>
    <footer>
        <div class="row-limit-size">
            <h2>Contact</h2>
            <div id="contact">
            <div id="myInfo">
                <p>Alexandre SEQUEIRA</p>
                <p id="number">0628657515</p>
                <p id="mail">alexandre.sequeira01@gmail.com</p>
                <p id="address">63 rue Maryse Bastié <br>01000 Saint-Denis-lès-Bourg</p>                
            </div>
            <form action="mailto:alexandre.sequeira01@gmail.com" method="post" enctype="text/plain">
  <label for="name">Nom :</label><br>
  <input type="text" id="name" name="name" required><br>

  <label for="surname">Prénom :</label><br>
  <input type="text" id="surname" name="surname" required><br>

  <label for="phone">Numéro de téléphone :</label><br>
  <input type="tel" id="phone" name="phone" required><br>

  <label for="email">E-mail :</label><br>
  <input type="email" id="email" name="email" required><br>

  <label for="message">Message :</label><br>
  <textarea id="message" name="message" rows="5" cols="40" required></textarea><br>

  <input id="submit" type="submit" value="Envoyer">
</form>
</div>
            
                <!-- <iframe data-tally-src="https://tally.so/embed/wgaOzO?alignLeft=1&hideTitle=1&dynamicHeight=1" loading="lazy" width="100%" height="300" frameborder="0" marginheight="0" marginwidth="0" title="null"></iframe><script>var d=document,w="https://tally.so/widgets/embed.js",v=function(){"undefined"!=typeof Tally?Tally.loadEmbeds():d.querySelectorAll("iframe[data-tally-src]:not([src])").forEach((function(e){e.src=e.dataset.tallySrc}))};if("undefined"!=typeof Tally)v();else if(d.querySelector('script[src="'+w+'"]')==null){var s=d.createElement("script");s.src=w,s.onload=v,s.onerror=v,d.body.appendChild(s);}</script> -->
        </div>
    </footer>

    <script src="./main.js"></script>
</body>

</html>