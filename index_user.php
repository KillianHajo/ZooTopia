<?php session_start(); ?>


<?php include('head.php')?>

<body>
    <header class="header-style">
        <div class="content1"> <img src="assets/Garage V.Parrot.png" class="logo" alt="logo"></div>
        <div class="content"><h1 class="title">Bienvenue <?= $_SESSION['auth']->username ?></h1></div>
        <?php include('nav.php') ?>
    </header>

    <main>

        <div class="cell-contact">
            <p>Contactez-nous via le formulaire</p>
            <a href="contact.php"><button class="btn-contact btn-contact1">Contactez-Nous</button></a>
        </div>

        <div class="row">
            <a id="brand-section"><h3>Pourquoi Nous Choisir ?</h3></a>
            <div class="line-red"></div>
            <p>Moderne et parfaitement équipé, le Garage V.Parrot assure le diagnostic et la réparation toutes marques de vos véhicules.<br>
            Tous nos services sont délivrés par des mécaniciens hautement qualifiés.</p>
        </div>

        <section class="vehicles-brand">

        <div class="row-page">
            <div class="garage-img">
            </div>

        <div class="brand">
            <h2>Nos Marques</h2>
                <div class="line-red"></div>
                    <p>Nous fournissons un service d'entretien de premier ordre pour tous les types de véhicules.</p>

                    <ol>
                        <li>Renault</li>
                        <li>Peugeot</li>
                        <li>Citroen</li>
                        <li>Vokswagen</li>
                        <li>Dacia</li>
                    </ol>

                    <ol>
                        <li>Toyota</li>
                        <li>Ford</li>
                        <li>Opel</li>
                        <li>Nissan</li>
                        <li>Fiat</li>
                    </ol>

                    <ol>
                        <li>Mercedes</li>
                        <li>Audi</li>
                        <li>BMW</li>
                        <li>Kia</li>
                        <li>Hyundai</li>
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

    <a href="#"><div class="wheel"></a><a href=""><p class="sentence">Montage pneumatique</p></div></a>
    <div  class="wheel2"><a href=""><p class="sentence">Entretiens et Remises à Zéro</p></div></a>
    <div  class="wheel3"><a href="services.php"><p class="sentence">Notre Garage</p></div></a>
    <div  class="wheel1"><a href=""><p class="sentence">Nos offres</p></div></a>
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
        <h4>Ouverture du Site</h4>
            <p>Aujourd'hui, nous fêtons l'ouverture du site suite à l'expension de notre commerce. Explorez, nos offres, profitez de nos experts en lignes, tout en vous suggèrants le meilleur service possible.<br>
            Bonne Navigation, "V.Parrot"</p>
            <a href="#brand-section"><button class="btn-contact btn-contact1">Voir Plus</button></a>
        </div>
    </div>

    <div class="under-part">
        <div class="image-presentation1"></div>
        <div class="image-text1">
        <h4>Nouvelle Gamme Peugeot !</h4>
            <p>Le SUV Peugeot 3008 propose un nouveau design inspiré qui dessine les codes d'une nouvelle ère de modernité avec toujours plus d'élégance, une face avant redessinée, des nouveaux feux arrières Full LED, de nouvelles teintes de caisse ainsi qu'une inédite option « Black Pack ».</p>
            <a href="offres.php"><button class="btn-contact btn-contact1">Voir Plus</button></a>
        </div>
    </div>
</section>
<div class="line-grey"></div>

<section class="partners">

<!-- Potentiels partenaires du garage qui sont affichés pour promotion (auto-promotion) -->

    <div class="container">
        <h2>Nos Partenaires</h2>
        <section class="customer-logos slider">
            <div class="slide"><img src="assets\valeocarre.webp"></div>
            <div class="slide"><img src="assets\logo-michelin-illustratif-sur-fond-blanc-icône-vectoriel-logos-icônes-set-social-media-flat-banner-vectors-svg-eps-jpeg-papier-210441954.webp"></div>
            <div class="slide"><img src="assets\autocollants-logo-facom.jpg"></div>
            <div class="slide"><img src="assets\mini-226-Total-LOGO.jpg"></div>
            <div class="slide"><img src="assets\autocollant-igol.jpg"></div>
            <div class="slide"><img src="assets\j55c1c_dayco.webp"></div>
            <div class="slide"><img src="assets\jurid-vector-logo-small.png"></div>
        </section>
</div>
</section>

    </main>

    <?php include('footer.php') ?>

<!-- Toutes les images utilisées ici sont contraints à des droits d'auteur dans le cas exceptionnel que ce soit un
exercice -->


</body>
</html>