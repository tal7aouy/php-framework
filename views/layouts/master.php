<?php
use talhaouy\phpmvc\Application;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $this->title; ?></title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        .error{
            color:red;
            font-size: 7rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand font-monospace fw-bold" href="#">PHP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
            <?php if(Application::guest()):?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>
            </ul>
            <?php else: ?>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link"  href="/profile">Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo Application::$app->user->displayName();?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </li>

                </ul>
            <?php endif;?>
        </div>
    </div>
</nav>
<main class="container">
    <?php if(Application::$app->session->getFlashMessage('success')):?>
    <div class="alert alert-success">
        <?php echo Application::$app->session->getFlashMessage('success');?>
    </div>
    <?php endif;?>
    {{content}}
</main>
<footer class="mb-0 fixed-bottom bg-dark">
    <p class="text-white text-center my-4">Created By <a class="nav-link d-inline" href="mailto:talhaouycoding@gmail.com">TALHAOUY MHAMMED</a> ,PHP VERSION : <?php echo PHP_VERSION;?></p>
</footer>
<script src="/js/bootstrap.min.js"></script>
</body>
</html>

