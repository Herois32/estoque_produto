<!-- Iniciando o home da página -->
<div class="container-fluid">
    <input type="hidden" name="token" value="ehOCabraMesmo">
    <div class="well well-sm clearfix ls-table-group-actions">
        <p class="d-inline-block">
            <strong class="counterChecks">Produtos:</strong>
            <span class="counterChecksStr">Listagem</span>
        </p>
        <div class="actions pull-left">
            <div class="btn-group">
                <!-- Botão para adicionar novo produto -->
                <a href="<?php echo BASE_URL; ?>addProdutos/addProd" class="btn btn-primary"> ADICIONAR</a>
                <!-- Botão para acionar modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
            Importar XML
            </button>
        </div>
    </div>
</br></br></br></br>
<!-- Aqui estou iniciando a minha tabela para apresentar na tela os produtos -->
    <table class="table ls-table">
        <thead>
            <tr>
                <th class="hidden-xs">Código</th>
                <th class="hidden-xs">Produto
                <th class="hidden-xs">Preço</th>
                <th class="ls-nowrap col-xs-5">Descrição</th>
                <th class="ls-table-actions">Ações</th>
            </tr>
        </thead>
        <!-- Listando os produtos -->
        <?php foreach($lista as $item): ?>
        <tbody>
            <tr>
                <td><?php echo $item['et_codigo']; ?> </td>
                <td> <?php echo $item['et_nome']; ?></td>
                <!-- Aqui estou formatando o valor para real -->
                <td><?php echo 'R$ ' . number_format($item['et_preco'], 2, ',', '.'); ?></td>
                <td><?php echo $item['et_descricao']; ?></td>
                <td>
                <a href="<?php echo BASE_URL; ?>addProdutos/edit/<?php echo $item['et_id'] ?>" class="btn btn-xs btn-warning">Editar</a>
                <a href="<?php echo BASE_URL; ?>addProdutos/del/<?php echo $item['et_id'] ?>" class="btn btn-xs btn-danger">Excluir</a>               
                </td>
            </tr>
        </tbody>
        <!-- Final do foreach -->
        <?php endforeach; ?>
    </table>


<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Importar XML</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="<?php echo BASE_URL; ?>addProdutos/xmlProd" enctype="multipart/form-data">
             <div class="form-group">
             <label class="col-md-4 control-label" for="arquivo">Importar</label>
             <div class="col-md-4">
             <input id="arquivo" name="arquivo" class="input-file" type="file">
             <span class="help-block">Tamanho máximo 2MB</span>
         </div>
         </div> 
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Importar</button>
        </form>   
      </div>
    </div>
  </div>
</div>


</div><!-- Fim da div principal -->
 