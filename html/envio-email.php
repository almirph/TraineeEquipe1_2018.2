<?php include "header-adm.php";?>
<?php include "pagina_conexao.php";?>

<div class="container cadastrar-usuarios">
    <div class="lista-adm">
        <h1>E-mail</h1>
    </div>
    <form action="Validando-envio.php" method="post">
        <div class="form-group">
            <label>Assunto</label>
            <input type="text" autocomplete="off" name="Assunto" required="required" class="form-control" maxlength="50">
        </div>

        <div class="form-group">
            <label>Texto</label>
            <textarea class="form-control" required="required" autocomplete="off" name='descricao' rows="6"></textarea>
        </div>
        <div class="pp-adm">

            <button type="submit" class="btn btn-dark ">Enviar</button>

        </div>

    </form>

    <div>
        <?php include "footer.php";?>