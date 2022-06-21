<?php
    include('testasessao.php');
    $id = $_GET ['id'];
                                                 

    //fazendo conexão com o banco de dados
        include('banco.php');
        
        //criar sql de consulta
        $sql = "select * from tbcadastro where codusu = '$id'";
                
        
        //realizar a consulta
        $consulta = $conexao->query($sql);
        
        //testa se consulta deu certo
        if ($consulta == true){
            if($consulta->num_rows > 0){
            $linha=$consulta->fetch_array(MYSQLI_ASSOC);

            }
        }
       
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">

    <title>Rosalia Event's</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>

<body id="body">

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="cadastro.php" class="active">Cadastro</a></li>
                        <li><a href="inscritos.php">Inscritos</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->



            <!-- Content Row -->
            
            <div class="row col-md-12">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 m-auto">
                            <div id="card" class="card border-left-dark shadow h-100 py-2  col-md-12">
                        <div class="card-body">
                        
                        <?php
                              if (isset ($_GET['cad'])) {
                                if ($_GET['cad']=='ok'){
                                    echo    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                      <strong>Atencao!</strong> Dados inseridos com sucesso!
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>';
                                }
                              }

                              if (isset ($_GET['cad'])) {
                                if ($_GET['cad']=='erro'){
                                    echo    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                      <strong>Atencao!</strong> Erro ao inserir dados!
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>';
                                }
                              }
                              if (isset ($_GET['cad'])) {
                                if ($_GET['cad']=='er'){
                                    echo    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                      <strong>Atencao!</strong> Cpf já cadastrado!
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>';
                                }
                              }
                              
                              ?>

                            <div class="row no-gutters align-items-center">
                                 
                                <div class="col mr-2">
                                
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                        
                                        
                                        <label>Informe os dados abaixo</label>
                                        <hr>
                                        
                                    </div>
                                    <div class="col-md-8 m-auto">
                                    <?php
                                      if (isset ($_GET['alter'])) {
                                        if ($_GET['alter']=='ok'){
                                            echo    '<div class="alert alert-success alert-dismissible fade show" role="alert">
															  <strong>Atencao!</strong> Dados inseridos com sucesso!
															  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															  </button>
															</div>';
                                        }
                                      }
                                      if (isset ($_GET['alter'])) {
                                        if ($_GET['alter']=='erro'){
                                            echo    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                              <strong>Atencao!</strong> 
                                                              Erro ao inserir dados!
                                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                              </button>
                                                            </div>';
                                        }
                                      }
                                      ?>

                                    <div class="row no-gutters align-items-center">
									     
                                        <div class="col mr-2">
										
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                                
											</div>
											
											<form name="f1" method="POST" action="alterainsc.php"> 
										     
                                            <div class="input-group">											
										    <input value="<?php echo $linha['codusu']; ?>"  class="form-control" type="hidden" name="codusu" id="codusu" >
										    </div>
											
										    <label>Nome Completo</label><br>
										    <div class="input-group">											
										    <input value="<?php echo $linha['nome_completo']; ?>" placeholder="informe seu nome" class="form-control" type="text" name="nome" id="nome" >
										    </div>
											
                                            
                                            <label>CPF</label><br>
											<div class="input-group">											
											    <input value="<?php echo $linha['cpf']; ?>" class="form-control" type="text" name="cpf" id="cpf" placeholder="informe seu cpf" >
											</div>
                                            <label>E-mail</label><br>
											<div class="input-group">						
											    <input value="<?php echo $linha['email']; ?>"  placeholder="informe seu e-mail" class="form-control" type="e-mail" name="email" id="email" >
											</div>
											<label>Telefone</label><br>
											<div class="input-group">											
											    <input value="<?php echo $linha['telefone']; ?>" class="form-control" type="text" name="telefone" id="telefone" placeholder="informe seu telefone" >
											</div>
                                            <label>CEP</label><br>
											<div class="input-group">						
											    <input value="<?php echo $linha['cep']; ?>"  placeholder="informe seu cep" class="form-control" type="cep" name="cep" id="cep" >
											</div>
                                            <label>Cidade</label><br>
											<div class="input-group">						
											    <input value="<?php echo $linha['cidade']; ?>"  placeholder="informe sua cidade" class="form-control" type="bairro" name="cidade" id="cidade" >
											</div>
                                            <label>Bairro</label><br>
											<div class="input-group">						
											    <input value="<?php echo $linha['bairro']; ?>"  placeholder="informe seu bairro" class="form-control" type="bairro" name="bairro" id="bairro" >
											</div>
											<label>Endereço</label><br>
											<div class="input-group">											
											    <input value="<?php echo $linha['endereco']; ?>" class="form-control" type="text" name="endereco" id="endereco"  placeholder="informe seu endereço" >
											</div>
                                            <label>Número</label><br>
											<div class="input-group">											
											    <input value="<?php echo $linha['numero']; ?>" class="form-control" type="text" name="numero" id="numero"  placeholder="informe o número de sua casa">
											</div>
											<hr>
                                            <label>Complemento</label><br>
											<div class="input-group">											
											    <input value="<?php echo $linha['complemento']; ?>" class="form-control" type="text" name="complemento" id="complemento"  placeholder="informe o complemento">
											</div>
											<hr>
                                            <label>Por onde soube do evento</label><br>
											<div class="input-group">											
											    <input value="<?php echo $linha['por_onde_soube_do_evento']; ?>" class="form-control" type="text" name="pose" id="pose"  placeholder="informe por onde você soube do evento">
											</div>
											<hr>
											<button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Salvar</button>
                                            
                                                    </div>          
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        <!-- /.container-fluid -->
                     </div>
        <!-- End of Main Content -->
                </div>
            </div>
            </div>
        
            </div>
       



  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

            <!-- inicio cep-->
             <script>

                    $(document).ready(function() {

                    function limpa_formulário_cep() {
                        // Limpa valores do formulário de cep.
                        $("#endereco").val("");
                        $("#bairro").val("");
                        $("#cidade").val("");
                        $("#uf").val("");
                    }
                    
                    //Quando o campo cep perde o foco.
                    $("#cep").blur(function() {

                        //Nova variável "cep" somente com dígitos.
                        var cep = $(this).val().replace(/\D/g, '');

                        //Verifica se campo cep possui valor informado.
                        if (cep != "") {

                            //Expressão regular para validar o CEP.
                            var validacep = /^[0-9]{8}$/;

                            //Valida o formato do CEP.
                            if(validacep.test(cep)) {

                                //Preenche os campos com "..." enquanto consulta webservice.
                                $("#endereco").val("...");
                                $("#bairro").val("...");
                                $("#cidade").val("...");
                                $("#uf").val("...");

                                //Consulta o webservice viacep.com.br/
                                $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                                    if (!("erro" in dados)) {
                                        //Atualiza os campos com os valores da consulta.
                                        $("#endereco").val(dados.logradouro);
                                        $("#bairro").val(dados.bairro);
                                        $("#cidade").val(dados.localidade);
                                        $("#uf").val(dados.uf);
                                    } //end if.
                                    else {
                                        //CEP pesquisado não foi encontrado.
                                        limpa_formulário_cep();
                                        alert("CEP não encontrado.");
                                    }
                                });
                            } //end if.
                            else {
                                //cep é inválido.
                                limpa_formulário_cep();
                                alert("Formato de CEP inválido.");
                            }
                        } //end if.
                        else {
                            //cep sem valor, limpa formulário.
                            limpa_formulário_cep();
                        }
                    });
                    });
                        
            </script>
              <!-- fim cep-->

                <!-- inicio mascaras -->

                    <script src="jquery3/jquery.js"></script>
                    <script src="mascaras/jquery.inputmask.js"></script>
                    <script src="mascaras/maskmoney.js"></script>
                    
                    <script>
                    $(document).ready(function(){
                        $("#cpf").inputmask("999.999.999-99");
                            $("#cep").inputmask("99.999-999");
                            $("#telefone").inputmask("(99)99999-9999");
                                $("#gravar").click(function() {
                                $("#mensagem").modal('show');

                            })
                    })
                        
                    </script>
                   <!-- fim mascaras -->

  </body>
</html>