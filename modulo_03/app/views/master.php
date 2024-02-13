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

        <div class="container">
            <?= $this->section('content') ?>
        </div>
    </div>
</main>

<?= $this->insert('Partials/Footer') ?>

<script src="/assets/js/bootstrap.bundle.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    axios.defaults.headers.common['HTTP_X_REQUESTED_WITH'] = 'XMLHttpRequest';
    axios.defaults.headers.common['Content-Type'] = 'application/json';
</script>

<?= $this->section('scripts') ?>

</body>

</html>