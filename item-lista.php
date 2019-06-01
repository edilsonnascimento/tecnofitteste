<?php include("item-banco.php");?>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
		    <th scope="col">SKU</th>
		    <th scope="col">Nome</th>
		    <th scope="col">Descrição</th>
		    <th scope="col">Preço</th>
		    <th scope="col">Quantidade</th>
		    <th scope="col">Valor</th>
		    <th scope="col">Remover</th>
	    </tr>
    </thead>
    <tbody>

	   <?php $produtos = listeProdutosItem($conexao, $idPedido);
		foreach ($produtos as $produto) :?>
			<tr>
			   <td><?=$produto['sku']?></td>
		       <td><?=$produto['nome']?></td>
		       <td><?=substr($produto['descricao'], 0, 60)?></td>
		       <td><?=$produto['preco']?></td>
		       <td><?=$produto['quantidadeProduto']?></td>
		       <td><?=$produto['valor']?></td>
		       <td>
				   <form action="item-remover.php" method="post">
				   	    <input type="hidden" name="idPedido" value="<?=$idPedido?>">
				   	    <input type="hidden" name="idProduto" value="<?=$produto['idProduto']?>" />
			            <button class="btn btn-danger">remover</button>
			       </form>
			   </td>
		   </tr><?php 
		endforeach?>
	</tbody>
</table>