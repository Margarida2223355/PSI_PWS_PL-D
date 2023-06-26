<div class="content-wrapper">
<h2 class="text-left top-space">Empresa</h2>
<br>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Designação Social</h3></th><th><h3>Email</h3><th><h3>Telefone</h3></th><th><h3>NIF</h3></th><th><h3>Localidade</h3></th><th><h3>Opções</h3>
            </th></thead>
            <tbody>
            <?php foreach ($empresas as $empresa) { ?>
                <tr>
                    <td><?=$empresa->id?></td>
                    <td><?=$empresa->designacaosocial?></td>
                    <td><?=$empresa->email?></td>
                    <td><?= $empresa->telefone ?></td>
                    <td><?= $empresa->nif ?></td>
                    <td><?= $empresa->localidade ?></td>
                    <td>
                        <a href="index.php?c=empresa&a=show&id=<?=$empresa->id ?>"
                           class="btn btn-info" role="button">Mostrar</a>
                        <a href="index.php?c=empresa&a=edit&id=<?=$empresa->id ?>"
                           class="btn btn-info" role="button">Editar</a>
                        <a href="index.php?c=empresa&a=delete&id=<?=$empresa->id ?>"
                           class="btn btn-warning" role="button">Apagar</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Criar uma nova Empresa</h3>
        <p>
            <a href="index.php?c=empresa&a=create" class="btn btn-info" role="button">Novo</a>
        </p>
    </div>
</div>

</div>


