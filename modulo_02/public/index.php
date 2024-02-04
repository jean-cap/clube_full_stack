<?php require '../app/functions/pages.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP devclass</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
        try {
            require load();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        ?>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>