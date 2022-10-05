<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" conent="Bienvenue sur mon site, je suis concepteur designer UI et vous pourrez découvrir mes réalisations graphiques à travers diverses sections, ainsi que les sites web que j'ai réalisé.">
    <script type="text/javascript" src="./js/sidenave.js" defer></script>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Roboto&display=swap" rel="stylesheet">
    <link rel="icon" href="./img/favicon.png"/>
    <title>THEVENEAU Lilian - Infographiste / Web Designer</title>
</head>
<body>
    <nav>
        <span id="NOM"><a href="#acceuil"><strong>Lilian THEVENEAU</strong></a></span>
        <ul id="navigation">
            <li class="section"><a href="#realisations">Réalisations</a><span class="barre">|</span></li>
            <li class="section"><a href="#me">Me connaître</a><span class="barre">|</span></li>
            <li class="section"><a href="#contact">Contact</a></li>
        </ul>
        <a href="#none" id="openBtn">
            <span class="burger-icon">
              <span></span>
              <span></span>
              <span></span>
            </span>
        </a>
    </nav>
    <div id="mySidenav" class="sidenav">
        <a id="closeBtn" href="#none" class="close">×</a>
        <ul>
          <li  class="liens" id="lien1"><a href="#realisations">Réalisations</a></li>
          <li  class="liens" id="lien2"><a href="#me">Me connaître</a></li>
          <li  class="liens" id="lien3"><a href="#contact">Contact</a></li>
        </ul>
      </div>
    <span id="infographiste"><strong>infographiste</strong></span>
    <section id="acceuil">
        <span id="concepteur"><strong>Infographiste</strong></span>
        <div id="logo_L"><img src="./img/LOGO_VERS1.png" alt="logo_L"></div>
        <span id="designer"><strong>WEB Designer</strong></span>
    </section>
    <section id="realisations">
        <div class="imagesclic">
            <a href="./html/logo.html">
                <img src="./img/logotest.png" alt="Logo">
            
            <span class="black_desc">LOGOS</span>
            </a>
        </div>
        <div class="imagesclic">
            <a href="./html/visuels.html"><img src="./img/samurai.png" alt="samurai" id="samurai">
            <span class="white_desc">VISUELS</span>
            </a>
        </div>
        <div class="imagesclic">
            <a href="./html/print.html"><img src="./img/Pleasure.png" alt="Simplest Pleasures" id="pleasures">
            <span class="white_desc" >PRINT</span>
            </a>
        </div>
        <div class="imagesclic">
            <a href="./html/web.html"><img src="./img/web.jpg" alt="web">
            <span class="black_desc" id="web">WEB</span>
            </a>
        </div>
    </section>
    <hr class="barresepa">
    <section id="me">
        <div id="photo"><img src="./img/lilian.png" alt="Lilian"></div>
        <div id="bio">
            <p><span id="titre">Qui suis-je ?</span><br>
                <span id="presentation">Né en Bourgogne, je développe un intérêt pour l'informatique très tôt dans ma vie.<br>
                Je savais dès le départ que ma profession tournerait autour de ce domaine, sans savoir vraiment dans quoi me spécialiser.<br>
                Après mon BAC, je décide d'entreprendre des études dans le développement software, sans succès je commence à m'intéresser au développement web.<br>
                Avec une formation de concepteur designer UI/UX je retrouve tout ce que j'aime dans l'informatique, de l'infographie au design de sites web.
                Aujourd'hui je suis formé pour proposer mes servives, en design comme en conception de sites, et tout cela avec passion.</span>
            </p>
        </div>
    </section>
    <hr class="barresepa">
    <section id="contact">
        <ul id="reseaux">
            <li><i class="fa-brands fa-instagram"></i></li>
            <li><i class="fa-brands fa-facebook"></i></li>
            <li><i class="fa-brands fa-linkedin"></i></li>
        </ul>
        <div id="formulaire">
            <form action="" method="POST">
                <div>
                    <label for="name">Votre nom : </label>
                    <input type="text" id="nom_form" name="user_name" required>
                </div>
                <div>
                    <label for="mail">E-mail : </label>
                    <input type="email" id="mail" name="user_mail" required>
                </div>
                <div>
                    <label for="msg">Message :</label>
                    <textarea id="msg" name="user_message" required></textarea>
                </div>
                <input type="submit" value="Envoyer" id=button>
            </form>
        </div>
    </section>
    <?php
    if (isset($_POST["user_message"])) {
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: Contact@liliantheveneau.fr' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST["user_mail"];
        $message = '<h2>lilian-theveneau.fr</h2>
                    <h3>Message envoyé depuis la page Contact </h3>
                    <hr>
                    <p><b>Nom de l\'expéditeur :</b> ' . $_POST["user_name"] . '<br>
                    <p><b>Email de l\'expéditeur :</b> ' . $_POST["user_mail"] . '<br>
                    <hr>
                    <b>Message :</b><br>' . htmlspecialchars($_POST["user_message"]) . '</p>';
        $retour = mail("ltheveneau89@gmail.com", "Contact - lilian-theveneau.fr", $message, $entete);
        if ($retour) {
            echo "<script>alert('Bonjour ". htmlspecialchars($_POST['user_name']) .", votre mail a bien été envoyé.');</script>";
        } else {
            echo "<script>alert('Bonjour ". htmlspecialchars($_POST['user_name']) .", un problème est survenu, le mail ne sera pas transmis.');</script>";
        }
    }
    ?>
</body>
</html>