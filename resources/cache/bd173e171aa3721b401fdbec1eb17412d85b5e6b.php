<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KindBook | <?php echo(isset($titre)) ? $titre : ' '; ?></title>
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
<header>KindBooK</header>

<?php if(isset($_SESSION['info'])): ?>
    <div>
        <strong>Information : </strong> <?php echo e($_SESSION['info']); ?>

    </div>
<?php endif; ?>

<nav>
    <a href="index.php">Accueil</a>

    <a href="index.php?action=profile">Profile</a>

    <a href="index.php?action=page3">Page 3</a>

    <?php if(isset($_SESSION['id'])): ?>
        Bonjour  <?php echo e($_SESSION['login']); ?> <a href='index.php?action=deconnexion'>Deconnexion</a></li>
    <?php else: ?>
        <a href='index.php?action=login'>Login</a>
        <a href='index.php?action=signin'>Inscription</a>
    <?php endif; ?>
</nav>

<main class="container">
    <?php echo $__env->yieldContent("content"); ?>
</main>

<footer>Le super pied</footer>
</body>
</html>