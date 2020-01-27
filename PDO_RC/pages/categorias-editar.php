    <?php require_once 'global.php' ?>
<?php
try {
    $id = $_GET['id'];
    $aux = new Pessoa($id);
} catch (Exception $e) {
    Erro::trataErro($e);
}
?>
<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Categoria</h2>
    </div>
</div>
<form action="categorias-editar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="hidden" name="id" value="<?php echo $aux->id ?>">

                <input type="text" name="nome" value="<?php echo $aux->nome ?>" class="form-control" placeholder="O nome">

                <label for="endereco">Endereço</label>
                <input type="text" name="endereco" value="<?php echo $aux->endereco ?>" class="form-control" placeholder="O endereço">

                <label for="numero">Número</label>
                <input type="text" name="numero" value="<?php echo $aux->numero ?>" class="form-control" placeholder="O número">

                <label for="tipo">Tipo</label>
                <input type="text" name="tipo" value="<?php echo $aux->tipo ?>" class="form-control" placeholder="Nome do tipo">

            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php' ?>
