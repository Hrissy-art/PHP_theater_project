
<?php require_once __DIR__ . "/../layout/header.php";?>

<section class=contact_fond>
<div class="container " >
    <div class="row"> 
    
            <div class="col-lg-6 ">

            <div class=" m-4 shadow p-3 mb-5 bg-white rounded rotate">
            <h2 class="contact-title" >Tell us about you</h2>


            <img src="/img/woman-small.jpg"  class="img-fluid img-contact" alt="theater hall" />

</div>
</div>

            
            <div class="col-lg-6 ">
            <div class=" mb-3 p-3">
              
            <form class=contact-form action="contact-process.php" method="post">
        <label for="name">Name :</label>
        <input type="text" id="name" name="name" required>

        <label for="email">E-mail :</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message :</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Send">
    </form>
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope rotate-on-hover" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg>



          </div>
            </div>
          </div>
          </div>

    
          </section>




<?php require_once __DIR__ . "/../layout/footer.php";
