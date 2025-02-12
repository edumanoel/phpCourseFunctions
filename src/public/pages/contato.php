<h2>Contato</h2>

<?php
$flash = getFlashMessage();
if ($flash) {
    echo "<div class=\"alert alert-{$flash['type']}\" role=\"alert\">";
    echo $flash['message'];
    echo "</div>";
} ?>

<div class="container">
    <form action="pages/forms/contato.php" method="post">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
        </div>
        <div class="form-group">
            <label for="subject">Assunto</label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Digite o assunto">
        </div>
        <div class="form-group">
            <label for="message">Mensagem</label>
            <textarea class="form-control" id="message" name="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>