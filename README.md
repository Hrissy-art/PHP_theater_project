# PHP_theater_project

 ## **Brouillon** ** Draft ** 
Projet en cours: Site Web concernant l'actualité de théâtre dans l'agglomération lyonnaise. 
Ongoing Project: Website on Theatre News in Lyon.

Exercice backend 
Backend Exercise for Admin-Side Query Implementation

## Déscription 
Mon dossier contient deux branches.
Une branche **main** sur laquelle j'ai choisi d'afficher du contenu via des objets afin de m'entrainer.
Une branche **request** qui constitue  le coeur de mon projet sur laquelle je gère plusieurs élements à l'aide de requêtes. La partie FRONT de cette branche est plus avancée et élaborée. 


## Description
*My folder contains two branches.
A **main** branch on which I chose to display content via objects in order to practice.
A **request** branch which constitutes the heart of my project on which I manage several elements using requests. The FRONT part of this branch is more advanced and elaborate.*

## Objectifs 
Mon projet consiste à créer une interface de gestion d’articles relatifs à l’actualité du théâtre dans l’agglomération lyonnaise.  
Afin de mener à bien ce projet j’ai conçu et créé une base de données et j'ai fait usage de plusieurs requêtes. 

## Goals
*My project consists of creating an interface for managing articles relating to theater news in the Lyon metropolitan area.
In order to carry out this project I designed and created a database and I used several queries.*

## Déscription des différentes étapes du projet - usage du CRUD (Create, Read, Update, Delete).
## Description of the different stages of the project - use of CRUD (Create, Read, Update, Delete). 
###	SELECT
J’ai commencé mon projet par une requête d’affichage du contenu de ma table principale « show_actuality » la table contient une quinzaine d’images de spectacles avec leur titre, description, date respective.
 A l’aide d’un SELECT j’affiche les trois premiers éléments de ma table sur la page : index.php
Ensuite pour plus de fluidité et à l'aide d'une librairie javascript j'ai créé un carrousel où je récupère tout le contenu de ma table show_actuality sur la page actualities.php   
En outre, j’ai la possibilité de cliquer sur chaque spectacle et afficher son image intégrale avec les informations relatives. Je peux visionner ces éléments en étant redirigée vers la page image-details.php

Grâce à une jointure (une deuxième requête SELECT) je récupère les informations concernant le spectacle et le lieu où il se déroule. Les deux tables sont liées par une troisième table.Je récupère tous ces éléments à la fois dans les détails de chaque spectacle.   

### SELECT
*I started my project with a request to display the contents of my main table “show_actuality” the table contains around fifteen show images with their title, description, respective date.
  Using a SELECT I display the first three elements of my table on the page: index.php
Then for more fluidity and using a javascript library I created a carousel where I retrieve all the content of my show_actuality table on the actualities.php page
Additionally, I have the ability to click on each show and view its full image with related information. I can view these elements by being redirected to the image-details.php page

Thanks to a join (a second SELECT query) I retrieve information concerning the show and the place where it takes place. The two tables are linked by a third table. I collect all these elements at once in the details of each show.*

### INSERT
En tant qu’administrateur j’ai la possibilité d’ajouter du nouveau contenu à ma table « show_actuality »  une image, un titre, une description. 
En utilisant la requête INSERT dans le formulaire créé sur le fichier upload-images.php  

J’ai toutes les requêtes qui gèrenet l'insertion dans le fichier ```upload.php```

### INSERT
*As an administrator I can add new content to my “show_actuality” table: an image, a title, a description.
Using the INSERT query in the form created on the upload-images.php file

I have all the requests that manage the insertion into the file ``upload.php```*

### UPDATE
En tant qu'administrateur je peux également mettre à jour les informations déjà existantes dans ma table. 
A l’aide d’un formulaire sur ```update-show.php``` je peux modifier les informations récupérées  
grâce à un SELECT sur ```update.php```.  (Lors de cette première étape je choisie l'affichage des éléments que je souhaiterais modifier dans un deuxième temps). 
Le troisième fichier relatif à la mise à jour traite la requête UPLOAD.  ```update-show-process.php```

### UPDATE
*As an administrator I can also update information that already exists in my table.
Using a form on ```update-show.php``` I can modify the information retrieved
thanks to a SELECT on ```update.php```. (During this first step I choose the display of the elements that I would like to modify in a second step).
The third file relating to the update processes the UPLOAD request. ```update-show-process.php```*
​
### INSERT - USER 
Dans le dossier « user » j’ai les requêtes concernant l’interaction de l’utilisateur avec 
l'interface. 

### INSERT - USER
*In the “user” folder I have the queries regarding the user’s interaction with
the interface.*

#### La création d’un compte de l’utilisateur
L'utilisateur à la possibilité de créér un compte. Les données sont récupèrées dans un table prévue à cet effet. Le mot de passe généré est hashé. Le formulaire d'inscription s etrouve dans 
```sign-up.php```
Le fichier ```sign-up-process.php``` gère la requête permettant la création du compte. 
Dans un premier temps je récupère les données du formulaire, ensuite je procède à une insertion dans la table. 

#### Creating a user account
*The user has the option of creating an account. The data is retrieved in a table provided for this purpose. The generated password is hashed. The registration form can be found in
```sign-up.php```
The ``sign-up-process.php``` file manages the request allowing the creation of the account.
First I retrieve the data from the form, then I insert it into the table.*

