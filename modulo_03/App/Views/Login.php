<?php
$this->layout('Master', ['title' => $title]);

echo getFlash('message');
?>

<?php if (!logged()) : ?>
    <div class="form-signin w-100 m-auto">
        <form class="mt-5" action="/login" method="post">
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="nome@exemplo.com">
                <label for="floatingInput">E-mail</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Senha">
                <label for="floatingPassword">Senha</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
        </form>
    </div>
<?php else : ?>
    <p>Você já está logado! <a href="/">Ir para a página inicial</a></p>
<?php endif; ?>
