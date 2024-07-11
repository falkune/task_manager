<div class="sidebar bg-body-secondary vh-100 pt-5">
    <p class="d-flex w-50 m-3">
        <span class="mx-2">
            <i class="fa-solid fa-house"></i>
        </span>
        <a class="navbar-brand" href="http://localhost/task_manager/?url=dashboard">Dashboard</a>
    </p>
    <p class="d-flex w-50 m-3">
        <span class="mx-2">
            <i class="fa-solid fa-list"></i>
        </span>
        <a class="navbar-brand" href="http://localhost/task_manager/?url=task_list">Mes Tâches</a>
    </p>
    <p class="d-flex w-50 m-3">
        <span class="mx-2">
            <i class="fa-solid fa-plus"></i>
        </span>
        <a class="navbar-brand" href="http://localhost/task_manager/?url=add_task">Ajouter Tâches</a>
    </p>
    <p class="d-flex w-50 m-3">
        <span class="mx-2">
            <i class="fa-solid fa-users-line"></i>
        </span>
        <a class="navbar-brand" href="http://localhost/task_manager/?url=my_team">Mon Equipe</a>
    </p>
    <p class="d-flex w-50 m-3">
        <span class="mx-2">
            <i class="fa-solid fa-user"></i>
        </span>
        <a class="navbar-brand" href="http://localhost/task_manager/?url=profil">Mon Profil</a>
    </p>
    <?php if(isset($_SESSION['user_info']) && $_SESSION['user_info']['statut'] == "Admin"){ ?>
        <p class="d-flex w-50 m-3">
            <span class="mx-2">
                <i class="fa-solid fa-plus"></i>
            </span>
            <a class="navbar-brand" href="http://localhost/task_manager/?url=add_team">Creer Equipe</a>
        </p>
        <p class="d-flex w-50 m-3">
            <span class="mx-2">
                <i class="fa-solid fa-list"></i>
            </span>
            <a class="navbar-brand" href="http://localhost/task_manager/?url=list_team">Liste Equipes</a>
        </p>
        <p class="d-flex w-50 m-3">
            <span class="mx-2">
                <i class="fa-solid fa-list"></i>
            </span>
            <a class="navbar-brand" href="http://localhost/task_manager/?url=create_user">Liste Users</a>
        </p>
    <?php } ?>
</div>