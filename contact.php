
<?php require_once 'layout/header.php';?>

<section class=contact_fond>
<div class="container " >
    <div class="row"> 
    
            <div class="col-lg-4 ">
            <div class=" m-4 shadow p-3 mb-5 bg-white rounded">
            <img src="img/rideau-moyenne.jpg"  class="img-fluid img-contact" alt="theater hall" />
</div>
</div>
<div class="col-lg-4 ">
            <div class=" mb-3">

            
    <h2 class="contact-title" >Contactez-nous</h2>
  </div>

            </div>
            
            <div class="col-lg-4 ">
            <div class=" mb-3">
            <form action="contact-process.php" method="post">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" required>

        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Send">
    </form>
          </div>
            </div>
          </div>
          
    
          </section>




<?php require_once 'layout/footer.php';