<h2>Cadastrar Usuário</h2>

<?php 
    include '../app/views/fragments/flashMessage.php';
?>

<div class="container">
    <form action="actions/create_user.php" method="post">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
            <label for="lastName">Sobrenome</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Digite seu sobrenome">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
        </div>
        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>