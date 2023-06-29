<table class="table w-auto text-center">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Percentagem</th>
            <th scope="col">Descricao</th>
            <th scope="col">Vigor</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($folhaobras as $folhaobra) { ?>
                <tr>
                    <th><?= $folhaobra -> id?></th>
                    <td><?= $folhaobra -> data?></td>
                    <td><?= $folhaobra -> valor_total?></td>
                    <td><?= $folhaobra -> iva_total?></td>
                    <td>
                        <a href="index.php?c=folhaobra&a=edit&id=<?=$folhaobra->id ?>" class="btn btn-info" role="button">Editar</a>
                        <a href="index.php?c=folhaobra&a=delete&id=<?=$folhaobra->id ?>" class="btn btn-info" role="button">Remover</a>
                    </td>
                </tr>
            <?php
            }
        ?>
    </tbody>
</table>