<?php 
 	include("cabecalho.php"); 
 	include("produto-banco.php");


 	$sku = $_POST['sku'];
   ?> 
    <table class="table table-striped table-bordered">
    <form action="item-adiciona.php" method="post">
		<thead>
			<tr>
			    <th scope="col">SKU</th>
			    <th scope="col">Nome</th>
			    <th scope="col">Descrição</th>
			    <th scope="col">Preço</th>
			    <th scope="col">Quantidade</th>
			    <th scope="col">Valor</th>
			    <th scope="col">Ação</th>		   
		    </tr>
	    </thead>    	
	    <tbody>
	    	<?php $produtos = listeProdutosSku($conexao, $sku);
			foreach ($produtos as $produto) :?>
				<tr>
                   <input type="hidden" name="idProduto" value="<?=$produto['idProduto']?>">
				   <td><?=$produto['sku']?></td>
			       <td><?=$produto['nome']?></td>
			       <td><?=substr($produto['descricao'], 0, 60)?></td>
			       <td id="idPreco"><?=$produto['preco']?></td>
				   <td><input type="text" id="idQuantidade" name="quantidadeProduto"></td>
				   <td><input type="text" id="idvalor" name="valor" readonly="readonly"></td>
			       <td>
			       		<input type="submit" name="" value="Enviar">
			       </td>
			   </tr><?php 
			endforeach?>
		</tbody>
    </form>
</table>

<script src="calcula-itemPedido.js"></script>

<?php include("rodape.php"); ?>
