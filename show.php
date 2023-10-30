<?php require_once 'layout/header.php';
require_once 'table-shows.php';

?>
<main>
    <?php 
    
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        http_response_code(404);
        echo "ERROR";
        exit;
    }
    
    $id = intval($_GET['id']);

    if ($id === 0) {
        http_response_code(404);
        echo "<h2>error</h2>";
        exit;
    } ?>

    <div class= "container">
  <div class="row"> 
    <?php
    foreach ($shows as $show) {
        if ($id === $show->getId()) { 
    ?>
    <div class="col-lg-6 ">
      <div class=" m-4 p-4">
        <h2>Name: <?php echo $show->getName(); ?></h2>
        
        <p>Date: <?php echo $show->getDate(); ?></p>
        <p>Theater: <?php echo $show->getTheater(); ?></p>
        <img src="<?php echo $show->getImg(); ?>" alt="">
        
        
        
    <?php
        }
    }
    ?>
</main>
<?php require_once 'layout/footer.php';