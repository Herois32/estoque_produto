<?php if($error == 'exist'): ?>
    <div class="alert alert-Warning">
  <strong>Código</strong> do Produo já existe</a>.
</div>
<?php endif; ?>

<div class="container-fluid">

    <input type="hidden" name="token" value="ehOCabraMesmo">
    <div class="well well-sm clearfix ls-table-group-actions">


</br>

<div class="container">
  <h3>Adicionar Produto Produto</h3>
<form method="POST" action="<?php echo BASE_URL; ?>addProdutos/add_save" class="form">
  <div class="form-group">
    <label for="codigo" >Código:</label>
    <input type="codigo" class="form-control" name="codigo" id="codigo">
  </div>
  <div class="form-group">
    <label for="nome">Nome do Produto:</label>
    <input type="text" class="form-control" name="nome" id="nome">
  </div>
  <div class="form-group">
    <label for="valor">Valor R$:</label>
    <input type="text" class="form-control" name="preco" id="valor">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição:</label>
    <input type="text" class="form-control" name="descricao" id="descricao">
  </div>    
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>




</div>