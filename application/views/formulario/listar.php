<div class="content form_create">

    <article>
        <h1>Abaixo estão informações de nossos cursos:</h1>
        <div class="conteudo">
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
                            <td><a href="atualizar?detalhes=<?= $dado->id_curso; ?>">Detalhes</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </article>
    <div class="clear"></div>
</div>