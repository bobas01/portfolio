<?php include_once './header.php' ?>
<main>
   <section id="presentation">
  <div class="row-limit-size has-animation animation-ltr" data-delay="1000">
    <div>
      <figure>
        <img id="panda" src="./asset/img/icon/panda_with_computer.png" alt="panda_with_computer">
      </figure>
      <div>
        <article>
          <h1>Alexandre SEQUEIRA</h1>
          <h3>Développeur fullstack</h3>
        </article>
        <div id="links">
          <a class="icon" target="_blank" href="https://www.linkedin.com/in/alexandre-sequeira-258a29137/"><img src="./asset/img/icon/icons8-linkedin-2.svg" alt="linkedin"></a>
          <a class="icon" target="_blank" href="https://github.com/bobas01"><img src="./asset/img/icon/icons8-github.svg" alt="github"></a>
          <button class="click-btn" id="C.V"><a target="_blank" href="./asset/Alexandre Sequeira.pdf">Mon C.V.</a></button>
        </div>
      </div>
    </div>
    <div id="txtPresentation" class="has-animation animation-ltr" data-delay="1500">
      <img src="./asset/img/divers/cadrePhone.svg" alt="cadre1">
      <img src="./asset/img/divers/cadreStick.svg" alt="cadre2">
      <p class="text">Développeur web full stack passionné par la création de sites web et d'applications, j'ai une expérience d'un an dans le domaine et j'aime travailler sur des projets stimulants qui me permettent de repousser mes limites.

        Je suis compétent dans plusieurs langages de programmation tels que HTML, SCSS, CSS, JS et PHP. J'aime travailler en équipe et je suis toujours à la recherche de nouveaux défis.

        En dehors du développement web, j'aime le sport, les jeux vidéo, les mangas et les grands voyages.</p>
    </div>
  </div>
</section>

    <section id="responsive">

        <div class="row-limit-size">
            <article>
                <h2>Développement web responsive</h2>
                <img src="./asset/img/projet/smartmockups_lg26j38g.jpg" alt="mokup portfolio">
            </article>
        </div>
    </section>
    <section id="competences">
        <div class="row-limit-size">
            <article>
                <h2 class="image">Mes compétences</h2>
                <ul>
                    <li class="image"><img class="image" src="./asset/img/icon/htmlCirclePhone.svg" alt="html"> HTML</li>
                    <li class="image"><img  class="image" src="./asset/img/icon/cssCirclePhone.svg" alt="CSS"> CSS</li>
                    <li class="image"><img class="image" src="./asset/img/icon/jsCirclePhone.svg" alt="JS">Javascript</li>
                    <li class="image"><img class="image" src="./asset/img/icon/sassCirclePhone.svg" alt="SASS">SCSS</li>
                    <li class="image"><img class="image" src="./asset/img/icon/phpCirclePhone.svg" alt="PHP">PHP</li>
                    <li class="image"><img class="image" src="./asset/img/icon/mySQLCirclePhone.svg" alt="mySQL">mySQL</li>
                    <li class="image"><img class="image" src="./asset/img/icon/figmCirclePhone.svg" alt="figma">Figma</li>
                    <li class="image"><img class="image" src="./asset/img/icon/gitCirclePhone.svg" alt="github">Github</li>
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
                        <div class="slide"><a target="_blank" href="https://bobasdev.com/flavourfusion"><img src="./asset/img/projet/projetFlavourFusion.png" alt="flavourFusion"></a></div>
                        <div class="slide"><a target="_blank" href="https://bobasdev.com/homeaway1.0"><img src="./asset/img/projet/projetHomeAway.png" alt="homeAway"></a></div>
                        <div class="slide"><a target="_blank" href="https://bobasdev.com/kitsutheque"><img src="./asset/img/projet/projetKitsutheque.jpg" alt="kitsuthèque"></a></div>
                        <div class="slide"><a target="_blank" href="https://bobasdev.com/judo-sushi"><img src="./asset/img/projet/projetJadoo.jpg" alt="jadoo"></a></div>
                        <div class="slide"><a target="_blank" href="https://bobasdev.com/caeliV2"><img src="./asset/img/projet/CaeliV2.jpg" alt="CaeliV2"></a></div>
                        <div class="slide"><a target="_blank" href="https://bobasdev.com/gite-du-panda"><img src="./asset/img/projet/projetGite.jpg" alt="Le gite du panda"></a></div>
                        <div class="slide"><a target="_blank" href="https://glossaire-drapeau.bobasdev.com/"><img src="./asset/img/projet/projetflag.jpg" alt="flags"></a></div>
                        <div class="slide"><a target="_blank" href="https://bobasdev.com/restaurant"><img src="./asset/img/projet/ProjetResto.jpg" alt="restaurant"></a></div>
                        <div class="slide"><a target="_blank" href="https://bobasdev.com/clos-marsault"><img src="./asset/img/projet/projetclosdeMarsault.jpg" alt="Leclos de projetclosdeMarsault"></a></div>
                        <div class="slide"><a target="_blank" href="https://bobasdev.com/VueLamp"><img src="./asset/img/projet/projetVueLamp.jpg" alt="VueLamp"></a></div>
                    </div>

                </div>
                <div id="rightArrow">
                    <img src="./asset/img/icon/rightArrow.svg" alt="arrow">
                </div>
            </div>
            <figure id="swipe"><img src="./asset/img/icon/doubleArrow.svg" alt="swipe" style="width: 50px; height: 50px;"></figure>
        </div>
        <button class="click-btn" id="buttonProjet"><a href="./projet.php">En savoir plus</a></button>
    </section>
</main>

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
            <form method="post">
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
            <?php
            if (isset($_POST['message'])) {
                $entete  = 'MIME-Version: 1.0' . "\r\n";
                $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $entete .= 'From: alexandre.sequeira@bobasdev.com' . "\r\n";
                $entete .= 'Reply-To: ' . $_POST['email'] . "\r\n";




                $message = "<h3>" . $_POST['name'] . " " . $_POST['surname'] . "</h3>";
                $message .= "<p>" . htmlspecialchars($_POST['message']) . "</p>";
                $message .= $_POST['phone'];

                $retour = mail('alexandre.sequeira01@gmail.com', 'Envoi depuis page Contact', $message, $entete);
                if ($retour)
                    echo '<p>Votre message a bien été envoyé.</p>';
            }

            ?>
        </div>


    </div>
    <div id="copyright">
        <span><img src="./asset/img/icon/icons8-copyright-24.png" alt="cpopyright">Bobas.Dev 2023</span>
    </div>

</footer>

<script src="./main.js"></script>
</body>

</html>