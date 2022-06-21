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
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="cadastro.php">Cadastro</a></li>
                        <li><a href="inscritos.php" class="active">Inscritos</a></li>
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
                          if (isset ($_GET['alter'])) {
                            if ($_GET['alter']=='ok'){
                                echo    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  <strong>Atencao!</strong> Dados alterados com sucesso!
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>';
                            }
                          }

                          if (isset ($_GET['alter'])) {
                            if ($_GET['alter']=='erro'){
                                echo    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <strong>Atencao!</strong>Erro ao alterar dados!
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>';
                            }
                          }
                          if (isset ($_GET['exclu'])) {
                            if ($_GET['exclu']=='ok'){
                                echo    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                  <strong>Atencao!</strong> Dados excluidos com sucesso!
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>';
                            }
                          }

                          if (isset ($_GET['exclu'])) {
                            if ($_GET['exclu']=='erro'){
                                echo    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                  <strong>Atencao!</strong>Erro ao excluir dados!
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
                                    <form method="POST" action="inscritos.php">
                                <label>Busca de Inscritos</label>
                                    <div class="input-group">
                                        <input name="texto" class="form-control" type="text"
                                        placeholder="Busca por nome" required>
                                          <div class="input-group-append">
                                            <button class="btn btn-dark" type="submit"><i class="fa fa-search"></i> Buscar</button>
                                          </div>
                                    </div>
                                      </form>
                                    
                                    <hr>
                                </div>
                  <table  class="table table-bordered" id="tabelainscritos" width="100%" cellspacing="0">
                  <label id="est">Estado</label>
            <?php 
              include('banco.php');
            ?>
            <select  id="estado">

                <option val="">Selecione Estado</option>
                    <?php 
                            $sql = 'select * from estados';
                            $consulta = $conexao->query($sql);//executa a consulta
          
                            if ($consulta->num_rows > 0) {
                            
                                //echo "Busca efetuada com sucesso!";
                                while($ln=$consulta->fetch_array(MYSQLI_ASSOC)){
                                    
                                echo '<option value="'.$ln['id'].'" >'.$ln['nome'].'</option>';
                            }	
                              
                        }
                    ?>               

              </select>  
              <h3 id="aguarde"></h3>
              Estado
              <select  id="cidade">
                  <option val="">...</option>             
              </select>   
                        <thead class="thead-dark">
                            <tr>
                                <th>Código</th>
                                <th>Nome Completo</th>
                                <th>CPF</th>
                                <th>E-mail</td>
                                <th>Telefone</th>
                                  <th>CEP</th>
                                  <th>Estado</th>
                                  <th>Cidade</th>
                                  <th>Bairro</th>
                                <th>Endereço</th>
                                <th>Número</th>
                                <th>Complemento</th>
                                <th>Por onde soube do evento</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        <?php
                            //a função isset testa se uma variavel ta chegando
                                if(isset($_POST['texto'])){
                                    $texto = $_POST ['texto'];
                                      
                                        

                                //fazendo conexão com o banco de dados
                                    include('banco.php');
                                    
                                    //criar sql de consulta
                                    $sql = "select * from tbcadastro where nome_completo like '%$texto%'";
                                            
                                    
                                    //realizar a consulta
                                    $consulta = $conexao->query($sql);
                                    
                                    //testa se consulta deu certo
                                    if ($consulta == true){
                                        //verifica se encontrou pelo menos uma linha
                                        if($consulta->num_rows > 0){
                                        while( $linha=$consulta->fetch_array(MYSQLI_ASSOC)){
                                        echo '<tr>
                                        <td>'.$linha['codusu'].'</td>
                                        <td>'.$linha['nome_completo'].'</td>
                                        <td>'.$linha['cpf'].'</td>
                                        <td>'.$linha['email'].'</td>
                                        <td>'.$linha['telefone'].'</td>
                                        <td>'.$linha['cep'].'</td>
                                        <td>'.$linha['uf'].'</td>
                                        <td>'.$linha['cidade'].'</td>
                                        <td>'.$linha['bairro'].'</td>
                                        <td>'.$linha['endereco'].'</td>
                                        <td>'.$linha['numero'].'</td>
                                        <td>'.$linha['complemento'].'</td>
                                        <td>'.$linha['por_onde_soube_do_evento'].'</td>
            
                                        <td>
                                        <a class="btn btn-sm btn-info" href="alterar.php?id='.$linha['codusu'].'"><i class="fa fa-pen"></i> Alterar</a>
                                          <hr>
                                          <a class="btn btn-sm btn-danger" href="excluirinsc.php?id='.$linha['codusu'].'"><i class="fa fa-trash"></i> Excluir</a>
                                        </td> 
                                        
                                    </tr>';
                                        }
                                        }else{
                                            
                                        }
                                        
                                    }
                                }
                                  ?>
                            </tbody>
                          </table>         
                        </div>
                        
                    </div>
                </div>
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
    <script src="jquery/jquery.js"></script>
    <script src="jquery3/jquery.js"></script>
    <script>
      $(function(){
                    
        $("#aguarde").hide()
                $('#estado').change(function(){
                    var estado = $("#estado").val();
                    $("#aguarde").show();
                    $("#aguarde").text('Aguarde...').delay( 1000 );// aparecer
                     $.post('buscacidade.php', {estado: estado}, function(resposta) {
                            $("#cidade").html(resposta);
                     });
                     $("#aguarde").fadeOut();     // sumir
                })
          })  
    </script>    
  </body>
</html>