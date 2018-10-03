<!DOCTYPE html>
<html>

<head>
    <title>Portfolio Paul Pinguet</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="media.css">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
</head>

<body>

    <header id="head">
        <hgroup>
            <h1>PAUL PINGUET
                <br/>DEVELOPPEUR WEB</h1>
        </hgroup>
    </header>

    <nav id="menu">
        <input type="checkbox" id="link">
        <label for="link">
            <div></div>
        </label>
        <ul id="bgOpacity">
            <li class="active">
                <a href="#head" class="scroll">ACCUEIL</a>
            </li>
            <li>
                <a href="#proposLink" class="scroll">À PROPOS</a>
            </li>
            <li>
                <a href="#competencesLink" class="scroll">COMPÉTENCES</a>
            </li>
            <li>
                <a href="#portfolioLink" class="scroll">PORTFOLIO</a>
            </li>
            <li>
                <a href="#formationsLink" class="scroll">FORMATIONS</a>
            </li>
            <li>
                <a href="#contactLink" class="scroll">ME CONTACTER</a>
            </li>
        </ul>
    </nav>
    <div id="progress"></div>

    <main id="main">
        <h2 id="proposLink">À PROPOS</h2>
        <section>
            <img src="img/avatar.jpg" />
            <p>
                Bonjour, je m’appelle Paul Pinguet et j’ai 30 ans. Depuis très jeune, j’ai été intéressé par la création de site internet et la programmation en général. <br /><br />
