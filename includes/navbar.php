<?php define("BASE_URL", "http://localhost/task_manager/"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- lien de bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- lien de fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <!-- la nav bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-end collapse navbar-collapse" id="navbarSupportedContent">
            
            <form class="d-flex " role="search">
                <?php if(!isset($_SESSION["user_info"])) { ?>
                    <a href="<?= BASE_URL ?>?url=register" class="btn">Sign up</a>
                    <a href="<?= BASE_URL ?>?url=login" class="btn">Sign in</a>
                <?php } else { ?>
                    <a href="" class="btn"><?= $_SESSION["user_info"]['firstname']; ?></a>
                    <a href="<?= BASE_URL ?>?url=logout" class="btn">Logout</a>
                <?php } ?>
            </form>
            </div>
        </div>
    </nav>
    