<?php 
require_once __DIR__ . '/layout/header.php';
require_once __DIR__ .'/functions/db.php';

try {
    $pdo = getConnection();
} catch (PDOException) {
    Utils::redirect('inscription.php?error=Une erreur est survenue');
}

$stmt = $pdo->prepare('SELECT * FROM users WHERE id= ?');
$stmt->bindValue(1 , $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<main>
    <div class="text-center my-4">
        <h1>Fiche Utilisateur</h1>
    </div>
    <div class="container">
        <div class="col-lg-4 offset-lg-4 my-5">
            <div class="border rounded p-3 text-center">
                <h2><?php echo $user['first_name'] . ' ' . $user['last_name']?></h2>
                <p><?php echo $user['email'] ?></p>
            </div>

        </div>
    </div>
</main>

<?php require_once __DIR__ .'/layout/footer.php';