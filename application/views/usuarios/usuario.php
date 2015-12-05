<div class="content form_create">

    <article>

        <h1>Usuários: <a href="<?php echo base_url('index.php/usuarios/cadastro'); ?>" title="Cadastrar Novo" class="user_cad">Cadastrar Usuário</a></h1>
        <div>
            <table border="1" class="table table-striped table-responsive">
                <thead class="t_title">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Nivel</th>
                        <th>Status</th>
                        <th>Data do modificação</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?= $usuario->nome; ?></td>
                            <td><?= $usuario->email; ?></td>
                            <td><?= $usuario->nivel; ?></td>
                            <td><?= ($usuario->status == 1 ? "Ativo" : "Inativo"); ?></td>
                            <td><?= $usuario->data_modificacao; ?></td>
                            <td>
                                <a href="<?php echo base_url('index.php/usuarios/editarusuario?id='.$usuario->id); ?>">Editar</a> / 
                                <?php if($usuario->status == 0){?>
                                    <a href="<?php echo base_url('index.php/usuarios/usuarios/ativar?id='.$usuario->id); ?>">Ativar</a>
                                <?php }else{ ?>
                                    <a href="<?php echo base_url('index.php/usuarios/usuarios/inativar?id='.$usuario->id); ?>">Inativar</a>
                                <?php }?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </article>
</div> <!-- content home -->