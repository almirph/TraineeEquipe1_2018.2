<?php include 'Header.php'; ?>


<nav class="navbar navbar-expand-lg navbar-light categoria">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
        aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span style="font-size: 14px;">
        <i class="fas fa-arrow-down"></i> Categoria</span>
    </button>
    <div class="collapse navbar-collapse action-menu" id="navbarTogglerDemo01">

        <ul class="list-group mr-auto mt-2 mt-lg-0  menu-list">
            <?php include "nav-categoria.php"?>
        </ul>
    </div>
</nav>
<div class="container pag-produtos">
    <h1>Novidades</h1><br>
    <div class="row  justify-content-center card-produto">

    <?php           
      $quantidade = '12';
      $sql = "SELECT * FROM produto ORDER BY id_produto DESC LIMIT $quantidade";
      $result = $db_connect->query($sql);

        while ($row2 = $result->fetch_assoc())
        {?>
            <a href="paginaProdutos.php?id_produto=<?php echo $row2['id_produto'];?>">

                <div class="col-sm">
                    <div class="card img-card" style="width:16rem;">
                        <img class="card-img-top" src="../assets/imagem_banco/<?php echo $row2['url_imagem']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title" style='color:black; font-size:16px;'>
                                <?php echo $row2['nome_produto'];?>
                            </h5>
                            <h5 style='color:red; font-size:26px;'>R$
                                <?php echo number_format($row2['preco'],'2',',','.');?>
                                <h5>

                        </div>
                    </div>
                </div>
            </a>

        <?php }?>
    </div>
</div>

<?php include 'footer.php'?>