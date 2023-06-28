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
            foreach($ivas as $iva) { ?>
                <tr>
                    <th><?= $iva -> id?></th>
                    <td><?= $iva -> percentagem?></td>
                    <td><?= $iva -> descricao?></td>
                    <td><?= $iva -> em_vigor?></td>
                    <td>
                        <a href="index.php?c=iva&a=edit&id=<?=$iva->id ?>" class="btn btn-info" role="button">Editar</a>
                        <a href="index.php?c=iva&a=delete&id=<?=$iva->id ?>" class="btn btn-info" role="button">Remover</a>
                    </td>
                </tr>
            <?php
            }
        ?>
    </tbody>
</table>