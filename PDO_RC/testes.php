<?php require_once 'global.php' ?>
<?php
try {
    $aux = new Produto();
    $lista = $aux->listar();
} catch(Exception $e) {
  Erro::trataErro($e);
}
?>
<?php require_once 'header.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Lista de produtos</h2>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="produtos-criar.php" class="btn btn-info btn-block">Iserir produto</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $linha): ?>
                    <tr>
                        <td><a href="detalhe.php" class="btn btn-link"><?php echo $linha['id'] ?></a></td>
                        <td><a href="detalhe.php" class="btn btn-link"><?php echo $linha['nome'] ?></a></td>
                        <td><a href="detalhe.php" class="btn btn-link"><?php echo $linha['preco'] ?></a></td>
                        <td><a href="detalhe.php" class="btn btn-link"><?php echo $linha['quantidade'] ?></a></td>
                        <td><a href="produtos-editar.php?id=<?php echo $linha['id'] ?>" class="btn btn-info"><span class="glyphicon glyphicon-cog"></span></a></td>
                        <td><a href="produtos-excluir-post.php?id=<?php echo $linha['id'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'rodape.php' ?>
