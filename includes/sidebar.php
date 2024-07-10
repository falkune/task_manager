<div class="w-25 bg-body-tertiary vh-100">
    <p>
        <span class="mx-2">
            <i class="fa-solid fa-house"></i>
        </span>
        <a href="http://localhost/task_manager/?url=dashboard">Dashboard</a>
    </p>
    <p>
        <span class="mx-2">
            <i class="fa-solid fa-list"></i>
        </span>
        <a href="http://localhost/task_manager/?url=task_list">Mes Tâches</a>
    </p>
    <p>
        <span class="mx-2"><i class="fa-solid fa-users-line"></i></span> Mon Equipe</p>
    <p><span class="mx-2"><i class="fa-solid fa-user"></i></span> Mon Profil</p>
    <?php if(isset($_SESSION['user_info']) && $_SESSION['user_info']['statut'] == "Admin"){ ?>
        <p>
            <span class="mx-2">
                <i class="fa-solid fa-plus"></i>
            </span>
            <a href="http://localhost/task_manager/?url=create_team">Creer Equipe</a>
        </p>
        <p>
            <span class="mx-2">
                <i class="fa-solid fa-list"></i>
            </span>
            <a href="http://localhost/task_manager/?url=list_team">Liste Equipes</a>
        </p>
        <p>
            <span class="mx-2">
                <i class="fa-solid fa-list"></i>
            </span><a href="http://localhost/task_manager/?url=create_user">Liste Users</a>
        </p>
    <?php } ?>
</div>