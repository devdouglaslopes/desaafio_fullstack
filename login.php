<?php
  //recebem os dados que estão chegando por POST
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  //fazendo conexão com o banco de dados
  include('banco.php');
  
  //criar sql de consulta
  $sql = "select * from tblogin where email = '$email'
          and senha = '$senha'";
		  
  
  //realizar a consulta
  $consulta = $conexao->query($sql);
  
  //testa se consulta deu certo
  if ($consulta == true){
	 //verifica se encontrou pelo menos uma linha
	 if($consulta->num_rows > 0){
		//criando sessão 
		session_start();
        $_SESSION['login'] = 'ok';
        $_SESSION['login'] = $email;    
        //fim da sessão		
		header('Location: inscritos.php'); 
	 }else{
		header('Location: fazerlogin.php?login=erro'); 
	 }
	 
  }
?>