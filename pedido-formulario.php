<?php
 	include("cabecalho.php"); 
    include("produto-banco.php");
    include("pedido-banco.php");
    include("data.php");

    if  (array_key_exists("idPedido", $_GET)){
            $idPedido = $_GET['idPedido'];
            $pedido = buscaPedido($conexao, $idPedido);
?>
            <fieldset>
                <label>Número do Pedido:</label>
                <input type="text" style="text-align:center" name="idPedido" value="<?=$pedido['idPedido']?>">
                <label >Data: </label>
                <input type="text" style="text-align:center" name="data" value="<?=$pedido['dataCriacao']?>">
            </fieldset>
            <br /><br />
       <form action="produto-busca-sku.php" method="post">
            <label>Busca por SDK:</label>
            <input type="text" name="sku">
            <input type="hidden" name="idPedido" value="<?=$idPedido?>">
            <input class=" btn btn-primary" type="submit" name="" value="Buscar">
        </form>
<?php
        include("item-lista.php");
?>
        <a href="pedido-adiciona.php" role="button" onclick="openMenuModal();">Novo Pedido</a> 
<?php    

    } else{ 
?>
            <form action="pedido-adiciona.php" method="post">
                <input class=" btn btn-primary" type="submit" name="" value="Gerar Pedido">
            </form>
<?php  


}
/*

<?php include("pedido-adiciona.php");?>
<h1>Adicionar Itens do Pedido</h1>

<table class="table table-striped">
    <form action="produto-busca-sku.php" method="post">
        <tr>
            <td>  
                <label>SKU</label><br />
                <input type="text" name="sku" value="">
                <input class="btn-primary" type="submit" value="Buscar">
            </td>
        
        </tr>
    </form>
</table>   

<?php include("item-lista.php")?> 
*/

include("rodape.php"); ?>