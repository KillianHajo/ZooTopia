<?php include('head.php')?>

<body>

<?php include('nav.php')?>

<!------Utilisation de FormSpree pour envoyer des mails--------->

<main class="contact-main">
<section class="contact-wrap">
    <form id="form" action="https://formspree.io/f/mqkvkweg" class="topBefore" method="POST">
    <h1>Nous contacter</h1>
		<input class="contact-input" id="nam" type="text" placeholder="NAME" required>
		<input class="contact-input" id="emai" type="text" placeholder="E-MAIL" required>
		<textarea class="contact-input" id="messag" type="text" placeholder="MESSAGE, Numéro de téléphone" required></textarea>
        <button class="contact-input" id="submit" type="submit" value="ENVOYER !">Envoyer !</button>
    </form>
</div>

<!------Utilisation de FormSpree pour envoyer des mails--------->


<div id="schedule" class="flux">
    <table>
        <tr>
            <th> Heure </th>
            <th> Lundi </th>
            <th> Mardi </th>
            <th> Mercredi </th>
            <th> Jeudi </th>
            <th> Vendredi </th>
            <th> Samedi </th>
            <th> Dimanche </th>
        </tr>
        <tr>
            <td> 8h00 </td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td>Ouvert✔️</td>
            <td>Ouvert✔️</td>
        </tr>
        <tr>
            <td> 11h </td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
        </tr>
        <tr>
            <td> 12h </td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
        </tr>
        <tr>
            <td> 14h </td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
        </tr>
        <tr>
            <td> 18h </td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
            <td class="open-schedule">Ouvert✔️</td>
        </tr>
        <tr>
        <td> 19h00 </td>
            <td class="pause"> ❌Fermé</td>
            <td class="pause"> ❌Fermé</td>
            <td class="pause"> ❌Fermé</td>
            <td class="pause"> ❌Fermé</td>
            <td class="pause"> ❌Fermé</td>
            <td class="open-schedule"> Ouvert✔️</td>
            <td class="open-schedule"> Ouvert✔️</td>
        </tr>
    </table>
</div>



</section>
</main>

<?php include('footer.php') ?>

