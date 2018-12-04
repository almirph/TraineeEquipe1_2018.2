<?php include "header-adm.php";?>


<div class="container home-adm">
    <div class="row">
        <div class="col-sm-4">

            <img class="img-home-adm" src="../assets/img/user.png" alt="user">

        </div>

        <div class="col-sm-auto">

            <h1>Bem vindo,
                <?php echo $_SESSION['Usuario'];?> !</h1>
            <hr>
            <a class="btn btn-dark btn-lg btn-block botao-home-adm" href="pagina_de_listagem.php" role="button">Produtos</a>
            <a class="btn btn-dark btn-lg btn-block botao-home-adm" href="inicial.php" role="button">Usuários</a>
            <a class="btn btn-dark btn-lg btn-block botao-home-adm" href="categoria.php" role="button">Categorias</a>
            <a class="btn btn-dark btn-lg btn-block botao-home-adm" href="envio-email.php" role="button">Enviar e-mails</a>

        </div>

    </div>

</div>





<?php include "footer.php";?>