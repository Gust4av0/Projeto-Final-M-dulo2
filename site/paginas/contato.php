<div class="mb-3">
    <form action="formulario.php">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input type="name" class="form-control" id="name" placeholder="Seu nome aqui!" required>
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Seu email aqui!" required>

        <label for="exampleFormControlTextarea1" class="form-label">Mensagem:</label>
        <textarea class="form-control" id="mensagem" rows="3"></textarea>
</div>

<button type="submit" class="btn btn-success">Enviar!</button>
<button type="reset" class="btn btn-danger">Resetar</button>
</form>