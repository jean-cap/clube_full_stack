<?php
$this->layout('Master', ['title' => $title]);

echo getFlash('nome');
echo getFlash('sobrenome');
echo getFlash('email');
echo getFlash('password');
?>

<form action="/user/store" method="post">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome"
               value="<?= getOld('nome') ?>">
    </div>
    <div class="mb-3">
        <label for="sobrenome" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome"
               value="<?= getOld('sobrenome') ?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail"
               value="<?= getOld('email') ?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" name="password" value="<?= getOld('password') ?>">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>