####	La connexion de l’utilisateur
L'utilisateur peut se connecter à son compte utilisateur. 
Pour cela j'initie un début de session - session_start() dans le fichier  ```header.php``` qui est requis par le fichier login.php, 

Dans le fichier  login-process.php, je vérifie dans un premier temps si l'email et le mot de passe de l'utilisateur existent et ensuite à l'aide d'un SELECT je récupère l'email de la base de donnée. 
Une fonction de vérification permet de déterminer si le mot de passe hashé est identique au mot de passe choisi par l'utilisateur 

Dans ```nav.php``` - je crée des condition d'affichage du navbar en focntion de la connexion de l'utilisateur ou pas. Si l'utilisateur est connecté à sa session il a la possibilité de se déconnecter ultérieurement grâce au boutton logout (géré dans le fichier ```logout.php```) qui s'affiche à la place du boutton login.  
Si l'utilisateur est connecté, il peut également accéder à la page de son profil. ```profile.php``` Sur cette page, à l'aide de la variable $_SESSION où j'ai stocké les informations relatives à l'utilisateur je peux tout récupèrer. J'ai choisi de récupèrer le prénom de l'utilisateur.


#### User login
*The user can log in to their user account.
To do this I initiate a session start - session_start() in the ``header.php``` file which is required by the login.php file,

In the login-process.php file, I first check if the user's email and password exist and then using a SELECT I retrieve the email from the database.
A verification function allows you to determine if the hashed password is identical to the password chosen by the user

In ```nav.php``` - I create display conditions for the navbar depending on whether the user is connected or not. If the user is connected to his session he can disconnect later using the logout button (managed in the ``logout.php``` file) which is displayed instead of the login button.
If the user is logged in, they can also access their profile page. ```profile.php``` On this page, using the $_SESSION variable where I stored the information relating to the user I can retrieve everything. I chose to retrieve the user's first name.*

####	La déconnexion de l’utilisateur 
Comme évoqué dans la catégorie au dessus, l'utilisateur a la possibilité de se déconnecter.

#### User logout
*As mentioned in the category above, the user has the possibility to disconnect.*

#### Search
L'utilisateur a la possibilité d'effectuer une recherche à l'aide du moteur de recherche dans ```nav.php``` 

#### Search
*The user has the possibility to carry out a search using the search engine in ```nav.php```*

#### Le contact 
L'utilisateur a la possibilité d'envoyer un message via un formulaire aux gestionnaires du site. 
Pour s'y faire j’ai créé deux classes dans le dossier classes:
ContactForm - gère la méthode ReQUEST ```ContactForm.php```
ContactData – gère l’insertion des données dans la base de données ```ContactData.php```

#### The contact
*The user has the possibility to send a message via a form to the site managers. 
To do this I created two classes in the classes folder:
ContactForm - handles the ReQUEST method ```ContactForm.php```
ContactData – manages the insertion of data into the ``ContactData.php``` database*

## Usage des classes
Par manque de temps je n'ai pas réussi à entièrement refactoriser mon code et le tranformer en "classes". Toutefois comme évoqué précedemment j'ai créé des classes pour le formulaire de contact. 
J'ai également crée deux autres classes. Une classe - ```AppError.php``` qui gère les prinipales erreurs avec leur code respectif. Un autre classe - ```Utils.php``` qui gère la redirection vers une autre page grâce à la fonction: "header"

## Use of classes
*Due to lack of time I was not able to completely refactor my code and transform it into "classes". However, as mentioned previously, I created classes for the contact form.
I also created two other classes. A class - ```AppError.php``` which handles the main errors with their respective code. Another class - ```Utils.php``` which manages redirection to another page using the function: "header"*

## Dossier de configuration 
Dans le dossier "config", on peu trouver mon fichier ini avec les informations relatives à la connexion à ma base de données.  

## Configuration folder
*In the "config" folder, you can find my ini file with information relating to the connection to my database.*

## Analyse des problèmes rencontrés
J'ai rencontré plusieurs problèmes avant de tout faire fonctionner correctement. 
J'ai eu quelques difficultés à réussir à récupèrer les informations de plusieurs tables à la fois à travers les clés étrangères. 

## Analysis of problems encountered
*I ran into several issues before getting everything working properly.
I had some difficulty successfully retrieving information from several tables at once through foreign keys.*
 
## Perspectives pour la suite 
Je n'ai pas eu le temps de factoriser entièrement mon code. 
L'option de recherche via search.php n'est pas assez élaboré. Le code et l'affichega de données pourront être améliorés. 
Je n'ai pas eu le temps de créer la posibilité pour l'utilisateur de s'inscrire à une newsletter. 

## Perspectives for the future
*I didn't have time to fully factorize my code.
The search option via search.php is not sophisticated enough. The code and data display could be improved.
I did not have time to create the possibility for the user to subscribe to a newsletter*