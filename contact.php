
<?php require_once 'layout/header.php';?>


<script src ="/js/starwars.js"></script>

<div class="container " >
    <div class="row"> 
    
            <div class="col-lg-4 ">
            <div class=" m-4 shadow p-3 mb-5 bg-white rounded">
            <img src="img/rideau-moyenne.jpg"  class="img-fluid img-principal" alt="theater hall" />
</div>
</div>
<div class="col-lg-4 ">
            <div class=" mb-3">

            <div class="starwars-demo">
    <img src="img/10.jpg" alt="Star" class="star" height="80px" width="80px">
    <img src="img/10.jpg" alt="Wars" class="wars" height="80px" width="80px">
    <h2 class="byline" id="byline">Contactez-nous</h2>
  </div>

            </div>
            </div>
            <div class="col-lg-4 ">
            <div class=" mb-3">
              <form id="contactForm">
                <label for="name">Nom:</label><br />
                <input type="text" id="name" name="name" value="" placeholder="Nom" /><br />
                <label for="email"> Email:</label><br />
                <input type="email" id="email" name="email" value="" placeholder="e-mail" /><br /><br />
                <label for="message"> Message:</label><br />
                <textarea id="message" name="message" placeholder="Message"></textarea>
              </form>
              <input type="submit" value="Envoyer" />
              </div>
          </div>
            </div>
          </div>






<?php require_once 'layout/footer.php';