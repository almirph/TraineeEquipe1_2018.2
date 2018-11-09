<?php include 'Header.php';

		function clean_input($data){

			$cleandata = trim($data);
			$cleandata = stripcslashes($cleandata);
			$cleandata = htmlspecialchars($cleandata);

			return $cleandata;
		}


	       if($_SERVER['REQUEST_METHOD'] == 'POST'){

			                          
			        $nome = $_POST['nome'];
			        $sobrenome = $_POST['sobrenome'];
			        $email = $_POST['email'];
			        $texto = $_POST['mensagem'];


			      					 if($nome == ""){

			                				$erro_nome = '* O nome é obrigatório';
			                      		}
			                            elseif($sobrenome == ""){

			                              $erro_sobrenome = '* O sobrenome é obrigatório';
			                            }
			                              elseif ($email == "") {

			                                $erro_email = '* O e-mail é obrigatório';
			                              }
			                              	elseif ($texto=="") {

			                              		$erro_texto = '* O texto é obrigatório';
			                              	}
			                              		else{

			                              			$nome = clean_input($nome);
			                              			$sobrenome = clean_input($sobrenome);
			                              			$email = clean_input($email);
			                              			
			                              		}
			                          

			                        } 


                ?>



                        <div class="container faleconosco2">

                        	<h1 style="margin-top: 20px;">Fale conosco</h1>
                          	<hr>

                        <form method="post">
                          
                              <div class="form-row">

                                <div class="form-group col-sm-6">

                                  <label for="nome" style="text-align: left;">Nome:</label>
                                  <input type="text" class="form-control areatexto" name="nome" id="name" placeholder="Digite seu nome">
                                  <?php if(isset($erro_nome)){ ?>

                                 	 <div class="alert alert-danger alerta" role="alert"><?= $erro_nome; ?></div>
                            	 <?php } ?>

                                </div>

                                 <div class="form-group col-sm-6">

                                  <label for="sobrenome">Sobrenome:</label>
                                  <input type="text" class="form-control areatexto" id="name" name="sobrenome" placeholder="Digite seu sobrenome">
                                 
                                   <?php if(isset($erro_sobrenome)){ ?>

                                 	 <div class="alert alert-danger alerta"><?= $erro_sobrenome; ?></div>

                            	   <?php } ?>
                                  
                                </div>

                             </div>

                             <div class="form-row">

                                 <div class="form-group col-sm-12">

                                      <label for="email">E-mail:</label>
                                      <input type="email" class="form-control areatexto" id="email" name="email" placeholder="Digite seu e-mail">
                                       
                                        <?php if(isset($erro_email)){ ?>

                                 	 	<div class="alert alert-danger alerta"><?= $erro_email; ?></div>

                            	 		<?php } ?>
                                 </div>

                             </div>

                                <div class="form-row text-mensagem">

		                              <div class="form-group col-sm-12">

		                                    <label for="email">Mensagem:</label>
		                                      <textarea class="form-control areatexto" rows="8" name="mensagem" placeholder="Digite sua mensagem"></textarea>

		                                      	<?php if(isset($erro_texto)){ ?>

		                                 	 	<div class="alert alert-danger alerta"><?= $erro_texto; ?></div>
		                                 	 	
		                            	 		<?php } ?>
		                              </div>


                            	</div>

                                  <div class="modal-footer">
                                    <button type ="submit" type="button" class="btn btn-outline-dark">Enviar</button>
                                  </div>

                                    </form>
                            </div>

                            <h3>Confirmaçao</h3>
                     <p> 
                     	<?php 

                     		echo $nome;
                     		echo '<br>';
                     		echo $sobrenome;
                     		echo '<br>';
                     		echo $email;
                     		echo '<br>';
                     		echo $texto;



                     		?>
                     	

                     </p>



<?php include 'footer.php'; ?>