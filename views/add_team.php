<?php require_once "includes/navbar.php"; ?>

<div class="d-flex">
    <?php require_once "includes/sidebar.php"; ?>

    <div class="main-login w-75 mx-auto mt-5">
        <div class="add-team-form mx-auto bg-body-secondary">
            <form action="http://localhost/task_manager/?url=add_team" method="post">
                <!-- nom -->
                <div class="mb-3">
                    <label class="form-label">Nom Equipe</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <!--  -->
                <label class="form-label">Selectionnez les utilisateurs</label>
                <div class="d-flex mb-3 flex-wrap">
                    <?php foreach($listUser as $user) { ?>
                        <div class="w-50">
                            <input id="user_<?= $user['id'] ?>" class="form-check-input" type="checkbox" name="members[]" value="<?= $user['id'] ?>" id="flexCheckDefault">
                            <label for="user_<?= $user['id'] ?>" class="form-label"><?= $user['firstname'] ?></label><br>
                        </div>
                    <?php } ?>
                </div>
            
                <button class="btn btn-success">Add</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>