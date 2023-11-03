<?php 
require_once __DIR__ . "/../layout/header.php";

?>
<div class="container">
  <div>
  
<form class= "align-self-center" action="sign-up-process.php" method="POST">
  <div class="form-group">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Name" name="first_name">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last name" name="last_name">
  </div>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group">
    <label for="confirm-password">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="confirm-password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php require_once '../layout/footer.php';
?>