<div class="content form_create">
    <article>
        <h1>Abaixo estão informações de nossos cursos:</h1>
        <div class="conteudo">
            
            <div>
                <?php
                // Usando GET para validar o retorno e inserir a mensagem de erro adequada
                $get = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);

                if(!empty($get)){
                    if($get == 'sucesso'){

                        MsgErro("<b>Ok, Cruso excluido com sucesso!!</b>", MSG_ACCEPT);
                    } elseif($get == 'erroexcluir'){

                        MsgErro("<b>Erro ao excluir, não foi possivel excluir o curso selecionado!!</b>", MSG_ERROR);
                    }
                }
                ?>
            </div>
            <div>
                <table border="1" class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>Curso</th>
                            <th>Turno</th>
                            <th>Períodos</th>
                            <th>Valor mensal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dados as $dado): ?>
                            <tr>
                                <td><?= $dado->curso; ?></td>
                                <td><?= $dado->turnos; ?></td>
                                <td><?= $dado->periodos; ?></td>
                                <td><?= $dado->valor; ?></td>
                                <td><a href="atualizar?detalhes=<?= $dado->id_curso; ?>">Detalhes</a> / <a href="inicio/excluir?excluir=<?= $dado->id_curso; ?>">Excluir</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </article>
</div>