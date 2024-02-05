<h1>Editar Usuário</h1>

<hr>

<?php
echo getFlashMessage('message');

$user = find('users', 'id', $_GET['id']);
?>

<form action="pages/forms/update_user.php" method="post">
    <input type="hidden" name="id" value="<?= $user->id ?>">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="<?= $user->nome ?>" placeholder="Digite seu nome">
    </div>

    <div class="mb-3">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" value="<?= $user->sobrenome ?>" placeholder="Digite seu sobrenome">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $user->email ?>" placeholder="Digite seu e-mail">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Atualizar</button>
</form>