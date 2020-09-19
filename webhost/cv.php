<?php require_once('parametres/connexion.php'); ?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8"/>
            <link rel="stylesheet" href="cv.css"/>
            <link rel="stylesheet" href="css/normalize.css"/>
            <link rel="stylesheet" href="css/nav-bar-clic.css"/>
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <script src="https://kit.fontawesome.com/747acc35b5.js" crossorigin="anonymous"></script>
            <title>CV</title>
        </head>
        <body>
           <?php require_once('parametres/nav.php'); ?>
            <div id="banner">
                <div class="content" data-aos="flip-right">
                    <h1>CV</h1>
                </div>
            </div>
            <section>
                <aside data-aos="flip-left">
                    <h2>Contact</h2>
                    <p>Adresse:<br> 43 rue du 6 septembre 1914</p>
                    <p>Ville/Cp:<br> Recquignies 59245</p>
                    <p>Numero Tel:<br> 07/ 81 /14/ 85/ 05</p>
                    <p>Email:<br> nicolascaulier@gmail.com</p>
                </aside>
                <article>
                    <div class="formation"data-aos="zoom-in-up">
                    <h2>Formation</h2>
                    <p>Bts: Assistant Manager, Notre Dame de Grâce Maubeuge</p>
                    <p>Bac ES jeanne d'arc: Aulnoye Aymerie</p>
                    <h2>Expériences Professionnelles</h2>
                    <p>Contrat de professionnalisation PSA Hordain</p>
                    <p>Formation Conducteur de train SNCF Hellemmes Formation TB 16/11</p>
                    <p>Contrat de professionnalisation Auchan Louvroil</p>
                    <p>Contrat à durée déterminée Carrefour</p>
                    <p>Contrat étudiant Intermarché</p>
                    </div>
                    
                     
                    <h2>Compétences</h2>
                    <div class="competence"data-aos="fad-right">
                    <div class="savoir-etre"data-aos="flip-left">
                    <h3>Savoir-être</h3>
                    <ul>
                        <li>Ponctuel</li>
                        <li>Autonome</li>
                        <li>Rigoureux</li>
                        <li>Sérieux</li>
                        <li>polyvalent</li>
                    </ul>
                    </div>
                    <div class="savoir-faire"data-aos="flip-right">
                    <h3>Savoir-faire</h3>
                    <ul>
                        <li>Organiser un rayon, réapprovisionner, facing ...</li>
                        <li>utilisation de différents logiciels (pack office)</li>
                        <li>élaborer un site (html, css, js, php..)</li>
                        <li>Montage vidéo (Vegas Pro, PhotoFiltre, ApowerREC)</li>
                        <li><a href="https://www.youtube.com/results?search_query=steelux2610" target="blank">Ma chaine youtube</a></li>
                    </ul>
                    </div>
                </div>
                <div><h2>Centre d'interet</h2>
                <div class="flex">
                    <div class="test" data-aos="fade-right"><a href="morpion.php" target="blank"><img src="img/morpion.jpg"alt="film"width="350px"height="200px"title="film"class="film"/></a>Ma Fonction jeux</div>
                    <div class="test" data-aos="zoom-in"><a href="film-série.php" target="blank"><img src="img/serie.jpg"alt="serie"width="350px"height="200px"title="serie"class="serie"/></a>Film-Série</div>
                    <div class="test" data-aos="zoom-in"><a href="jeux.php" target="blank"><img src="img/jeuxvideo.jpg"alt="jeux"width="350px"height="200px"title="jeux"class="jeux"/></a>Jeux vidéo</div>
                    <div class="test" data-aos="zoom-in"><a href="science.php" target="blank"><img src="img/science.jpg"alt="science"width="350px"height="200px"title="science"class="science"/></a>Science</div>
                    <div class="test" data-aos="fade-left"><a href="histoire.php" target="blank"><img src="img/histoire.jpg"alt="histoire"width="350px"height="200px"title="histoire"class="histoire"/></a>Histoire</div>
                </div>
             </div>
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40791.244815860264!2d3.9260860130012976!3d50.283475035471476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2429dcd7d7533%3A0x40af13e81646100!2s59600%20Maubeuge!5e0!3m2!1sen!2sfr!4v1591182121889!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
             </article>
            </section>
            <?php require_once('parametres/footer.php'); ?>
            <div id="scroll" class="scroll">
                <a href="#top"><img src="img/boutontop.png"/></a>
            </div>
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>AOS.init();</script>
            <script src="js/nav-bar-clic.js"></script>
            <script src="js/scroll.js"></script>
        </body>
    </html>