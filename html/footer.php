</div>
</div>
<?php include 'pagina_conexao.php';?>

<div class="rodape">

    <footer>

        <div class="container-fluid text-center">

            <div class="row informaçoes-primarias py-3">

                <div class="col-lg-3">


                    <h5 id="fale-conosco">Nossos telefones:</h5>
                    
                    

                    <ul class="list-unstyled">

                        <li>(31)3456-0967</li>
                        <li>(31)3478-2331</li>
                    </ul>
                    
                </div>

                <div class="col-lg-3">

                    <h5>Horário de atendimento:</h5>

                    <ul class="list-unstyled">
                        <li>8h00 às 18h00</li>
                        <li>Segunda à Sábado</li>
                    </ul>           
                </div>

                <div class="col-lg-3 pdd-special">

                    <h5>Nossa localização:<span style="font-size: 26px"><button class="fas fa-map-marker-alt loc-tamanho" type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalCenter"></button></span></h5>  

                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">	
                            <div class="modal-body">
                                <iframe  class="col-lg-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3655.7803056300645!2d-46.668182784405964!3d-23.612210769358498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a0bf7346baf%3A0xd756d1a0261c4c1a!2sBal%C3%A3o+da+Inform%C3%A1tica+S%C3%A3o+Paulo+Moema!5e0!3m2!1spt-BR!2sbr!4v1539034124567" width="650" height="450" frameborder="0" style="border:1" allowfullscreen></iframe>
                            </div>
                        </div>	  
                    </div>


                    <ul class="list-unstyled">

                        <li>Av. Presidente Costa e Silva</li>
                        <li>Juiz de Fora - MG</li>
                    </ul>


                </div>


                <div class="col-lg-3">
                
                    <h5>Receba nossas novidades por <br> e-mail:</h5>
                    <form action="newsletter.php" class="input-group mb-3" method="POST">
                        <input type="email" name="imail" required class="form-control" value="<?php if(isset($e_mail)){ echo $e_mail;} ?>" aria-describedby="emailHelp" placeholder="E-mail" aria-label="Recipient's username">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" style="color: white">Cadastrar</button>
                        </div>
                        

                    </form>

                </div>  

    </div>

</div>



<div class="container-fluid text-center">


    <div class = "row text-center icons">

        <div class="col-lg-12 text-center py-2">

            <span style="font-size: 32px"><a href="https://www.facebook.com/balaodainformatica.com.br/"><i class="fab fa-facebook-f"></i></a></span>
            <span style="font-size: 32px"><a href="https://twitter.com/balaoinfo"><i class="fab fa-twitter"></i></a></span>
            <span style="font-size: 32px"><a href="https://www.instagram.com/balaoitatiba/"><i class="fab fa-instagram"></i></a></span>
            <span style="font-size: 32px"><a href="https://plus.google.com/discover"><i class="fab fa-google-plus-g"></i></a></span>
            <span style="font-size: 12px" class="lock" data-toggle="modal" data-target="#login"><i class="fas fa-lock"></i></span>



            <div class="modal fade faleconosco-footer" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tela do usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">

                  <form action="valida-login.php" method="post">
                    <div class="form-group">
                        <label for="txUsuario">Usuario</label>
                        <input type="text" name = "usuario" required="required" class="form-control" id="txUsuario"  placeholder="Digite seu nome de usuario">

                    </div>
                    <div class="form-group">
                        <label for="txSenha">Senha</label>
                        <input type="password" name="senha" class="form-control" required="required" id="txSenha" placeholder="Digite sua senha">
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-dark" value="Entrar">Login</button>

                </form>
            </div>

        </div>
    </div>
</div>


</div>

</div>

</div>

</footer>

</div>



<!-- Fim do footer -->
<!------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------>













</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"></script>







</html>