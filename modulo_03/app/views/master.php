<!DOCTYPE html>
<html lang="pt-br" class="h-100" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jean Carlos">

    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/sticky-footer-navbar.css">
</head>

<body class="d-flex flex-column h-100">
    <?php require 'Partials/Header.php' ?>

    <main class="flex-shrink-0">
        <div class="container">
            <h1><?php echo $title; ?></h1>

            <div class="container">
                <?php require_once $viewFileName; ?>
            </div>
        </div>
    </main>

    <?php require 'Partials/Footer.php' ?>

    <script src="/assets/js/bootstrap.bundle.js"></script>
</body>

</html>