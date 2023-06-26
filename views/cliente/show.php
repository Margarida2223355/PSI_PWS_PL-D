<h2 class="text-left top-space">Clientes</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table tablestriped"><thead><th><h3>Id</h3></th><th><h3>Name</h3></th><th><h3>Email</h3><th></thead>
        <tbody>
        <?php foreach ($clientes as $cliente) { ?>
            <tr>
            <td><?=$cliente->id?></td>
            <td><?=$cliente->username?></td>
            <td><?=$cliente->email?></td>

            <td>
                <a href="index.php?c=cliente&a=edit&id=<?=$cliente->id ?>"class="btn btn-info" role="button">Edit</a>
                <a href="index.php?c=cliente&a=delete&id=<?=$cliente->id ?>"class="btn btn-warning" role="button">Delete</a>
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    </div>
    <div class="col-sm-6">
        <h3>Criar cliente</h3>
        <p>
        <a href="index.php?c=cliente&a=create" class="btn btn-info"
role="button">New</a>
        </p>
    </div>
    </div>
</div>