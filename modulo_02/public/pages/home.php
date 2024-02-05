<h1>Página Inicial</h1>

<?php echo getFlashMessage('message'); ?>

<hr>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">E-mail</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $users = all('users');

        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>{$user->id}</td>";
            echo "<td>{$user->nome}</td>";
            echo "<td>{$user->sobrenome}</td>";
            echo "<td>{$user->email}</td>";
            echo "<td><a class='link-warning' href='/?page=edit_user&id={$user->id}'>Editar</a></td>";
            echo "<td><a class='link-danger' href='/?page=delete_user&id={$user->id}'>Excluir</a></td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>