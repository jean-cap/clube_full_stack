<!DOCTYPE html>
<html lang="pt-br" class="h-100" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jean Carlos">

    <title><?= $this->e($title) ?></title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/sticky-footer-navbar.css">
</head>

<body class="d-flex flex-column h-100">
<?= $this->insert('Partials/Header') ?>

<main class="flex-shrink-0">
    <div class="container">
        <h1><?= $this->e($title) ?></h1>
        <?= $this->section('content') ?>
    </div>
</main>

<?= $this->insert('Partials/Footer') ?>

<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="app.js"></script>

<?= $this->section('scripts') ?>

</body>

</html>