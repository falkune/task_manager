<?php require_once "includes/navbar.php"; ?>

<div class="d-flex">
    <?php require_once "includes/sidebar.php"; ?>

    <div class="w-25 mx-auto mt-5">
        <form action="http://localhost/task_manager/?url=add_team" method="post">
            <!-- nom -->
            <div class="mb-3">
                <label class="form-label">Nom Equipe</label>
                <input type="text" name="nom" class="form-control">
            </div>
            <!--  -->
            <div class="mb-3">
                <label class="form-label">Selectionnez les utilisateurs</label><br>
                <?php foreach($listUser as $user) { ?>
                    <input class="form-check-input" type="checkbox" name="members[]" value="<?= $user['id'] ?>" id="flexCheckDefault">
                    <label class="form-label"><?= $user['firstname'] ?></label><br>
                <?php } ?>
            </div>
        
            <button class="btn btn-success">Add</button>
        </form>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>