
<?php 
require_once __DIR__ . "/../layout/header.php";

?>

<section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 mt-5">
                    <div class="text-center">
                       
                        <?php if (isset($_SESSION['loginErrorMessage'])) { ?>
                            <div class="alert alert-danger">
                                <?php echo $_SESSION['loginErrorMessage']; ?>
                            </div>
                        <?php
                            unset($_SESSION["loginErrorMessage"]);
                        } ?>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <form action="login-process.php" method="POST">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="name@company.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
                                </div>
                                <div class="mb-3 text-end">
                                    <a href="#" class="text-primary">Mot de passe oublié ?</a>
                                </div>
                                <button type="submit" class="btn btn-primary">Connexion</button>
                                <p class="mt-3 text-secondary">
                                    Pas encore inscrit ? <a href="#" class="text-primary">Inscription</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
