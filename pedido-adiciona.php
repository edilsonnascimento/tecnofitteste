<?php 
	include("pedido-banco.php");
	include("data.php");

    $dataCriacao = dataAtual();
    $totalPedido = 0;
    
	if (criaPedido($conexao, $totalPedido, $dataCriacao)){
		 $pedido = buscaUltimoPedido($conexao);
		 $idPedido = $pedido['idPedido'];
		 header("Location: pedido-formulario.php?idPedido=$idPedido");       		
	} else{
		?> <p class="text-danger">Produto NÃO pode ser adicionado!</p> 
		<?php $msg = mysql_error($conexao);
	} 
	
?>
<?php include("rodape.php");?>