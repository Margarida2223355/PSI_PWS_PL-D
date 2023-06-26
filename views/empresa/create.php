<div class="content-wrapper">
<form action="index.php?c=empresa&a=store" method="POST">
    <div class="col-md-3">
        <br>
        <label>Designação Social:</label>
        <input class="form-control" type="text" name="designacaosocial" placeholder="Designação social" value="<?php if(isset($empresa)) { echo $empresa->designacaosocial; }?>">
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
        <input class="form-control" type="text" name="email" placeholder="Email" value="<?php if(isset($empresa)) { echo $empresa->email; }?>">
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
        <input class="form-control" type="text" name="telefone" placeholder="Telefone" value="<?php if(isset($empresa)) { echo $empresa->telefone; }?>">
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
        <input class="form-control" type="text" name="nif" placeholder="NIF" value="<?php if(isset($empresa)) { echo $empresa->nif; }?>">
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
        <input class="form-control" type="text" name="morada" placeholder="Morada" value="<?php if(isset($empresa)) { echo $empresa->morada; }?>">
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
        <input class="form-control" type="text" name="codigopostal" placeholder="Código Postal" value="<?php if(isset($empresa)) { echo $empresa->codigopostal; }?>">
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
        <input class="form-control" type="text" name="localidade" placeholder="Localidade" value="<?php if(isset($empresa)) { echo $empresa->localidade; }?>">
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
        <input class="form-control" type="text" name="capitalsocial" placeholder="Capital Social" value="<?php if(isset($empresa)) { echo $empresa->capitalsocial; }?>">
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
        <br>
        <button class="btn btn-primary" type="submit">Submit</button>
        <a href="index.php?c=auth&a=home" class="btn btn-info" role="button">Voltar</a>
    </div>
</form>
</div>