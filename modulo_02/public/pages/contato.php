<h1>Contato</h1>

<p>
    Você pode entrar em contato conosco pelo formulário nesta página.
</p>

<form action="pages/forms/contato.php" method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
    </div>

    <div class="mb-3">
        <label for="subject" class="form-label">Assunto</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Sobre o que você quer falar?">
    </div>

    <div class="mb-3">
        <label for="message" class="form-label">Mensagem</label>
        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Digite sua mensagem aqui"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>