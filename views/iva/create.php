<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=iva&a=store" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Criar Servico
        </h1>
        <div class="row">
            <div class="col-sm-7">
                <div class="form-floating">
                    <input type="text" class="form-control" name="percentagem">
                    <label for="floatingInput">Percentagem</label>
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control" name="descricao">
                    <label for="floatingInput">Descricao</label>
                </div>
                <!-- <div>
                    <label>Vigor:</label>
                    <select name="em_vigor">
                        <option value="true">True</option>
                        <option value="false">False</option>
                    </select>
                </div> -->
            </div>
        </div>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Criar</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>