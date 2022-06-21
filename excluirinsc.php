<?php
  //recebem os dados que estão chegando por POST
  $id= $_GET['id'];
  
  //fazendo conexão com o banco de dados
  include('banco.php');
  
  //criar sql de delete
  $sql = "delete from tbcadastro where codusu = '$id'";
		  
  
  //realizar a consulta
  $consulta = $conexao->query($sql);
  
  //testa se consulta deu certo
  if ($consulta == true){

		
		
		header('Location: inscritos.php?exclu=ok'); 
	 }else{
		header('Location: inscritos.php?exclu=erro'); 
	 
	 
  }
?>