<?php
session_start();
require_once __DIR__ . '/../classes/Utils.php';
require_once __DIR__ . '/../layout/header.php';

if (!isset($_SESSION['userInfos'])) {
    $_SESSION['loginErrorMessage'] = "";
    Utils::redirect('login.php');
}
?>


    <h1>Profil</h1>


<?php require_once __DIR__ . '/../layout/footer.php';
