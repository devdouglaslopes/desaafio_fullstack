<?php
  //recebem os dados que estão chegando por POST
  
  $nome_completo = $_POST['nome_completo'];
  $cpf = $_POST['cpf'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $cep = $_POST['cep'];
  $uf = $_POST['uf'];
  $cidade = $_POST['cidade'];
  $bairro = $_POST['bairro'];
  $numero = $_POST['numero'];
  $complemento = $_POST['complemento'];
  $por_onde_soube_do_evento = $_POST['por_onde_soube_do_evento'];
  
  
  //fazendo conexão com o banco de dados
  include('banco.php');
  
   $testacpf = "select * from tbcadastro where cpf='$cpf'";
    
   $consulta1 = $conexao->query($testacpf);

   if ($consulta1 == true){
    //verifica se encontrou pelo menos uma linha
    if($consulta1->num_rows > 0){
     header ('location: cadastro.php?cad=er');
    } else {
    
    

		 //criar sql de consulta
     $sql = "insert into tbcadastro values (null,'".$nome_completo."','".$cpf."','".$email."','".$telefone."','".$cep."','".$uf."','".$cidade."','".$bairro."','".$endereco."','".$numero."','".$complemento."','".$por_onde_soube_do_evento."')";
  	  
  
     //realizar o insert
     $consulta = $conexao->query($sql);
     
     //testa se o insert deu certo
     if ($consulta == true){
      header ('location: cadastro.php?cad=ok');
     } else {
     header ('location: cadastro.php?cad=erro');
      
     }
	 
    }
    
  } 
  


?>