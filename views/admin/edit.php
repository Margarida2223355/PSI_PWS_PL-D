<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=admin&a=update&id=<?= $user -> id ?>" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Funcionário <b><?= $user -> id ?></b> - <b><?= $user -> username ?></b>
        </h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="email" value="<?= $user -> email ?>">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="old_pass">
            <label for="floatingInput">Password antiga:</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="new_pass">
            <label for="floatingInput">Password nova:</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="new_pass2">
            <label for="floatingInput">Confirmar password:</label>
        </div>
        <?php
            if(isset($user -> errors)) {
                echo $user -> errors -> on('email');
                echo $user -> errors -> on('password');
            }
        ?>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Atualizar</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>