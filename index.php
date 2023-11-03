
<?php require_once 'functions/db.php';
require_once 'layout/header.php';

?>

<div class="container main-pic">
    <img src="img/ballet_grand.jpg" class="img-fluid img-principal" alt="theater hall" />
    <div class="centered">
        <h1 class="font-sans-serif animate-character font-italic">HERE</h1>
    </div>
</div>
<div class="container-fluid presentation">
<div class="row m-5">
<div class="col-md-4 col-sm-6 p-5 m-5 about_text">
    <h2>About</h2>
    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio quisquam eius rerum aperiam, doloribus, consequuntur delectus commodi aut ipsum aliquid quos, laborum recusandae corporis. Tenetur hic sequi dolore magni id!
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam qui possimus deleniti hic, veniam alias officiis, exercitationem repellendus nemo eum inventore architecto maxime vel explicabo cupiditate debitis voluptate voluptatibus accusantium quo sunt quia commodi culpa. Aliquid veritatis reprehenderit molestias, dignissimos quaerat quia alias quasi id vel consequuntur eveniet expedita maiores aspernatur! Voluptatibus, expedita voluptate. Obcaecati dolor deleniti necessitatibus error ipsa!
    
</div>

<div class="col-md-6 col-sm-6 p-4 m-5 about_text">
<img src="img/actor.jpg" class="img-fluid" alt="chair" />
    
</div>
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