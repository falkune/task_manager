<?php require_once "includes/navbar.php"; ?>

<div class="d-flex">
    <?php require_once "includes/sidebar.php"; ?>

    <div class="main-register w-75 mx-auto mt-5 d-flex flex-column">
        <div class="register-form mx-auto bg-body-secondary d-flex flex-column justify-content-center">
            <form action="http://localhost/task_manager/?url=register" method="post">
                <!-- le nom -->
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <!-- le prenom -->
                <div class="mb-3">
                    <label class="form-label">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
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
            
                <button class="btn btn-success">Register</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>