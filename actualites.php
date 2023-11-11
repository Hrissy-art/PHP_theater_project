<?php require_once 'layout/header.php'; 
require_once __DIR__ . '/classes/AppError.php';
require_once __DIR__ . '/classes/Utils.php';
require_once __DIR__ . '/functions/db.php';
?>

<section>

  <div class= container-fluid>
  
  <div class="col-md-12 p-3 m-2 ">
  <div class="owl-carousel owl-theme">
    <?php

try {
    $pdo = getConnection(); 

    $stmt = $pdo->query("SELECT * FROM show_actuality");

    if ($stmt === false) {
        echo "Erreur lors de la requête";
        exit;
    }

    while ($row = $stmt->fetch()) {
    ?>
<!-- création d'un caroussel à l'aide de javascript afin d'afficher tous les éléments de ma table. On a la possibilité de cliquer sur chaque image afin d'accéder à l'integralité de son -->
<a href="image_details.php?id_show=<?php echo $row['id_show']; ?>">
            <img class="owl-lazy img-fluid" data-src="img/<?php echo $row['image']; ?>" alt="artists-playing">
            <p class="card-text actuality-par"><?php echo $row['title']; ?></p>
        </a>

    <?php
    } } catch (PDOException $e) {
      Utils::redirect('actualites.php?error=' . AppError::DB_CONNECTION);
  }
    ?>
</div>
    </div>
    </div>
    </section>
    <div class= "container par1">
  <div class="row"> 
    <div class="col-lg-6 ">
      <div class=" m-4  p-5 mb-2 border-opacity-75 rounded-5">
<p class="actu-par">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident vero perferendis nihil impedit! Magni recusandae libero minima qui hic vero unde repellat? Sequi voluptatum consequuntur debitis perferendis. Voluptate, recusandae quidem.
    Quae ullam sapiente quia velit soluta repudiandae iste explicabo recusandae error dolore expedita dicta vel et temporibus enim suscipit voluptatibus, corrupti optio veniam voluptatum quod esse! Voluptate, ut? Sint, minima!
    Atque, odit. Rem repellat ullam temporibus ducimus, voluptatum obcaecati similique vel quod iusto odit cum beatae natus. Quod eveniet, ad cumque, quo omnis nisi nulla nemo recusandae 
  </p>
      </div>
      </div>
    <div class="col-lg-6 ">
      <div class=" m-4">
  <p>
  <img src="img/masque.jpg"  class="img-fluid img-contact" alt="chairs" />
  </p>
     </div>
     </div>


    <?php require_once 'layout/footer.php' ?>