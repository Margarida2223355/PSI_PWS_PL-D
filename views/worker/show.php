<table class="table w-auto text-center">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Nif</th>
            <th scope="col">Telefone</th>
            <th scope="col">Morada</th>
            <th scope="col">Código Postal</th>
            <th scope="col">Localidade</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th><?= $worker -> id ?></th>
            <td><?= $worker -> username ?></td>
            <td><?= $worker -> nif ?></td>
            <td><?= $worker -> telefone ?></td>
            <td><?= $worker -> morada ?></td>
            <td><?= $worker -> codpostal ?></td>
            <td><?= $worker -> localidade ?></td>
            <td>
                <a href="index.php?c=worker&a=index" class="btn btn-info" role="button">Voltar</a>
            </td>
        </tr>
    </tbody>
</table>