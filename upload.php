
   <?php require_once 'functions/db.php';
        
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $image = $_FILES['image']; // Après je peux accéder à $cv['tmp_name'] par exemple
            $tmpFilename = $image['tmp_name'];
    
            // Diverses vérifications (type, taille, etc...)
    
            if (is_uploaded_file($tmpFilename)) {
                move_uploaded_file($tmpFilename, __DIR__ . '/uploads/'.$image['name']);
            }
        }
       

        $pdo = getConnection();

        
        $stmt = $pdo->prepare("INSERT INTO show_actuality (image) VALUES (:image)");
        $stmt->bindParam(':image', $_FILES['image']['name']);
        $stmt->execute();
        
        Utils::redirect('Location: upload-success.php');
        exit();