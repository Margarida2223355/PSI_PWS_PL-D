<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=auth&a=login" method="POST">
        <h1 class="h3 my-3 fw-normal">FORMULÁRIO LOGIN</h1>
        <div class="form-floating">
            <input type="text" class="form-control" name="fuser">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" name="fpass">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Login</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>