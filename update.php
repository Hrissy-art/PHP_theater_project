<?php
require_once 'layout/header.php';

require_once __DIR__ . '/classes/AppError.php';
require_once __DIR__ . '/classes/Utils.php';
require_once __DIR__ . '/functions/db.php';

// try {
    $pdo = getConnection();

    $stmt = $pdo->query("SELECT id_user, email FROM users");
   
while ($users = $stmt->fetch()) {
    ?>
            <div class="col-md-4 col-sm-6">
                <a href="update-user.php?id=<?php echo $users["id_user"];?>">Update</a>
                <?php echo $users['email']; ?>
                    
        </div> 
        <?php } ?>

        <?php  require_once __DIR__ . '/layout/footer.php';