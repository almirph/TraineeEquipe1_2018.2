
<?php include 'header-adm.php'; ?>



<div class="container">

        <div class="lista-adm">
                <h1>Cadastrar categoria</h1>
        </div>
        <hr>

        <form action="inserir_categoria.php" method="post">

                <div class="form-row" type="categoria">

                        <div class="form-group col-sm-6">
                                <div class="form-group">
                                        <label>Categoria:</label>
                                        <input type="text" autocomplete="off" name="categoria" class="form-control"
                                        maxlength="50" required="required">
                                </div>
                        </div>

                </div>

                <div class="pp-adm">
                        <button type="submit" class="btn btn-dark ">Inserir Categoria</button>
                </div>

        </form>



</div>


<?php include 'footer.php'?>