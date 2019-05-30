<?php 
 	include("cabecalho.php"); 

    $produto = array("sku" => "", "nome" => "", "descricao" => "", "preco");
 ?>
	<h1>Cadastro de Produtos</h1>
	<form action="produto-adiciona.php" method="post">
		<table class="table">

			<?php include("produto-formulario-base.php"); ?>

		    <tr>
		    	<td><input class="btn-primary" type="submit" value="Cadastrar"></td>
		    </tr>
		</table>
	</form>

<?php include("rodape.php"); ?>