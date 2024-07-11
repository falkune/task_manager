<?php require_once "includes/navbar.php"; ?>

<div class="d-flex">
    <?php require_once "includes/sidebar.php"; ?>

    <div class="w-75 mx-auto">
        <div class="">
            <button type="button" class="btn btn-primary">
                <a class="nav-link" href="http://localhost/task_manager/?url=add_task">Ajouter une tache</a>
            </button>
            <?php if(!empty($tasks)){ ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Task Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Statut</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tasks as $task) { ?>
                            <tr>
                                <td><?= $task['task_name'] ?></td>
                                <td><?= $task['description'] ?></td>
                                <td><?= $task['ende_date'] ?></td>
                                <td><?= $task['status'] ?></td>
                                <td>
                                    les actions
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <?php } else { ?>
                <h1><span class="badge text-bg-secondary">Vous n'avez pas de tache</span></h1>
            <?php } ?>
        </div>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>