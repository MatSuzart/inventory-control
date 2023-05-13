<h1>Editar Produto</h1>

<form action="" method="post">

    Cod. Barras: </br>
    <input type="text" name="cod" value="<?php echo $info['cod']; ?>"/><br/><br/>

    Nome do Produto: </br>
    <input type="text" name="name" value="<?php echo $info['name']; ?>" required/><br/><br/>

    Preço do Produto: </br>
    <input type="text" name="price" value="<?php echo $info['price']; ?>" required/><br/><br/>

    Quantidade: </br>
    <input type="text" name="quantity" value="<?php echo $info['qunatity']; ?>" required/><br/><br/>

    Quantidade Minima: </br>
    <input type="text" name="min_quantity" value="<?php echo $info['min_quantity']; ?>" required/><br/><br/>

    <input type="submit" value="Salvar">

</form>