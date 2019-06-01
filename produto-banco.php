<?php	
	include("conecta.php");
	
	function busqueProduto($conexao, $id){
		$query = "SELECT * FROM Produto WHERE idProduto = {$id}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}

	function listeProdutos($conexao){
		$produtos = array();
		$resultado = mysqli_query($conexao, "SELECT p.* FROM Produto AS p");
		while ($produto = mysqli_fetch_assoc($resultado)) {
			array_push($produtos, $produto);
		}
		return $produtos;
	}

	function listeProdutosSku($conexao,$sku){
		$produtos = array();
		$resultado = mysqli_query($conexao, "SELECT p.* FROM Produto AS p WHERE sku LIKE '%{$sku}%'");
		while ($produto = mysqli_fetch_assoc($resultado)) {
			array_push($produtos, $produto);
		}
		return $produtos;
	}

 	function insereProduto($conexao, $sku, $nome, $descricao, $preco){
 		$query = "INSERT INTO Produto (sku, nome, descricao, preco) VALUES ('{$sku}', '{$nome}', '{$descricao}', {$preco})";
 		return mysqli_query($conexao, $query);
 	}	

 	function removeProduto($conexao, $id){
 		$query = "DELETE FROM Produto WHERE idProduto = {$id}";
 		return mysqli_query($conexao, $query);
 	}

	function altereProduto($conexao, $id, $sku, $nome, $descricao, $preco){
 		$query = "UPDATE Produto SET sku='{$sku}', nome='{$nome}', descricao='{$descricao}', preco={$preco} WHERE idProduto = {$id}";
 		return mysqli_query($conexao, $query);
 	}	
