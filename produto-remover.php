<?php 
     include("cabecalho.php");
     include("produto-banco.php");
 
     $id = $_POST['id'];
     
	 if (removeProduto($conexao, $id)){
	 	 header("Location: produto-lista.php?removido=true");
		 die();            		
	 } else{?>
	   		<p class="text-danger">Produto NÃO pode ser removido!</p> 
		 	<?php $msg = mysql_error($conexao);
	   }?>

<?php include("rodape.php");?>