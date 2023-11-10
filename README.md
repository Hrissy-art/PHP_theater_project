# PHP_theater_project

Draft ** / Brouillon **
Ongoing Project: Website on Theatre News in Lyon.

Backend Exercise for Admin-Side Query Implementation

2 branches:
- "requests" - display elements by query requests 
- "main"  - display elements by objects loops 


Mon projet consiste à créer une interface de gestion d’articles relatifs à l’actualité du théâtre dans l’agglomération lyonnaise.  
Afin de mener à bien ce projet j’ai conçu et créé une base de données et j'ai fait usage de plusieurs requêtes. 

Mon dossier contient deux branches.
Une branche "main" sur laquelle j'ai choisi d'afficher du contenu via des objets 
Une branche "request" , le coeur de mon projet sur laquelle je gère plusieurs élements à l'aide de requêtes. 


## Déscription des différentes étapes du projet - usage du CRUD (Create, Read, Update, Delete). 
###	SELECT
J’ai commencé mon projet par une requête d’affichage du contenu de ma table principale « show_actuality » la table contient une quinzaine d’images de spectacles avec leur titre, description, date respective.
 A l’aide d’un SELECT j’affiche les trois premiers éléments de ma table sur la page : index.php
Ensuite pour plus de fluidité et à l'aide d'une librairie javascript j'ai créé un carrousel où je récupère tout le contenu de ma table show_actuality sur la page actualities.php   
En outre, j’ai la possibilité de cliquer sur chaque spectacle et afficher son image intégrale avec les informations relatives. Je peux visionner ces éléments en étant redirigée vers la page image-details.php

Grâce à une jointure (une deuxième requête SELECT) je récupère les informations concernant le spectacle et le lieu où il se déroule. Les deux tables sont liées par une troisième table.Je récupère tous ces éléments à la fois dans les détails de chaque spectacle.   


### INSERT
En tant qu’administrateur j’ai la possibilité d’ajouter du nouveau contenu à ma table « show_actuality »  une image, un titre, une description. 
En utilisant la requête INSERT dans le formulaire créé sur le fichier upload-images.php  

J’ai toutes les requêtes qui gèrenet l'insertion dans le fichier ```upload.php```

### UPDATE
En tant qu'administrateur je peux également mettre à jour les informations déjà existantes dans ma table. 
A l’aide d’un formulaire sur ```update-show.php``` je peux modifier les informations récupérées  
grâce à un SELECT sur ```update.php```.  (Lors de cette première étape je choisie l'affichage des éléments que je souhaiterais modifier dans un deuxième temps). 
Le troisième fichier relatif à la mise à jour traite la requête UPLOAD.  ```update-show-process.php```

### INSERT - USER 
Dans le dossier « user » j’ai les requêtes concernant l’interaction de l’utilisateur avec 
l'interface. 

#### La création d’un compte de l’utilisateur
L'utilisateur à la possibilité de créér un compte. Les données sont récupèrées dans un table prévue à cet effet. Le mot de passe généré est hashé. Le formulaire d'inscription s etrouve dans 
```sign-up.php```
Le fichier ```sign-up-process.php``` gère la requête permettant la création du compte. 
Dans un premier temps je récupère les données du formulaire, ensuite je procède à une insertion dans la table. 

####	La connexion de l’utilisateur
L'utilisateur peut se connecter à son compte utilisateur. 
Pour cela j'initie un début de session - session_start() dans le fichier  ```header.php``` qui est requis par le fichier login.php, 

Dans le fichier  login-process.php, je vérifie dans un premier temps si l'email et le mot de passe de l'utilisateur existent et ensuite à l'aide d'un SELECT je récupère l'email de la base de donnée. 
Une fonction de vérification permet de déterminer si le mot de passe hashé est identique au mot de passe choisi par l'utilisateur 

Dans ```nav.php``` - je crée des condition d'affichage du navbar en focntion de la connexion de l'utilisateur ou pas. Si l'utilisateur est connecté à sa session il a la possibilité de se déconnecter ultérieurement grâce au boutton logout (géré dans le fichier ```logout.php```) qui s'affiche à la place du boutton login.  
Si l'utilisateur est connecté, il peut également accéder à la page de son profil. ```profile.php``` Sur cette page, à l'aide de la variable $_SESSION où j'ai stocké les informations relatives à l'utilisateur je peux tout récupèrer. J'ai choisi de récupèrer le prénom de l'utilisateur.

####	La déconnexion de l’utilisateur 
Comme évoqué dans la catégorie au dessus, l'utilisateur a la possibilité de se déconnecter.

#### Search
L'utilisateur a la possibilité d'effectuer une recherche à l'aide du moteur de recherche dans ```nav.php``` 
#### Le contact 
L'utilisateur a la possibilité d'envoyer un message via un formulaire aux gestionnaires du site. 
Pour s'y faire j’ai créé deux classes dans le dossier classes:
*ContactForm - gère la méthode ReQUEST ```ContactForm.php```
*ContactData – gère l’insertion des données dans la base de données ```ContactData.php```

## Usage des classes
Par manque de temps je n'ai pas réussi à entièrement refactoriser mon code et le tranformer en "classes". Toutefois comme évoqué précedemment j'ai créé des classes pour le formulaire de contact. 
J'ai également crée deux autres classes. Une classe - ```AppError.php``` qui gère les prinipales erreurs avec leur code respectif. Un autre classe - ```Utils.php``` qui gère la redirection vers une autre page grâce à la fonction: "header"

## Dossier de configuration 
Dans le dossier "config", on peu trouver mon fichier ini avec les informations relatives à la connexion à ma base de données.  

## Analyse des problèmes rencontrés
J'ai rencontré plusieurs problèmes avant de tout faire fonctionner correctement. 
J'ai eu quelques difficultés à réussir à récupèrer les informations de plusieurs tables à la fois à travers les clés étrangères. 
 

## Perspectives pour la suite 
Je n'ai pas eu le temps de factoriser entièrement mon code. 