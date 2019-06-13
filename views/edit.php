<?php
if(!empty($msg)) {
    echo $msg;
}
?>


<div class="container-fluid">

    <div class="well well-sm clearfix ls-table-group-actions">
       

</br>

<div class="container">
  <h3>Editar Produto</h3>
<form method="POST" >
  <div class="form-group">
    <label for="codigo" >Código:</label>
    <input type="codigo" class="form-control" name="codigo" id="codigo" value="<?php echo $info['et_codigo']; ?>">
  </div>
  <div class="form-group">
    <label for="nome">Nome do Produto:</label>
    <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $info['et_nome']; ?>">
  </div>
  <div class="form-group">
    <label for="preco">Valor R$:</label>
    <input type="text" class="form-control" name="preco" id="preco" value="<?php echo $info['et_preco']; ?>">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição:</label>
    <input type="text" class="form-control" name="descricao" id="descricao" value="<?php echo $info['et_descricao']; ?>">
  </div>    
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>
</div>




</div>