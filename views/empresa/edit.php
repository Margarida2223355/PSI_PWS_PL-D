<div class="content-wrapper">
<?php $empresa; ?>
<form action="index.php?c=empresa&a=update&id=<?=$empresa->id ?>" method="POST">
    <div class="col-md-3">
        <br>
        <label>Designação Social:</label>
        <input class="form-control" type="text" name="designacaosocial" value="<?= $empresa->designacaosocial ?>">
        <p><?php
            if(isset($empresa->errors)) {
                if (is_array($empresa->errors->on('designacaosocial'))) {
                    foreach ($empresa->errors->on('designacaosocial') as $error) {
                        echo $error . '<br>';
                    }
                } else {
                    echo $empresa->errors->on('designacaosocial');
                }
            }
            ?>
        </p>
        <label>Email:</label>
        <input class="form-control" type="text" name="Email" value="<?= $empresa->email ?>">
        <p><?php
            if(isset($empresa->errors)) {
                if (is_array($empresa->errors->on('email'))) {
                    foreach ($empresa->errors->on('email') as $error) {
                        echo $error . '<br>';
                    }
                } else {
                    echo $empresa->errors->on('email');
                }
            }
            ?>
        </p>
        <label>Telefone:</label>
        <input class="form-control" type="text" name="telefone" value="<?= $empresa->telefone ?>">
        <p><?php
            if(isset($empresa->errors)) {
                if (is_array($empresa->errors->on('telefone'))) {
                    foreach ($empresa->errors->on('telefone') as $error) {
                        echo $error . '<br>';
                    }
                } else {
                    echo $empresa->errors->on('telefone');
                }
            }
            ?>
        </p>
        <label>Nif:</label>
        <input class="form-control" type="text" name="nif" value="<?= $empresa->nif ?>">
        <p><?php
            if(isset($empresa->errors)) {
                if (is_array($empresa->errors->on('nif'))) {
                    foreach ($empresa->errors->on('nif') as $error) {
                        echo $error . '<br>';
                    }
                } else {
                    echo $empresa->errors->on('nif');
                }
            }
            ?>
        </p>
        <label>Morada:</label>
        <input class="form-control" type="text" name="morada" value="<?= $empresa->morada ?>">
        <p><?php
            if(isset($empresa->errors)) {
                if (is_array($empresa->errors->on('morada'))) {
                    foreach ($empresa->errors->on('morada') as $error) {
                        echo $error . '<br>';
                    }
                } else {
                    echo $empresa->errors->on('morada');
                }
            }
            ?>
        </p>
        <label>Código Postal:</label>
        <input class="form-control" type="text" name="codigopostal" value="<?= $empresa->codigopostal ?>">
        <p><?php
            if(isset($empresa->errors)) {
                if (is_array($empresa->errors->on('codigopostal'))) {
                    foreach ($empresa->errors->on('codigopostal') as $error) {
                        echo $error . '<br>';
                    }
                } else {
                    echo $empresa->errors->on('codigopostal');
                }
            }
            ?>
        </p>
        <label>Localidade:</label>
        <input class="form-control" type="text" name="localidade" value="<?= $empresa->localidade ?>">
        <p><?php
            if(isset($empresa->errors)) {
                if (is_array($empresa->errors->on('localidade'))) {
                    foreach ($empresa->errors->on('localidade') as $error) {
                        echo $error . '<br>';
                    }
                } else {
                    echo $empresa->errors->on('localidade');
                }
            }
            ?>
        </p>
        <label>Capital Social:</label>
        <input class="form-control" type="text" name="capitalsocial" value="<?= $empresa->capitalsocial ?>">
        <p><?php
            if(isset($empresa->errors)) {
                if (is_array($empresa->errors->on('capitalsocial'))) {
                    foreach ($empresa->errors->on('capitalsocial') as $error) {
                        echo $error . '<br>';
                    }
                } else {
                    echo $empresa->errors->on('capitalsocial');
                }
            }
            ?>
        </p>
        <button class="btn btn-primary" type="submit">Submit</button>
        <a href="index.php?c=empresa&a=index" class="btn btn-info" role="button">Voltar a trás</a>
    </div>
</form>
</div>