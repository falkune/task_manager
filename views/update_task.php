<?php require_once "includes/navbar.php"; ?>

<div class="d-flex">
    <?php require_once "includes/sidebar.php"; ?>

    <div class="main-login w-75 mx-auto mt-5 d-flex flex-column">
        <div class="task-form mx-auto bg-body-secondary d-flex flex-column justify-content-center">
            <form action="http://localhost/task_manager/?url=update_task" method="post">
                <!-- task name -->
                <div class="mb-3">
                    <label class="form-label">Task Name</label>
                    <input type="text" name="nom" class="form-control" value="<?= $task['task_name'] ?>">
                </div>
                <!-- Description -->
                <div class="form-floating">
                    <textarea class="form-control" name="description" style="height: 100px"><?= $task['description'] ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="fform-label" for="exampleCheck1">End Date</label>
                    <input type="date" class="form-control" id="exampleCheck1" name="date" value="<?= $task['end_date'] ?>">
                </div>
            
                <button class="btn btn-success">Login</button>
            </form>
        </div>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>