<?php
     include("conecta.php");	

    function adicionaItem($conexao, $idPedido, $idProduto, $quantidadeProduto, $valor){
    	$query = "INSERT INTO ItemPedido (idPedido, idProduto, quantidadeProduto, valor) VALUES ({$idPedido}, {$idProduto}, {$quantidadeProduto}, {$valor})";
    	return mysqli_query($conexao, $query);
    }

	function listeProdutosItem($conexao, $idPedido){
			$produtos = array();
			$resultado = mysqli_query($conexao, "SELECT * FROM Produto AS p
												 JOIN ItemPedido AS i ON i.idProduto = p.idProduto
												 WHERE i.idPedido = {$idPedido}");
			while ($produto = mysqli_fetch_assoc($resultado)) {
				array_push($produtos, $produto);
			}
			return $produtos;
	}

	function removerItemProduto($conexao, $idPedido, $idProduto){
		$query = "DELETE FROM ItemPedido WHERE idPedido=$idPedido AND idProduto=$idProduto";
		$retrun = mysqli_query($conexao, $query);
	}

	function listarTodosProdutosItem($conexao){
			$produtos = array();
			$resultado = mysqli_query($conexao, "SELECT * FROM Produto AS p
												 JOIN ItemPedido AS i ON i.idProduto = p.idProduto
												 WHERE 1=1 ORDER BY 1");
			while ($produto = mysqli_fetch_assoc($resultado)) {
				array_push($produtos, $produto);
			}
			return $produtos;
	}