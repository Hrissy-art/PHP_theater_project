
<?php 
require_once __DIR__ . "/../layout/header.php";

?>

<section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 mt-5">
                    <div class="text-center">
                        <!-- Vérification si la session de l'utilisateur est ouverte -->
                       
                        <?php if (isset($_SESSION['loginErrorMessage'])) { ?>
                            <div class="alert alert-danger">
                                <?php echo $_SESSION['loginErrorMessage']; ?>
                            </div>
                        <?php
                            unset($_SESSION["loginErrorMessage"]);
                        } ?>
                    
                    <!-- Création du formulaire permettant l'autentification de l'utilisateurr -->

                        <div class="card-body login-form">
                            <form action="login-process.php" method="POST">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="name@company.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
                                </div>
                                
                                <button type="submit" class="btn btn-dark">Log in</button>
                                <p class="mt-3 text-secondary">
                                    Don't have an account yet? <a href="sign-up.php" class="text-primary">Sign up</a>
                                </p>
                            </form>
                        </div>
                    </div>
                
                <div class="col-lg-6 mt-5">
                    <div><img src="/img/actor-little.jpg" class="img-fluid" alt="actor" height="30px" /></div>
            </div>
        </div>
    </section>

   
