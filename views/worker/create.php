<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=worker&a=store" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Criar Funcionário
        </h1>
        <div class="row">
            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="email">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" name="password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="username">
                    <label for="floatingInput">Username</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="telefone">
                    <label for="floatingInput">Telefone</label>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-floating">
                    <input type="text" class="form-control" name="morada">
                    <label for="floatingInput">Morada</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="codpostal">
                    <label for="floatingInput">Código Postal</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="localidade">
                    <label for="floatingInput">Localidade</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="nif">
                    <label for="floatingInput">NIF</label>
                </div>
            </div>
        </div>
        <?php
            if(isset($user -> errors)) {
                echo $user -> errors -> on('email');
                echo $user -> errors -> on('password');
            }
        ?>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Criar</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>