<?php

$estado = $_POST['estado']; 
include('banco.php');
	
	
	 $sql = "select * from cidades where id_estado=".$estado;
	 $consulta = $conexao->query($sql);//executa a consulta
	 echo $consulta->num_rows;

	 if ($consulta->num_rows > 0) {
	 	 while($ln=$consulta->fetch_array(MYSQLI_ASSOC)){
	     	 echo '<option value="'.$ln['id'].'" >'.$ln['nome'].'</option>';
		 } 
	 }	
	 else{
	  echo 'nada';
	  }




?>