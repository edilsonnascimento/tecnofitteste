<?php 
	include("cabecalho.php");
	include("pedido-banco.php");
	include("item-banco.php");

	$pedido = buscaUltimoPedido($conexao);
	$idPedido = $pedido['idPedido'];
	$idProduto = $_POST['idProduto'];
	$quantidadeProduto = $_POST['quantidadeProduto'];
	$valor = $_POST['valor'];

    echo "quantidade: " . $quantidadeProduto;
    echo "pedido: " . $idPedido;
    echo "produto: " . $idProduto;
    echo "valor:" .$valor;

/*   
 if (adicionaItem($conexao, $idPedido, $idProduto, $quantidadeProduto, $valor)){
		 header("Location: pedido-formulario.php?idPedido=$idPedido"); 
		 die();       		
	} else{
		?> <p class="text-danger">Produto NÃO pode ser adicionado!</p> 
		<?php $msg = mysql_error($conexao);
	} 
*/

	adicionaItem($conexao, $idPedido, $idProduto, $quantidadeProduto, $valor);
    header("Location: pedido-formulario.php?idPedido=$idPedido");
    die(); 
   
?>
      
<?php include("rodape.php");?>