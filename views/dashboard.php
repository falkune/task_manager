<?php require_once "includes/navbar.php"; ?>

<div class="main d-flex">
    <?php require_once "includes/sidebar.php"; ?>
    <div class="main-dashboard w-75 m-auto">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm bg-success text-white rounded-lg">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-list"></i>
                        <a class="navbar-brand" href="http://localhost/task_manager/?url=list_team"><h5 class="card-title font-weight-bold">List Teams</h5></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm bg-primary text-white rounded-lg">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-plus"></i>
                        <a class="navbar-brand" href="http://localhost/task_manager/?url=add_team"><h5 class="card-title font-weight-bold">Add New Team</h5></a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm bg-warning text-white rounded-lg">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-list"></i>
                        <a class="navbar-brand" href="http://localhost/task_manager/?url=list_user"><h5 class="card-title font-weight-bold">List Users</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>