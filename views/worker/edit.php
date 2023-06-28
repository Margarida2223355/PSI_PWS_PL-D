<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=worker&a=update&id=<?= $worker -> id ?>" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Funcionário <b><?= $worker -> id ?></b>
        </h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="username" value="<?= $worker -> username ?>">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="email" value="<?= $worker -> email ?>">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="nif" value="<?= $worker -> nif ?>">
            <label for="floatingInput">Nif</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="telefone" value="<?= $worker -> telefone ?>">
            <label for="floatingInput">Telefone</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="morada" value="<?= $worker -> morada ?>">
            <label for="floatingInput">Morada</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="codPostal" value="<?= $worker -> codpostal ?>">
            <label for="floatingInput">Código Postal</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" name="localidade" value="<?= $worker -> localidade ?>">
            <label for="floatingInput">Localidade</label>
        </div>
        <?php
            if(isset($worker -> errors)) {
                echo $worker -> errors -> on('email');
                echo $worker -> errors -> on('password');
                echo $worker -> errors -> on('telefone');
                echo $worker -> errors -> on('nif');
            }
        ?>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Atualizar</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>