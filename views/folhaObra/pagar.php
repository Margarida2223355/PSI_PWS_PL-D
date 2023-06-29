
<h2><?= $empresa->designacaosocial?></h2>
    <table class="table">
            <thead>
                <tr>
                <th scope="col">NIF</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Morada</th>
                <th scope="col">Localidade</th>
                <th scope="col">Codigo Postal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><input type="text" class="form-control" name="nif" value="<?=$empresa->nif?>" readonly></td>
                <td><input type="text" class="form-control" name="email" value="<?=$empresa->email?>" readonly></td>
                <td><input type="text" class="form-control" name="telefone" value="<?=$empresa->telefone?>" readonly></td>
                <td><input type="text" class="form-control" name="morada" value="<?=$empresa->morada?>" readonly></td>
                <td><input type="text" class="form-control" name="localidade" value="<?=$empresa->localidade?>" readonly></td>
                <td><input type="text" class="form-control" name="codigopostal" value="<?=$empresa->codigopostal?>" readonly></td>
                
                </tr>
            </tbody>
            </table>
            <form action="index.php?c=folhaobra&a=update&id=<?= $folhaobra -> id ?>"  method="POST">
    <div class="card-body">
    <h2>Folha de Obra</h2>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Data</th>
            <th scope="col">Valor Total</th>
            <th scope="col">Sub Total</th>
            <th scope="col">IVA Total</th>
            <th scope="col">Estado</th>
            <th scope="col">Cliente</th>
            <th scope="col">Funcionário</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><input type="text" class="form-control" name="data" value="<?= $folhaobra->data?> "readonly></td>

            <td><input type="text" class="form-control" name="valor_total" value="<?= $folhaobra->valor_total?>" readonly></td>

            <td><input type="text" class="form-control" name="sub_total" value="<?= $folhaobra->sub_total?>" readonly></td>

            <td><input type="text" class="form-control" name="iva_total" value="<?= $folhaobra->iva_total?>" readonly></td>
            <td>
                <select class="form-select" name="estado">
                <option value="em_lancamento" disabled>Em Lançamento</option>
                <option value="emitida" disabled>Emitida</option>
                <option selected value="paga">Paga</option>
                </select>
            </td>
            <td>
                <?php 
                //buscar na base de dados o username do cliente e do funcionario pelo seu id
                $cliente = User::find($folhaobra->cliente_id);
                $funcionario = User::find($folhaobra->funcionario_id);
                ?>
                <select class="form-select" name="cliente_id" >
                <option selected value="<?= $folhaobra->cliente_id?>"><?= $cliente->username?></option>
            </td>
            <td>
                <select class="form-select" name="funcionario_id">
                    <option value="<?= $folhaobra->funcionario_id?>"><?= $funcionario->username?></option>
                </select>
            </td>
            </tr>
        </tbody>
        </table>
    </div>
    <button class="mt-3 btn float-end btn-primary" type="submit">Confirmar Pagamento</button>
</form>
    <div class="card-body">
        <h2>Linhas de Obra</h2>

    <?php 
        $linhaobras = LinhaObra::all();
        foreach($linhaobras as $linhaobra){
        if($linhaobra->folha_obra_id == $folhaobra->id){
            ?>
        <table class="table">
        <thead>
            <tr>
            <th scope="col" class="col-6 col-sm-1">Quantidade</th>
            <th scope="col">Serviço</th>
            <th scope="col">Valor Unitário</th>
            <th scope="col">Valor IVA</th>
            <th scope="col">Sub Total</th>
            <th scope="col">Valor Total</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td><input type="number" min="1" class="form-control" name="quantidade" value="<?= $linhaobra->quantidade?>"></td>
            <!-- pegar o servico para inserir o nome ao inves do Id -->
            <?php 
            $referencia = $linhaobra->servico_referencia;
            $servico = Servico::find($referencia);
            ?>
            <td>
                <select class="form-select" name="servico_referencia" >
                            <option value="<?= $linhaobra->servico_referencia?>"><?= 
                            $servico->descricao?> </option> 
                </select>
            </td>
            <td><input type="text" class="form-control" name="valor_unitario" id="valor_unitario" value="<?= $linhaobra->valor_unitario?>" readonly></td>
            
            <td><input type="text" class="form-control" name="iva_total" id="valor_iva" value="<?= $linhaobra->valor_iva?>" readonly></td>

            <td><input type="text" class="form-control" name="sub_total" value="<?= $linhaobra->quantidade * $linhaobra->valor_unitario?>" readonly></td>
            
            <td><input type="text" class="form-control" name="valor_total" value="<?= (($linhaobra->valor_unitario + $linhaobra->valor_iva) * $linhaobra->quantidade)?>" readonly></td>
            
            <td>
            </td>
            </tr>
        </tbody>
        </table>    
    </div> <?php
        }
        }
    ?>




