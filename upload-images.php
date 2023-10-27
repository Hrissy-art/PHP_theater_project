<?php require_once 'functions/db.php';
   require_once 'layout/header.php'; ?>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<div>
                CV : 
                <input type="file" name="cv" id="cv" />
            </div>
        <label for="image">Sélectionnez une image :</label>
        <div> <input type="file" name="image" id="image"></div>
        <input type="submit" value="Envoyer">
    </form>
    <a href="uploads/haku.png">Spiritted Away</a>

  
          
           