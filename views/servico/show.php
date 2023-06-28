<table class="table w-auto text-center">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Descricao</th>
            <th scope="col">Preco/Hora</th>
            <th scope="col">IVA</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($servicos as $servico) { 
                $iva= Iva::find($servico->iva_id);
                ?>
                
                <tr>
                    <th><?= $servico -> id?></th>
                    <td><?= $servico -> descricao?></td>
                    <td><?= $servico -> preco_hora?></td>
                    <td><?= $iva->percentagem?>%</td>
                    <td>
                        <a href="index.php?c=servico&a=edit&id=<?=$servico->id ?>" class="btn btn-info" role="button">Editar</a>
                        <a href="index.php?c=servico&a=remove&id=<?=$servico->id ?>" class="btn btn-info" role="button">Remover</a>
                    </td>
                </tr>
            <?php
            }
        ?>
    </tbody>
</table>