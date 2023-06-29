<div class="container">
    <div class="card">
    <form action="index.php?c=folhaobra&a=store" method="POST">
        <div class="card-body">
        <h2>Criar Folha de Obra</h2>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Data</th>
                <th scope="col">Valor Total</th>
                <th scope="col">IVA Total</th>
                <th scope="col">Estado</th>
                <th scope="col">Cliente</th>
                <th scope="col">Funcionário</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><input type="date" class="form-control" name="data"></td>
                <td><input type="text" class="form-control" name="valor_total" value="0" readonly></td>
                <td><input type="text" class="form-control" name="iva_total" value="0" readonly></td>
                <td>
                    <input type="text"class="form-control" name="estado" value="em_lancamento" readonly>
                </td>
                <td>
                    <select class="form-select" name="cliente_id" >
                    <option selected></option>
                    <?php foreach($clientes as $cliente){?> 
                            <option value="<?= $cliente->id?>"> <?= $cliente->username; ?></option> <?php } ?>
                    </select>
                </td>
                <td>
                    <select class="form-select" name="funcionario_id">
                        <option value="<?= $auth->getId()?>"><?= $auth->getUsername()?></option>
                    </select>
                </td>
                </tr>
            </tbody>
            </table>
            <button class="mt-3 btn btn-lg btn-primary" type="submit">Criar Folha de Obra</button>
        </div>
    </form>
    </div>
</div>




