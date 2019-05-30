<?php 
 	include("cabecalho.php"); 
 	include("produto-banco.php");


 	$id = $_GET['id'];
 	$produto = busqueProduto($conexao, $id);

 ?>
	<h1>Fomulário altera Produto</h1>
	<form action="produto-altera.php" method="post">
		<input type="hidden" name="id" value="<?=$produto['id']?>">
		<table class="table">

			<?php include("produto-formulario-base.php") ?>

		    <tr>
		    	<td><input class="btn-primary" type="submit" value="Alterar"></td>
		    </tr>
		</table>
	</form>

<?php include("rodape.php"); ?>