<?php	
	include("conecta.php");
	
	function listaPedidos($conexao){
		$resultado = mysqli_query($conexao, "SELECT p.*, c.nome AS categoria_nome FROM produtos AS p JOIN categorias AS c ON c.id = p.categoria_id");
		$produtos = array();
		
		while ($produto = mysqli_fetch_assoc($resultado)) {
	    	array_push($produtos, $produto);
		}
		return $produtos;
	}
