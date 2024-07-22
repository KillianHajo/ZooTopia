## ZooTopia

Guide d'exécution en local de votre site web avec WampServer
Ce fichier README.md vous guidera étape par étape pour exécuter votre site web en local en utilisant WampServer. Assurez-vous d'avoir déjà installé WampServer sur votre ordinateur avant de suivre ces étapes.

# Étape 1 : Installation de WampServer
Si vous n'avez pas encore installé WampServer, suivez ces étapes :

Téléchargez le programme d'installation de WampServer à partir du site officiel : WampServer. Lancez le programme d'installation et suivez les instructions à l'écran pour installer WampServer sur votre système.

# Étape 2 : Préparation des fichiers du site web
Assurez-vous que tous les fichiers de votre site web (HTML, CSS, JavaScript, etc.) sont placés dans un répertoire accessible sur votre ordinateur. Vous pouvez créer un nouveau répertoire dans le répertoire "www" de WampServer pour votre site web.

# Étape 3 : Démarrage de WampServer
Lancez WampServer en cliquant sur son icône depuis le bureau ou le menu de démarrage. Vérifiez que les services Apache et MySQL sont en cours d'exécution. Vous verrez des icônes vertes dans la barre des tâches pour indiquer leur statut.

# Étape 4 : Configuration de la base de données (si nécessaire)
Si votre site web nécessite une base de données MySQL, suivez ces étapes :

Cliquez sur l'icône WampServer dans la barre des tâches pour ouvrir le menu. Sélectionnez "phpMyAdmin" pour accéder à l'interface de gestion de la base de données. Créez une nouvelle base de données et importez vos tables si nécessaire.

# Étape 5 : Accéder à votre site web
Ouvrez un navigateur web (Google Chrome, Mozilla Firefox, etc.). Tapez l'adresse suivante dans la barre d'adresse : http://localhost/NOM_DU_REPERTOIRE_DE_VOTRE_SITE. Assurez-vous de remplacer "NOM_DU_REPERTOIRE_DE_VOTRE_SITE" par le nom du répertoire que vous avez créé dans le répertoire "www" de WampServer.

# Étape 6 : Visualisation de votre site web
Félicitations ! Vous devriez maintenant pouvoir visualiser votre site web en local via WampServer. Naviguez à travers les différentes pages pour vérifier que tout fonctionne correctement.

##ATTENTION veuillez bien installer phpmyadmin avec les bases de données correspondantes

Remarques importantes :
Assurez-vous que WampServer est en cours d'exécution chaque fois que vous souhaitez accéder à votre site web en local. Vérifiez que les chemins des fichiers (liens vers des fichiers CSS, images, etc.) sont corrects pour une exécution en local. En cas de problèmes, vérifiez les fichiers de journalisation (logs) de WampServer pour identifier d'éventuelles erreurs. Vous avez maintenant un environnement de développement en local avec WampServer pour tester et améliorer votre site web sans affecter la version en ligne. Bon développement !
