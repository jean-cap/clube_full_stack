<h1>Cadastrar Usuário</h1>

<hr>

<?php echo getFlashMessage('message'); ?>

<form action="pages/forms/create_user.php" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
    </div>

    <div class="mb-3">
        <label for="surname" class="form-label">Sobrenome</label>
        <input type="text" class="form-control" id="surname" name="surname" placeholder="Digite seu sobrenome">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
</form>