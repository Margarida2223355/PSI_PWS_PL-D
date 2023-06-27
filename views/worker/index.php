<table class="table w-auto text-center">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Nif</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($workers as $worker) { ?>
                <tr>
                    <th><?= $worker -> id?></th>
                    <td><?= $worker -> username?></td>
                    <td><?= $worker -> email?></td>
                    <td><?= $worker -> nif?></td>
                    <td>
                        <a href="index.php?c=worker&a=show&id=<?=$worker->id ?>" class="btn btn-info" role="button">Mostrar</a>
                        <a href="index.php?c=worker&a=edit&id=<?=$worker->id ?>" class="btn btn-info" role="button">Editar</a>
                        <a href="index.php?c=worker&a=remove&id=<?=$worker->id ?>" class="btn btn-info" role="button">Remover</a>
                    </td>
                </tr>
            <?php
            }
        ?>
    </tbody>
</table>