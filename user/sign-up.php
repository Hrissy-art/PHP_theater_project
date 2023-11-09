<?php 
require_once __DIR__ . "/../layout/header.php";

?>

<!-- Création du formulaire permettant la création d'un compte utilisateur -->
<div class="container reg-form ">
  <div class= "row">
  <div class="col-lg-6 mt-5">
<form class= "align-self-center reg-template" action="sign-up-process.php" method="POST">
  <div class="form-group">
  <div class="form-group">
    <label for="name">First name</label>
    <input type="text" class="form-control" id="name" placeholder="Name" name="first_name" required>
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last name" name="last_name" required>
  </div>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>
  <div class="form-group">
    <label for="confirm-password">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="confirm-password" required>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-dark">Submit</button>
</form>
</div>
<div class="col-lg-6 mt-5">
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis quaerat minima distinctio fugit quam, unde asperiores recusandae non delectus temporibus odio. Placeat molestiae modi illo quam aliquid nobis delectus ut?
</div>
</div>

<?php require_once '../layout/footer.php';
?>