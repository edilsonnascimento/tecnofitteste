<?php 
	include("cabecalho.php");
    include("produto-banco.php");

    $id = $_POST['id'];
    $sku = $_POST['sku'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];

	if (altereProduto($conexao, $id, $sku, $nome, $descricao, $preco)){
		?> <p class="text-success">Produto <?php echo $nome; ?> no valor de  <?php echo $preco?> alterado com sucesso!</p> <?php            		
	} else{
		?> <p class="text-danger">Produto NÃO pode ser alterado!</p> 
		<?php $msg = mysql_error($conexao);
	} ?>

<?php include("rodape.php");?>