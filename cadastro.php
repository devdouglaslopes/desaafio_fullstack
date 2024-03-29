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
                        <li><a href="fazerlogin.php">Inscritos</a></li>
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
                                                      <strong>Atenção!</strong> Dados inseridos com sucesso!
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>';
                                }
                              }

                              if (isset ($_GET['cad'])) {
                                if ($_GET['cad']=='erro'){
                                    echo    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                      <strong>Atenção!!</strong> Erro ao inserir dados!
                                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>';
                                }
                              }
                              if (isset ($_GET['cad'])) {
                                if ($_GET['cad']=='er'){
                                    echo    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                      <strong>Atenção!!</strong> Cpf já cadastrado!
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
                                    <div class="col-md-8 m-auto text-dark">
                                    <form name="f1" method="POST" action="salvarinsc.php"> 
                                    
                                    <label>Nome Completo</label><br>
                                    <div class="input-group">                                           
                                    <input placeholder="Informe seu nome" class="form-control" type="text" name="nome_completo" id="nome_completo" required >
                                    </div>
                                    <label>CPF</label><br>
                                    <div class="input-group">      
                                        <input class="form-control" type="text" name="cpf" id="cpf" placeholder="Informe seu CPF"
                                        required  >
                                    </div>
                                    <label>E-mail</label><br>
                                    <div class="input-group">                                           
                                        <input class="form-control" type="e-mail" name="email" id="email"
                                        placeholder="Informe seu email" >
                                    </div>
                                    <label>Telefone</label><br>
                                    <div class="input-group">                                           
                                        <input class="form-control" type="text" name="telefone" id="telefone"
                                        placeholder="Informe seu telefone" >
                                    </div>
                                    <label>CEP</label><br>
                                    <div class="input-group">                                           
                                        <input class="form-control" type="text" name="cep" id="cep"
                                        placeholder="Informe seu CEP" >
                                    </div>
                                    <label>Estado</label><br>
                                    <div class="input-group">                                           
                                        <input class="form-control" type="text" name="uf" id="uf"
                                        placeholder="Informe seu estado" >
                                    </div>
                                    <label>Cidade</label><br>
                                    <div class="input-group">                                           
                                        <input class="form-control" type="text" name="cidade" id="cidade" 
                                        placeholder="Informe sua cidade">
                                    </div>
                                    <hr>
                                    <label>Bairro</label><br>
                                    <div class="input-group">                                           
                                        <input class="form-control" type="text" name="bairro" id="bairro" 
                                        placeholder="Informe seu bairro">
                                    </div>
                                    <hr>
                                    <label>Endereço</label><br>
                                    <div class="input-group">                                           
                                        <input class="form-control" type="text" name="endereco" id="endereco"
                                        placeholder="Informe seu endereço" >
                                    </div>
                                    <label>Número</label><br>
                                    <div class="input-group">                                           
                                        <input class="form-control" type="number" name="numero" id="numero" 
                                        placeholder="Informe seu número">
                                    </div>
                                    <label>Complemento</label><br>
                                    <div class="input-group">                                           
                                        <input class="form-control" type="text" name="complemento" id="complemento"
                                        placeholder="Informe um complemento (opcional)" >
                                    </div>
                                    <label>Por onde soube do evento</label><br>
                                    <div class="input-group">                                           
                                        <input class="form-control" type="text" name="por_onde_soube_do_evento" id="por_onde_soube_do_evento" 
                                        placeholder="Diga-nos por onde soube do evento">
                                    </div>
                                    <hr>
                                    <button class="btn btn-info" type="submit"><i class="fa fa-save"></i> Salvar</button>
                                    </form>
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

              <!-- inicio cep -->
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
      <!-- fim cep -->

          <!-- inicio das mascaras -->
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
            <!-- fim das mascaras -->


  </body>
</html>