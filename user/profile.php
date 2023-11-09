<?php

require_once __DIR__ . '/../classes/Utils.php';
require_once __DIR__ . '/../layout/header.php';

if (!isset($_SESSION['userInfos'])) {
    $_SESSION['loginErrorMessage'] = "";
    Utils::redirect('login.php');
}

 $_SESSION['userInfos'] 
?>
 

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5">
        <h1 class="centered">Bienvenue, <?php echo $_SESSION['userInfos']['first_name']; ?></h1>

            <img src="/img/mime-little.jpg" class="img-fluid" alt="chair" />
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../layout/footer.php';
