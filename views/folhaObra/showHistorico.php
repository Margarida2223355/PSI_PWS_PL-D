
<table class="table w-auto text-center">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Data</th>
            <th scope="col">Valor Iva</th>
            <th scope="col">Valor Total</th>
            <th scope="col">Estado</th>
            <th scope="col">Funcionario</th>
            <th scope="col">Cliente</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    <?= "<h5>Folhas de obra do " . $auth->getUsername() . "</h5>"?>
        <?php
            foreach($folhaobras as $folhaobra) { ?>
                <tr>
                    <th><?= $folhaobra -> id?></th>
                    <td><?= date('d/m/Y', strtotime($folhaobra->data))?></td>
                    <td><?= $folhaobra -> iva_total?></td>
                    <td><?= $folhaobra -> valor_total?></td>
                    <td><?= $folhaobra -> estado?></td>
                    <td><?= $folhaobra -> funcionario_id?></td>
                    <td><?= $folhaobra -> cliente_id?></td>
                    <td>
                        <a href="index.php?c=folhaobra&a=edit&id=<?=$folhaobra->id ?>" class="btn btn-primary" role="button">Editar</a>
                        <a href="index.php?c=folhaobra&a=delete&id=<?=$folhaobra->id ?>" class="btn btn-danger" role="button">Remover</a>
                    </td>
                </tr>
            <?php
            }
        ?>
</tbody>
</table>