<div class="content-wrapper">
<div>
    <h2 class="text-left top-space">Empresa</h2>
    <h2 class="top-space"></h2>
    <div class="col-sm-12">
        <table class="table tablestriped">
            <tbody>
            <?php $empresa; ?>
            <tr>
                <th>Id</th>
                <td><?=$empresa->id?></td>
            </tr>
            <tr>
                <th>Nome</th>
                <td><?=$empresa->designacaosocial?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?=$empresa->email?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?=$empresa->telefone?></td>
            </tr>
            <tr>
                <th>NIF</th>
                <td><?=$empresa->nif?></td>
            </tr>
            <tr>
                <th>Morada</th>
                <td><?=$empresa->morada?></td>
            </tr>
            <tr>
                <th>Código Postal</th>
                <td><?=$empresa->codigopostal?></td>
            </tr>
            <tr>
                <th>Localidade</th>
                <td><?=$empresa->localidade?></td>
            </tr>
            <tr>
                <th>Capital Social</th>
                <td><?=$empresa->capitalsocial?></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <p>
            <a href="index.php?c=auth&a=home" class="btn btn-info" role="button">Voltar</a>
        </p>
    </div>
</div> <!-- /row -->
</div>