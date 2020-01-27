<?php require_once 'global.php';


<?php require_once 'header.php' ?>
<div class="row">
  <div class="col-md-12">
    <h2>Lista de produtos</h2>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
   <!--  <a href="categorias-criar.php" class="btn btn-info btn-block">Inserir cliente</a> -->
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <table class="table">
      <thead>
        <tr>
         <!-- <th>Id</th> -->
         <th>Descrição</th>
         <th>Quantidade</th>
         <th>Valor</th>
         <!-- <th class="acao">Editar</th>
         <th class="acao">Inativar</th> -->
       </tr>
     </thead>
     <tbody>
      <?php foreach ($lista as $linha): ?>
        <tr>
         <!--  <td><a href="detalhe.php" class="btn btn-link"><?= (isset($linha['id'])) ? $linha['id'] : ''; ?></a></td> -->
          <td><a href="detalhe.php" class="btn btn-link"><?= (isset($linha['descricao'])) ? $linha['descricao']: ''; ?></a></td>
          <td><a href="detalhe.php" class="btn btn-link"><?= (isset($linha['quantidade'])) ? $linha['quantidade']: ''; ?></a></td>
          <td><a href="detalhe.php" class="btn btn-link">R$ <?= (isset($linha['valor'])) ? $linha['valor'] : ''; ?></a></td>
          <!-- <td><a href="#" class="btn btn-info"><span class="glyphicon glyphicon-cog"></span></a></td>
          <td><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td> -->
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
</div>
<!-- <?php require_once 'parte-extra.php' ?> -->
<?php require_once 'rodape.php' ?>

