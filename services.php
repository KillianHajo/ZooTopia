<?php include('head.php')?>

<?php
	
	include 'comment_config.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO demo (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		echo "";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>


<body>

<?php include('nav.php')?>

<div class="content2">
        <h1>Nos services<h1>
    </div>

<section class="services" id="services">

    
    <div class="box-container">

    <div class="box">
        <i class='fa fa-book'></i>
            <h3>Programmes éducatifs</h3>
            <p>
            Ateliers interactifs, visites guidées et conférences sur la conservation, la biodiversité et l'écologie.</p>
            <a href="contact.php"><button class="btn-service">Voir Plus</button></a>
        </div>

        <div class="box">
        <i class='fa fa-heart'></i>
            <h3>Centre de conservation</h3>
            <p>Initiatives de protection et de reproduction des espèces menacées, souvent en partenariat avec des organisations internationales.</p>
            <a href="occasions.php"><button class="btn-service" id="link-footer">Voir Plus</button></a>
        </div>

        <div class="box">
        <i class='fa fa-home'></i>
            <h3>Habitat naturel reconstitué</h3>
            <p>Enclos et espaces qui imitent les habitats naturels des animaux pour leur bien-être et pour sensibiliser les visiteurs à l'importance de la conservation des écosystèmes.</p>
            <a href="offre.php"><button class="btn-service">Voir Plus</button></a>
        </div>

        <div class="box">
            <i class='fa fa-flask'></i>
            <h3>Programmes de recherche</h3>
            <p>Facilitation et soutien de la recherche scientifique sur la faune, les écosystèmes et les méthodes de conservation durable.</p>
            <a href="contact.php #schedule"><button class="btn-service">Voir Plus</button></a>
        </div>

        <div class="box">
            <i class='fa fa-thumbs-up'></i>
            <h3>Expériences interactives </h3>
            <p>Activités telles que l'alimentation des animaux, les rencontres avec les soigneurs, et des programmes pour enfants.</p>
            <a href="contact.php #schedule"><button class="btn-service" >Voir Plus</button></a>
        </div>

        <div class="box">
            <i class='fa fa-leaf'></i>
            <h3>Installations écologiques</h3>
            <p>Utilisation de technologies durables et de pratiques écologiques, comme des systèmes de gestion des eaux, des énergies renouvelables et des initiatives de recyclage.</p>
            <a href="contact.php"><button class="btn-service">Voir Plus</button></a>
        </div> 

    </div>

    <p id="garage-def" class="flux">Notre zoo écologique ne se contente pas de protéger l'environnement et de promouvoir la conservation,
    il bénéficie également de l'expertise exceptionnelle de nos vétérinaires spécialisés.
    Ces professionnels dévoués assurent le bien-être et la santé optimale de nos animaux grâce à des soins vétérinaires de pointe.
    Ainsi, nous créons un sanctuaire où la biodiversité est non seulement préservée, mais aussi prospère,
    grâce à une approche intégrée alliant science vétérinaire et pratiques durables.</h6>

        <a href="index.php"><div class="end-logo"><img src="CSS/assets/LogoZoo.png" class="logo" alt="logo"></div></a>
        <h2 class="comment-title">Commenter nos services</h2>
        <div class="wrappe">
		<form action="" method="post" class="form">
			<input type="text" class="name" name="name" placeholder="Nom">
			<br>
			<textarea name="message" cols="30" rows="10" class="message" placeholder="Message"></textarea>
			<br>
			<button type="submit" class="btn" name="post_comment">Poster votre avis !</button>
		</form>
	</div>

    <div id="mainac"></div><div id="mainac"></div>


	<div class="conten">
		<?php

			$sql = "SELECT * FROM demo";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			
			while($row = $result->fetch_assoc()) {
			
		?>

		<?php } } ?>
	</div>


</section>





</body>







<?php include('footer.php')?>