J’ai créé mon premier site web en flash pour ensuite découvrir le html/css et php au travers d’une formation professionnelle. Puis  j’ai fait un BTS informatique en alternance à Esicad Montpellier.<br />
J’ai travaillé dans le domaine viticole familial à Montarnaud tout en continuant en parallèle le développement web.<br /><br />
Aujourd’hui, afin d’en faire mon métier à plein temps, je fais une formation chez objectif 3w à Montferrier-sur-Lez afin de mettre à niveau mes compétences et d’apprendre le javascript.<br /><br />
Je suis à la recherche d’un stage du lundi 3 décembre au vendredi 15 février.

            </p>
            <a href="#">Télécharger mon CV</a>
        </section>
    </main>

    <div class="imgDeco" id="imgDecoTop"></div>

    <section id="competences">
        <h2 id="competencesLink">COMPÉTENCES TECHNIQUES</h2>
        <article>
            <ul class="draw">
                <li>
                    <h3>Back-end</h3>
                </li>
                <li>
                    <hr/>
                </li>
                <li>PHP</li>
                <li>SQL</li>
                <li>Mysql</li>
                <li>CMS (Joomla, Wordpress, phpbb, simple-machine)</li>
            </ul>

            <ul class="draw">
                <li>
                    <h3>Front-end</h3>
                </li>
                <li>
                    <hr/>
                </li>
                <li>Html</li>
                <li>Css</li>
                <li>Javascript</li>
                <li>Jquery</li>
                <li>Framework css</li>
            </ul>

            <ul class="draw">
                <li>
                    <h3>Logiciels</h3>
                </li>
                <li>
                    <hr/>
                </li>
                <li>Versionning (Git)</li>
                <li>IDE (Visual studio, netbeans...)</li>
                <li>Flash</li>
                <li>Retouche d'image (Photoshop)</li>
                <li>Vidéo (after effect, première)</li>
                <li>Audio (Audacity, ableton...)</li>
            </ul>

        </article>

    </section>

    <section id="portfolio">
        <h2 id="portfolioLink">PORTFOLIO</h2>
        <article>
            <figure>
                <a href="#open-planhyg" onclick=openModal(this)>
                    <img src="img/planhyg.jpg" />
                    <figcaption>
                        <span class="titrePortfolio">Plan d’hygiène</span>
                        Générateur de document pdf
                        <br/> php/mysql
                    </figcaption>
                </a>
                <div id="open-planhyg" class="modal-window">
                    <div>
                        <a href="#modal-close" title="Close" class="modal-close" onclick=closeModal(this)>Fermer</a>
                        <div>
                            <img src="img/planhyg.jpg" />
                            <p>
                            <span class="titrePortfolio">Plan d’hygiène</span>
                             Générateur de document pdf
                            php/mysql
                            </p>
                        </div>
                    </div>
                </div>
            </figure>

            <figure>
                <a href="#open-bannerlord" onclick=openModal(this)>
                    <img src="img/bannerlord.jpg" />
                    <figcaption>
                        <span class="titrePortfolio">Fansite projet personnel</span>
                        php/jquery/mysql
                    </figcaption>
                </a>
                <div id="open-bannerlord" class="modal-window" >
                    <div>
                        <a href="#modal-close" title="Close" class="modal-close" onclick=closeModal(this)>Fermer</a>
                        <div>
                            <img src="img/bannerlord.jpg" />
                            <p>
                            <span class="titrePortfolio">Fansite projet personnel</span>
                            php/jquery/mysql
                            </p>
                        </div>
                    </div>
                </div>
            </figure>
            <figure>
                <a href="#open-gayon" onclick=openModal(this)>
                    <img src="img/gayon.jpg" />
                    <figcaption>
                        <span class="titrePortfolio">Site d’informations</span>
                        Designer de parcours de golf
                        php/mysql
                    </figcaption>
                </a>
                <div id="open-gayon" class="modal-window">
                    <div>
                        <a href="#modal-close" title="Close" class="modal-close" onclick=closeModal(this)>Fermer</a>
                        <div>
                            <img src="img/gayon.jpg" />
                            <p>
                            <span class="titrePortfolio">Site d’informations</span>
                            Designer de parcours de golf
                            php/mysql
                            </p>
                        </div>
                    </div>
                </div>
            </figure>
            <figure>
                <a href="#open-market" onclick=openModal(this)>
                    <img src="img/market.jpg" />
                    <figcaption>
                        <span class="titrePortfolio">Site marchand</span>
                        Site fictif
                        <br/> php/mysql
                    </figcaption>
                </a>
                <div id="open-market" class="modal-window">
                    <div>
                        <a href="#modal-close" title="Close" class="modal-close" onclick=closeModal(this)>Fermer</a>
                        <div>
                            <img src="img/market.jpg" />
                            <p>
                            <span class="titrePortfolio">Site marchand</span>
                            Site fictif
                            <br/> php/mysql
                            </p>
                        </div>
                    </div>
                </div>
            </figure>

            <figure>
                <a href="#open-feng" onclick=openModal(this)>
                    <img src="img/feng.jpg" />
                    <figcaption>
                        <span class="titrePortfolio">Site d’informations</span>
                        Fengshui
                        <br/> php/mysql
                    </figcaption>
                </a>
                <div id="open-feng" class="modal-window">
                    <div>
                        <a href="#modal-close" title="Close" class="modal-close" onclick=closeModal(this)>Fermer</a>
                        <div>
                            <img src="img/feng.jpg" />
                            <p>
                            <span class="titrePortfolio">Site d’informations</span>
                            Fengshui
                            <br/> php/mysql
                        </div>
                    </div>
                </div>
            </figure>
            <figure>
                <a href="#open-tom" onclick=openModal(this)>
                    <img src="img/tom.jpg" />
                    <figcaption>
                        <span class="titrePortfolio">Site d’informations</span>
                        Organisateur d’évenements
                        <br/> php/mysql
                    </figcaption>
                </a>
                <div id="open-tom" class="modal-window">
                    <div>
                        <a href="#modal-close" title="Close" class="modal-close" onclick=closeModal(this)>Fermer</a>
                        <div>
                            <img src="img/tom.jpg" />
                            <p>
                            <span class="titrePortfolio">Site d’informations</span>
                            Organisateur d’évenements
                            <br/> php/mysql
                            </p>
                        </div>
                    </div>
                </div>
            </figure>
            <figure>
                <a href="#open-yann" onclick=openModal(this)>
                    <img src="img/yann.jpg" />
                    <figcaption>
                        <span class="titrePortfolio">Site d'informations</span>
                        Site web avocat de Caen
                        <br/> wordpress
                    </figcaption>
                </a>
                <div id="open-yann" class="modal-window">
                    <div>
                        <a href="#modal-close" title="Close" class="modal-close" onclick=closeModal(this)>Fermer</a>
                        <div>
                            <img src="img/yann.jpg" />
                            <p>
                            <span class="titrePortfolio">Site d'informations</span>
                            Site web avocat de Caen
                            <br/> wordpress
                            </p>
                        </div>
                    </div>
                </div>
            </figure>
        </article>
    </section>

    <div class="imgDeco" id="imgDecoBot"></div>

    <section id="formations">
        <h2 id="formationsLink">FORMATIONS</h2>
        <article>
            <ul>
                <li>Bep electronique • lycée Lasalle • 2 ans</li>
                <li>Bac pro audiovisuel et multimédia • lycée Champollion • 2 ans</li>
                <li>Développement web • acfa multimédia • 6 mois</li>
                <li>Bts informatique de gestion • esicad • 2 ans</li>
                <li>Développeur logiciel • objectif 3W • 9 mois</li>
            </ul>
        </article>
    </section>

    <section id="contact">
        <h2 id="contactLink">ME CONTACTER</h2>
        <fieldset>
            <form action="send.php" method="post">
                <span>Votre nom*</span>
                <span>Votre prénom</span>
                <span>Votre email*</span>
                <input type="text" name="nom" id="nomForm" value="<?php if( isset( $_POST['nom'] ) && array_key_exists( 'submitFrmTxt', $_POST ) ) { echo htmlentities( $_POST['nom'] ); } ?>">
                <input type="text" name="prenom" id="prenomForm" value="<?php if( isset( $_POST['prenom'] ) && array_key_exists( 'submitFrmTxt', $_POST ) ) { echo htmlentities( $_POST['prenom'] ); } ?>">
                <input type="email" name="email" id="emailForm" value="<?php if( isset( $_POST['email'] ) && array_key_exists( 'submitFrmTxt', $_POST ) ) { echo htmlentities( $_POST['email'] ); } ?>">
                <textarea id="contenuForm" name="contenuForm" ><?php if( isset( $_POST['contenuForm'] ) && array_key_exists( 'submitFrmTxt', $_POST ) ) { echo htmlentities( $_POST['contenuForm'] ); } ?></textarea>
                <input type="submit" name="submitFrmTxt" value="Envoyer le message" id="validerForm">
                (*) Champs requis
                <input name="1" type="hidden" value="" /><input name="2" style="display:none;" type="text" value="Ne pas remplir" />
            </form>
        </fieldset>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        <?php include 'main.js'; ?>
    </script>

</body>

</html>
