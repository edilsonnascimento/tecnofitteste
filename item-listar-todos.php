<?php include("item-banco.php");
      include("cabecalho.php");
?>


<table class="table table-striped table-bordered">
	<thead>
		<tr>
		    <th scope="col">Codigo Pedidido</th>
		    <th scope="col">SKU</th>
		    <th scope="col">Nome</th>
		    <th scope="col">Descrição</th>
		    <th scope="col">Preço</th>
		    <th scope="col">Quantidade</th>
		    <th scope="col">Valor</th>
	    </tr>
    </thead>
    <tbody>

	   <?php $produtos = listarTodosProdutosItem($conexao);
		foreach ($produtos as $produto) :?>
			<tr>
			   <td><?=$produto['idPedido']?></td>
			   <td><?=$produto['sku']?></td>
		       <td><?=$produto['nome']?></td>
		       <td><?=substr($produto['descricao'], 0, 60)?></td>
		       <td><?=$produto['preco']?></td>
		       <td><?=$produto['quantidadeProduto']?></td>
		       <td><?=$produto['valor']?></td>
		      
			   </td>
		   </tr><?php 
		endforeach?>
	</tbody>
</table>

<?php include("rodape.php");?>