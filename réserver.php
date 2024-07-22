<?php include('head.php')?>
<body>
        <?php include('nav.php') ?>

        <section class = "banner">
                <h2>RÉSERVER VOTRE JOURNÉE !</h2>
                <div class = "card-container">
                <div class = "card-img">
                </div>

                <div class = "card-content">
                        <h3>Reservation</h3>
                        <form>
                        <div class = "form-row">
                                <select name = "days">
                                <option value = "day-select">Choisir le Jour</option>
                                <option value = "sunday">Lundi</option>
                                <option value = "monday">Mardi</option>
                                <option value = "tuesday">Mercredi</option>
                                <option value = "wednesday">Jeudi</option>
                                <option value = "thursday">Vendredi</option>
                                <option value = "friday">Samedi</option>
                                <option value = "saturday">Dimanche</option>
                                </select>

                                <select name = "hours">
                                <option value = "hour-select">Heure d'entrée</option>
                                <option value = "10">08: 00</option>
                                <option value = "10">10: 00</option>
                                <option value = "10">12: 00</option>
                                <option value = "10">14: 00</option>
                                <option value = "10">16: 00</option>
                                <option value = "10">17: 00</option>
                                </select>
                        </div>

                        <div class = "form-row">
                                <input type = "text" placeholder="Prénom Nom">
                                <input type = "text" placeholder="Téléphone">
                        </div>

                        <div class = "form-row">
                                <input type = "number" placeholder="Nombre de personne" min = "1">
                                <input type = "submit" value = "RÉSERVER">
                        </div>
                        </form>
                </div>
                </div>
        </section>











        <?php include('footer.php') ?>





</body>