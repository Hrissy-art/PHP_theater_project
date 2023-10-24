<?php require_once 'classes/Show.php' ;
require_once 'layout/header.php';
?>


  <div class="border-[1px] px-4 py-3 shadow-lg">
    <h2 class="m-0 ">
      <?php echo $show->getName(); ?>
    </h2>
    <p class="m-0">
      Theater: <?php echo $show->getTheater(); ?>
    </p>
    <p>
      Date: <?php echo $show->getDate(); ?>
    </p>
    <a href="show.php?id=<?php echo $show->getId(); ?>">Voir le spectacle</a>
   
  </div>

