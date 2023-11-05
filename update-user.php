<?php
require_once 'layout/header.php';

require_once __DIR__ . '/classes/AppError.php';
require_once __DIR__ . '/classes/Utils.php';
require_once __DIR__ . '/functions/db.php'; 

$pdo = getConnection();
?>

<h1 class="update-title">Update </h1>
<form>
<div class="form-group">
    <label for="name">First name</label>
    <input type="text" class="form-control" id="name" placeholder="Name" name="first_name">
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" placeholder="emailk" name="email">
  </div>
  <button type="submit" class="btn btn-dark">Log in</button>
</form>