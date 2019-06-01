<table class="table">
	<form action="item-adiciona.php" method="post">
		<thead>
			<tr>
			    <th scope="col">SKU</th>
			    <th scope="col">Nome</th>
			    <th scope="col">Descrição</th>
			    <th scope="col">Preço</th>
			    <th scope="col">Quantidade</th>
			    <th scope="col">Valor</th>
			    <th scope="col">Acões</th>
		    </tr>
	    </thead>
	    <tbody>
			<tr>
				<td>
					<input class="form-control" type="text" name="sku" value="<?=$produto['sku']?>" readonly="true">
				</td>
				<td>
					<input class="form-control" type="text"	name="nome" value="<?=$produto['nome']?>" readonly=“true”>
				</td>
				<td>
					<textarea class="form-control" type="text" name="descricao" readonly=“true”><?=$produto['descricao'] ?></textarea>
				</td>
				<td>
					<input class="form-control" type="text"	id="id_preco" name="preco" value="<?=$produto['preco']?>" readonly=“true”>
				</td>
				<td>
					<input class="form-control" id="id_quantidade" type="text"	name="quantidade" value="">
				</td>
				<td>
					
					<input class="form-control" type="text"	id="id_valor" name="valor" value="" readonly=“true”>
					<script>
						     document.querySelector('#id_valor').value = document.querySelector('#id_preco').value *document.querySelector('#id_quantidade').value;
					</script>
				</td>				
				<td>
			   	    <input name="id" type="hidden" value="<?=$produto['idProduto']?>" />
		            <button class="btn btn-primary">Adiciona</button>
			   </td>
			</tr>
		</tbody>
 	</form>
</table>
