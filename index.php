
<?php require_once 'functions/db.php';
require_once 'layout/header.php';
require_once 'table-shows.php';
?>

<div class="container-fluid main-pic">
    <img src="img/artists-big.jpg" class="img-fluid img-principal" alt="theater hall" />
    <div class="centered">
        <h1 class="font-sans-serif animate-character font-italic">Welcome</h1>
    </div>
</div>

<div class="container">
    <div class="row m-5">
        <?php
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT * FROM show_actuality");

        if ($stmt === false) {
            echo "Erreur lors de la requête";
            exit;
        }

        while ($row = $stmt->fetch()) {
        ?>
            <div class="col-md-4 col-sm-6">
                <a href="image_details.php?id_show=<?php echo $row['id_show']; ?>">
                    <img src="img/<?php echo $row['image']; ?>" class="card-img-top" alt="Show Image">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                    <p class="card-text"><?php echo $row['texte']; ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<?php require_once 'layout/footer.php';