<?php $this->layout('Master', ['title' => $title]) ?>

    <p>Lista de usuários cadastrados</p>

<?php echo getFlash('message', 'success') ?>

<div x-data="users()" x-init="loadUsers">
    <ul>
        <template x-for="user in data">
            <li x-text="user.nome"></li>
        </template>
    </ul>
</div>
