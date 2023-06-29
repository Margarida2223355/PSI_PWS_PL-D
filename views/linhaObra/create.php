<main class="form-signin w-25 m-auto text-center">
    <form action="index.php?c=linhaobra&a=store" method="POST">
        <h1 class="h3 my-3 fw-normal">
            Criar Servico
        </h1>
        <div class="card-body">
            <h2>Linhas de Obra</h2>
            <table class="table">
            <thead>
                <tr>
                <th scope="col" class="col-6 col-sm-1">Quantidade</th>
                <th scope="col">Serviço</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                <form action="index.php?c=linhaobra&a=store" method="post">
                <input type="hidden" name="folha_obra_id" value="<?= $folhaobra->id?>">
                <td><input type="number" min="1" class="form-control" name="quantidade"></td>
                <td>
                    <select class="form-select" name="servico_referencia">
                        <?php foreach($servicos as $servico){?> 
                                <option value="<?= $servico->referencia?>"> <?= $servico->descricao; ?></option> <?php } ?>
                    </select>
                </td>
                </form>
                </tr>
            </tbody>
            </table>    
        </div>
        <button class="mt-3 btn btn-lg btn-primary" type="submit">Criar</button>
        <p class="mt-4 text-muted">@ 2022-2023</p>
    </form>
</main>