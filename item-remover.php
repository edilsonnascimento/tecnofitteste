<?php 
     include("item-banco.php");
 
     $idProduto = $_POST['idProduto'];
     $idPedido = $_POST['idPedido'];

     echo $idProduto;
     echo "     ";
     echo $idPedido;

/*
	 if (removerItemProduto($conexao, $idPedido, $idProduto)){
	 	 header("Location: pedido-formulario.php?idPedido=$idPedido");
		 die();            		
	 } else{?>
	   		<p class="text-danger">Produto NÃO pode ser removido!</p> 
		 	<?php $msg = mysql_error($conexao);
	 }
*/	 

	 removerItemProduto($conexao, $idPedido, $idProduto);
	 header("Location: pedido-formulario.php?idPedido=$idPedido");
     die();            		
?>
