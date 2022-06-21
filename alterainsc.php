<?php
  //recebem os dados que estão chegando por 
  $codusu = $_POST['codusu'];
  $nome = $_POST['nome'];
  $cpf = $_POST['cpf'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $cep = $_POST['cep'];
  $uf = $_POST['uf'];
  $cidade = $_POST['cidade'];
  $bairro = $_POST['bairro'];
  $endereco = $_POST['endereco'];
  $numero = $_POST['numero'];
  $complemento = $_POST['complemento'];
  $pose = $_POST['pose'];
  
  
  //fazendo conexão com o banco de dados
  include('banco.php');
  
  //criar sql do update
   $sql = "update tbcadastro set nome_completo='$nome',cpf='$cpf',email='$email',telefone='$telefone',cep='$cep',uf='$uf',cidade='$cidade',bairro='$bairro',endereco='$endereco',numero='$numero',complemento='$complemento', por_onde_soube_do_evento='$pose' where codusu='$codusu'"; 
  	  
  //realizar o update
  $consulta = $conexao->query($sql);
  
  //testa se o update deu certo
  if ($consulta == true){
	  header ('location: inscritos.php?alter=ok');
  } else {
    header ('location: inscritos.php?alter=erro');
	 
  }
?>