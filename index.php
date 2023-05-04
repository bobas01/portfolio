<?php include_once './header.php' ?>
<main>
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
                        <a class="icon" target="_blank" href="https://www.linkedin.com/in/alexandre-sequeira-258a29137/"><img src="./asset/img/icon/icons8-linkedin-2.svg" alt="linkedin"></a>
                        <a class="icon" target="_blank" href="https://github.com/bobas01"><img src="./asset/img/icon/icons8-github.svg" alt="github"></a>
                        <button id="C.V"><a target="_blank" href="./asset/Alexandre Sequeira.pdf">Mon C.V.</a></button>
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
                <img src="./asset/img/projet/smartmockups_lg26j38g.jpg" alt="mokup portfolio">
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
            <p id="txtProjet">Cliquer sur le mokup pour accéder au projet et pour les détails de chaque projet : <br> <a href="./projet.php">Cliquer ici</a></p>
            <div id="slider">
                <div id="leftArrow">
                    <img src="./asset/img/icon/leftArrow.svg" alt="left arrow">
                </div>
                <div id="window-slider">
                    <div id="list-slide">
                        <div class="slide"><a target="_blank" href="../Kitsu-theque "><img src="./asset/img/projet/projetKitsuthèque.jpg" alt="kitsuthèque"></a></div>
                        <div class="slide"><a target="_blank" href="../judo-sushi"><img src="./asset/img/projet/projetJadoo.jpg" alt="jadoo"></a></div>
                        <div class="slide"><a target="_blank" href="../caeliV2"><img src="./asset/img/projet/CaeliV2.jpg" alt="CaeliV2"></a></div>
                        <div class="slide"><a target="_blank" href="../gite-du-panda"><img src="./asset/img/projet/projetGite.jpg" alt="Le gite du panda"></a></div>
                        <div class="slide"><a target="_blank" href="../glossaire-drapeau"><img src="./asset/img/projet/projetflag.jpg" alt="flags"></a></div>
                        <div class="slide"><a target="_blank" href="../restaurant"><img src="./asset/img/projet/ProjetResto.jpg" alt="restaurant"></a></div>
                        <div class="slide"><a target="_blank" href="../clos-marsault_web"><img src="./asset/img/projet/projetclosdeMarsault.jpg" alt="Leclos de projetclosdeMarsault"></a></div>
                        <div class="slide"><a target="_blank" href="../VueLamp2"><img src="./asset/img/projet/projetVueLamp.jpg" alt="VueLamp"></a></div>
                    </div>

                </div>
                <div id="rightArrow">
                    <img src="./asset/img/icon/rightArrow.svg" alt="arrow">
                </div>
            </div>
            <figure id="swipe"><img src="./asset/img/icon/doubleArrow.svg" alt="swipe" style="width: 50px; height: 50px;"></figure>
        </div>
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
            <form method="post" enctype="text/plain">
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
                $entete .= 'From: webmaster@portfolio.fr' . "\r\n";
                $entete .= '<h3> ' . $_POST['name'] . " " . $_POST['surname'] . "</h3>";

                $entete .= "<br>" . $_POST['phone'];
                $entete .= "<br>" . $_POST['email'];


                $message = "<p>" . htmlspecialchars($_POST['message']) . "</p>";

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