<?php require_once 'global.php' ?>
<?php
try {
    $id = $_GET['id'];
    $aux = new Produto($id);
} catch (Exception $e) {
    Erro::trataErro($e);
}
?>
<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Produto</h2>
    </div>
</div>
<form action="produtos-editar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="hidden" name="id" value="<?php echo $aux->id ?>">

                <input type="text" name="nome" value="<?php echo $aux->nome ?>" class="form-control" placeholder="Nome">

                <label for="preco">Preço</label>
                <input type="text" name="preco" value="<?php echo $aux->preco ?>" class="form-control" placeholder="Preço">

                <label for="quantidade">Quantidade</label>
                <input type="text" name="quantidade" value="<?php echo $aux->quantidade ?>" class="form-control" placeholder="Quantidade">

            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php' ?>
