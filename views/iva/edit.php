<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=iva&a=update&id=<?= $iva -> id ?>" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Servico <b><?= $iva -> id ?></b>
        </h1>
        <div class="row">
            <div class="col-sm-7">
                <div class="form-floating">
                    <input type="text" class="form-control" name="percentagem" value="<?= $iva->percentagem ?>">
                    <label for="floatingInput">percentagem</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="descricao" value="<?= $iva->descricao ?>">
                    <label for="floatingInput">Descricao</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="em_vigor" value="<?= $iva->em_vigor ?>">
                    <label for="floatingInput">Vigor</label>
                </div>
            </div>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Atualizar</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>