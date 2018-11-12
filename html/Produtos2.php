<?php include 'Header.php'; ?>  


  <nav class="navbar navbar-expand-lg navbar-light categoria">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse action-menu" id="navbarTogglerDemo01">

      <ul class="list-group mr-auto mt-2 mt-lg-0  menu-list">
      <?php include "nav-categoria.php"?>
      </ul>
    </div>
  </nav>
  <div class="container pag-produtos">
    <h1>Mais Vendidos</h1><br>
    <div class="row card-produto">
      <?php include 'Produtos-loop.php'?>
      </div>
      </div>
  <div class="produtos-pagina">
    <nav aria-label="...">
      <ul class="pagination justify-content-end">
        <li class="page-item active pagina-produtos cor-pagina1  "><a class="page-link cor-pagina " href="#">1<span class="sr-only">(atual)</span></a></li>
        <li class="page-item ">
          <a class="page-link pagina-produtos" href="#">2 </a>
        </li>
        <li class="page-item pagina-produtos"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link pagina-produtos" href="#">Próximo</a>
        </li>
      </ul>
    </nav>
  </div>
<!-- INICIO FOOTER -->
        <?php include 'footer.php'?>