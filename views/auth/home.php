<!-- Para teste -->
<?= $auth -> getRole(); ?>
<!-- Para teste -->

<div class="album bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <!-- BLOCO DE CLIENTES -->
        <?php
            //Abrir o bloco php para aprensentar as opções para um Cliente
            if($auth -> getRole() == CLIENTE) { ?>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Lista de Folhas de Obra</h5>
                                <a href="index.php" class="btn btn-primary">Abrir</a> <!-- Botão para abrir vista de lista de folhas de obra -->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Pagamentos</h5>
                                <a href="index.php" class="btn btn-primary">Abrir</a> <!-- Botão para abrir vista de pagamentos -->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Visualizar Folha de Obra</h5>
                                <a href="index.php" class="btn btn-primary">Abrir</a> <!-- Botão para abrir vista de folha de obra -->
                            </div>
                        </div>
                    </div>
            <?php
                }
                //Abrir o bloco php para aprensentar as opções para um Funcionário
                if(($auth -> getRole() == FUNCIONARIO) || ($auth -> getRole() == ADMINISTRADOR)) { ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Atualizar Password e Email</h5>
                                <a href="index.php" class="btn btn-primary">Abrir</a> <!-- Botão para abrir vista de atualização de Password e Email -->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Emissão Folhas de Obra</h5>
                                <a href="index.php" class="btn btn-primary">Abrir</a> <!-- Botão para abrir vista de emissão de folha de obra -->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Clientes</h5>
                                <a href="index.php?c=cliente&a=create" class="btn btn-primary">Criar</a> <!-- Botão para abrir vista de registo de clientes -->
                                <a href="index.php?c=cliente&a=show&" class="btn btn-primary">Mostrar</a> 
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Gestão Serviços</h5>
                                <a href="index.php" class="btn btn-primary">Abrir</a> <!-- Botão para abrir vista de gestão de serviços -->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Gestão de Taxas de IVA</h5>
                                <a href="index.php" class="btn btn-primary">Abrir</a> <!-- Botão para abrir vista de gestão de taxas de IVA -->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Histórico de Folhas de Obra</h5>
                                <a href="index.php" class="btn btn-primary">Abrir</a> <!-- Botão para abrir vista de histórico de folhas de obra -->
                            </div>
                        </div>
                    </div>
            <?php
                //Abrir o bloco php para aprensentar as opções para um Administrador
                if($auth -> getRole() == ADMINISTRADOR) { ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Criar/Administrar Funcionário</h5>
                                <a href="index.php?c=worker&a=create" class="btn btn-primary">Criar</a> <!-- Botão para abrir vista de criação de contas dos funcionários -->
                                <a href="index.php?c=worker&a=index" class="btn btn-primary">Mostrar</a> <!-- Botão para mostrar todos os funcionários. Depois escolhemos se queremos editar ou ver apenas -->
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Empresa</h5>
                                <a href="index.php?c=empresa&a=create" class="btn btn-primary">Criar</a>
                                <a href="index.php?c=empresa&a=edit&id=1" class="btn btn-primary">Editar</a>
                                <a href="index.php?c=empresa&a=show&id=1" class="btn btn-primary">Ver</a>
                                 <!-- Botão para abrir vista de configuração de dados da empresa -->
                            </div>
                        </div>
                    </div>
                </div>
        <?php
        //Fechar o bloco php
                }
            }
        ?>
    </div>
</div>