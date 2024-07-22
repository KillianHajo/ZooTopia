<?php session_start(); 
require_once 'function.php';
reconnect_auto();
is_connect();

?>


<?php include('head.php')?>

<body>
    <header class="header-style">
        <div class="content1"> <img src="CSS/assets/LogoZoo.png" class="logo" alt="logo"></div>
        <div class="content">


        <?php if(isset($_SESSION['auth'])):?>
            <h1 class="title">Bienvenue <?= $_SESSION['auth']->username ?> à ZooTopia</h1>
        <?php else : ?>
            <h1 class="title">ZooTopia</h1>
        <?php endif; ?>
        </div>
        <?php include('nav.php') ?>
    </header>

    <main>

        <div class="cell-contact">
            <p>Bookez un Rendez-vous</p>
            <a href="contact.php"><button class="btn-contact btn-contact1">Prendre Une Journée</button></a>
        </div>

        <div class="row">
            <a id="brand-section"><h3>Pourquoi Nous Choisir ?</h3></a>
            <div class="line-red"></div>
            <p>Plongez au cœur de l'aventure sauvage à Zootopia, où chaque rencontre est une découverte fascinante!</p>
        </div>

        <section class="vehicles-brand">

        <div class="row-page">
            <div class="garage-img">
            </div>

        <div class="brand">
            <h2>Nos Animaux</h2>
                <div class="line-red"></div>
                    <p>Nous nous occupons d'un divers choix d'animaux, mignons à féroce !</p>

                    <ol>
                        <li>Koala</li>
                        <li>Panda Géant</li>
                        <li>Pingouin</li>
                        <li>Flamant Rose</li>
                        <li>Girafe</li>
                    </ol>

                    <ol>
                        <li>Zèbre</li>
                        <li>Éléphant</li>
                        <li>Lémurien</li>
                        <li>Otarie</li>
                        <li>Rhinocéros</li>
                    </ol>

                    <ol>
                        <li>Hippopotame</li>
                        <li>Gorille</li>
                        <li>Crocodile</li>
                        <li>Tigre</li>
                        <li>Lion</li>
                    </ol>
                    <a href="services.php"><button class="btn-contact btn-contact1">Nos Services</button></a>
            </div>    
        </section>



<section class="reveal">

<!-- Les commentaires apparaissent de façon innovente à l'agrandissement de la page
après rétrecissement-->


    <h3>Nos Avis</h3>
<div class="line-red"></div>

    <div class="active">
        <h5 class="move2">"Aziah Proton"</h5>
        <h1 class="move">Très bonne échange</h1>
        <h5 class="move2">22 Juin 2023</h5>  
    </div>

    <div class="active1">
        <h5 class="move2">"Delphine Atom"</h5>
        <h1 class="move">Meilleur garage</h1>
        <h5 class="move2">21 Juin 2023</h5>  
        </div>

    <div class="active2">
        <h5 class="move2">"Jean-Pierre Niney"</h5>
        <h1 class="move">Acceuil Chalereux !</h1>
        <h5 class="move2">23 Juin 2023</h5>  
    </div>

    <div class="active3">
        <h5 class="move2">"Francois-Miteux"</h5>
        <h1 class="move">SAV impeccable</h1>
        <h5 class="move2">24 Juin 2023</h5>  
    </div>


    <div class="active4">
        <h5 class="move2">Killian Hajo</h5>
        <h1 class="move">J'ai fait le site!</h1>
        <h5 class="move2">25 Juillet 2023</h5>  
    </div>

    <div class="active5">
        <h5 class="move2">I hope you enjoy</h5>
        <h1 class="move">this really simple</h1>
        <h5 class="move2">text reveal animation</h5>  
    </div>

    <div class="active6">
        <h5 class="move2">I hope you enjoy</h5>
        <h1 class="move">this really simple</h1>
        <h5 class="move2">text reveal animation</h5>  
    </div>

    <div class="active7">
        <h5 class="move2">I hope you enjoy</h5>
        <h1 class="move">this really simple</h1>
        <h5 class="move2">text reveal animation</h5>  
    </div>

</section>

<!-- carte hover description de ce que le garage peut effectuer -->

<section class="discover">

    <a href="#"><div class="wheel"></a><a href=""><p class="sentence">Sauvage</p></div></a>
    <div  class="wheel2"><a href=""><p class="sentence">Folie des Grandeurs</p></div></a>
    <div  class="wheel3"><a href="services.php"><p class="sentence">Caché</p></div></a>
    <div  class="wheel1"><a href=""><p class="sentence">Amour</p></div></a>
</section>
<section class="cell-discover">
    <div class="cell-contact"> <!-- Réutilisation cell-contact -->
        <p>Besoin de plus d'information ?</p>
        <a href="services.php"><button class="btn-contact btn-contact1">Voir Plus</button></a>
    </div>
</section>

<!-- Présentation et Découvrir -->

<section class="more-about flux">
    <div class="row-part">
        <div class="image-presentation"></div>
        <div class="image-text">
        <h4>Engagement écologique</h4>
            <p>Nous sommes fiers de vous accueillir dans un lieu où la passion pour la faune se conjugue avec un profond engagement pour la préservation de notre planète.
            Au Zoo Écologique de ZooTopia, chaque visite est une opportunité de découvrir la beauté et la diversité du monde animal tout en participant activement
            à des initiatives de conservation environnementale.</p>
            <a href="#brand-section"><button class="btn-contact btn-contact1">Voir Plus</button></a>
        </div>
    </div>

    <div class="under-part">
        <div class="image-presentation1"></div>
        <div class="image-text1">
        <h4>Chers visiteurs et amis de ZooTopia</h4>
            <p>Nous sommes ravis de vous annoncer l'ouverture tant attendue de notre Parc Animalier Aquatique, une nouvelle aventure au cœur du Zoo Écologique de ZooTopia !
                À partir de [date d'ouverture], plongez dans un monde fascinant et découvrez la richesse de la vie marine et des écosystèmes aquatiques comme jamais auparavant.</p>
            <a href="offre.php"><button class="btn-contact btn-contact1">Voir Plus</button></a>
        </div>
    </div>
</section>
<div class="line-grey"></div>

<section class="partners">

<!-- Potentiels partenaires du garage qui sont affichés pour promotion (auto-promotion) -->

    <div class="container">
        <h2>Nos Partenaires</h2>
        <section class="customer-logos slider">
            <div class="slide"><img src="CSS/assets/partnerzoo.jpg"></div>
            <div class="slide"><img src="CSS/assets/partnerzoo1.avif"></div>
            <div class="slide"><img src="CSS/assets/partnerzoo2.avif"></div>
            <div class="slide"><img src="CSS/assets/partnerzoo3.jpg"></div>
            <div class="slide"><img src="CSS/assets/partnerzoo4.jpg"></div>
            <div class="slide"><img src="CSS/assets/partnerzoo5.jpg"></div>
            <div class="slide"><img src="CSS/assets/partnerzoo6.avif"></div>
        </section>
</div>
</section>

    </main>

    <?php include('footer.php') ?>

<!-- Toutes les images utilisées ici sont contraints à des droits d'auteur dans le cas exceptionnel que ce soit un
exercice -->


</body>
</html>