<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=cliente&a=update&id=<?= $cliente->id?>" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Cliente <b><?= $cliente->username?></b>
        </h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="username" value="<?= $cliente->username ?>">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="email" value="<?= $cliente->email ?>">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="telefone" value="<?= $cliente->telefone ?>">
            <label for="floatingInput">Telefone</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="nif" value="<?= $cliente->nif ?>">
            <label for="floatingInput">NIF</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="morada" value="<?= $cliente->morada ?>">
            <label for="floatingInput">Morada</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="codpostal" value="<?= $cliente->codpostal ?>">
            <label for="floatingInput">Codigo Postal</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="localidade" value="<?= $cliente->localidade ?>">
            <label for="floatingInput">Localidade</label>
        </div>
        <?php
            if(isset($cliente -> errors)) {
                echo $cliente -> errors -> on('email');
                echo $cliente -> errors -> on('password');
                echo $cliente -> errors -> on('nif');
                echo $cliente -> errors -> on('telefone');
            }
        ?>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Atualizar</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>