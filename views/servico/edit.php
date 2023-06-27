<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=servico&a=update&id=<?= $servico -> id ?>" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Servico <b><?= $servico -> id ?></b>
        </h1>
        <div class="row">
            <div class="col-sm-7">
                <div class="form-floating">
                    <input type="text" class="form-control" name="descricao" value="<?= $servico->descricao ?>">
                    <label for="floatingInput">Descricao</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="preco_hora" value="<?= $servico->preco_hora ?>">
                    <label for="floatingInput">Preco/Hora</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="iva" value="<?= $servico->iva ?>">
                    <label for="floatingInput">Iva</label>
                </div>
            </div>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Atualizar</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>