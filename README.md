# PHP_theater_project

Draft **
Ongoing Project: Website on Theatre News in Lyon.

Backend Exercise for Admin-Side Query Implementation

2 branches:
- "requests" - display elements by query requests 
- "main"  - display elements by objects loops 



Mon projet consiste à créer une interface de gestion d’articles relatifs à l’actualité du théâtre dans l’agglomération lyonnaise.  
Afin de mener à bien le projet j’ai pu élaborer plusieurs requêtes. 

Explication des différentes étapes du projet. 
##	SELECT
J’ai commencé mon projet par une requête d’affichage du contenu de ma table principale « show_actuality » la table contient une quinzaine d’images de spectacle avec leur titre, description et dates respectives.
 A l’aide d’un SELECT j’affiche les trois premiers éléments de ma table sur la page : index.php
Via un carrousel je récupère tout le contenu de ma table show_actuality  
Ensuite, j’ai la possibilité de cliquer sur chaque spectacle ce qui permet l’affichage de l’image intégrale avec les informations relatives. Je peux visionner ces éléments en étant redirigée vers la page image-details.php

Grâce à une jointure (deuxième requête SELECT) je récupère les informations concernant le spectacle et le lieu où il se déroule. Les deux tables sont liées par une troisième table.  


## INSERT
En tant qu’administrateur j’ai la possibilité d’ajouter du nouveau contenu à ma table « show_actuality »  une image, un titre, une description. 
En utilisant la requête INSERT dans le formulaire créé sur le fichier upload-images.php  

J’ai toutes mes requêtes dans le fichier upload.php 

## UPDATE
Je peux également UPDATE les informations déjà existantes. 
A l’aide d’un formulaire sur update-show.php je peux modifier les informations existantes 
Sur update.php je choisi déjà d’afficher les éléments que je souhaiterais modifier dans un deuxième temps. 
Le troisième fichier relatif à l’update traite la requête d’upload justement. – update-show-process.php

 
## INSERT - USER 
Dans le dossier « user » j’ai les requêtes concernant l’interaction de l’utilisateur avec 
Mon interface. 
###	La connexion de l’utilisateur 
###	La déconnexion de l’utilisateur
###	La création d’un compte de l’utilisateur 
###	Le contact – j’ai créé deux classes :
ContactForm et ContactData – gère l’insertion des données 
