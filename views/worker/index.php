<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=worker&a=update&id=<?= $auth -> getId(); ?>" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Funcionário <b><?= $auth -> getUsername(); ?></b>
        </h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="email">
            <label for="floatingInput">Email</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="password">
            <label for="floatingPassword">Password</label>
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