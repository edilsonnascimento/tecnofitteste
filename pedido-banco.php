<?php

	include("conecta.php");

	function criaPedido($conexao, $totalPedido, $dataCriacao){
         $query = "INSERT INTO Pedido (total, dataCriacao) VALUES({$totalPedido}, '{$dataCriacao}')";
         return mysqli_query($conexao, $query);
	}

	function buscaUltimoPedido($conexao){
		$query = "SELECT * FROM Pedido WHERE idPedido = (SELECT MAX(idPedido) FROM Pedido);";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}

	function buscaPedido($conexao, $idPedido){
		$query = "SELECT * FROM Pedido WHERE idPedido = {$idPedido}";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	}
