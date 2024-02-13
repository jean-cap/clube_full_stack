<?php $this->layout('Master', ['title' => $title]) ?>

    <p>Lista de usuários cadastrados</p>

<?php echo getFlash('message', 'success') ?>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">E-mail</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->nome ?></td>
                <td><?= $user->sobrenome ?></td>
                <td><?= $user->email ?></td>
                <td><a href="/user/<?= $user->id ?>">Detalhes</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php $this->start('scripts') ?>

    <script>
        async function loadUsers() {
            try {
                const {data} = await axios.get('/users');
                console.log(data);
            } catch (error) {
                console.log(error);
            }
        }

        loadUsers();
    </script>

<?php $this->stop() ?>
