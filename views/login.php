<?php require_once "includes/navbar.php"; ?>

<div class="d-flex">
    <?php require_once "includes/sidebar.php"; ?>

    <div class="main-login w-75 mx-auto mt-5 d-flex flex-column">
        <div class="login-form mx-auto bg-body-secondary d-flex flex-column justify-content-center">
            <form action="http://localhost/task_manager/?url=login" method="post">
                <?php if(isset($_SESSION["error_message"])) { ?>
                    <p class="text-danger"> <?= $_SESSION["error_message"] ?> </p>
                <?php } ?>

                <!-- l'Email -->
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <!-- Mot de passe -->
                <div class="mb-3">
                    <label class="form-label">Mot de passe</label>
                    <input type="password" name="mdp" class="form-control">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" name="remember" for="exampleCheck1">Se rapeler de moi</label>
                </div>
            
                <button class="btn btn-success">Login</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>