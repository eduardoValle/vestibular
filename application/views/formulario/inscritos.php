<div class="content form_create">
    <article>
        <h1>Abaixo estão informações de nossos cursos:</h1>
        <div class="conteudo">
            <table border="1" class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>E-Mail</th>
                        <th>Opção 1</th>
                        <th>Opção 2</th>
                        <th>Dia da Prova</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dados as $dado): ?>
                        <tr>
                            <td><?= $dado->nome; ?></td>
                            <td><?= $dado->cpf; ?></td>
                            <td><?= $dado->email; ?></td>
                            <td><?= $dado->opcao1; ?></td>
                            <td><?= $dado->opcao2; ?></td>
                            <td><?= date('d/m/Y', strtotime($dado->dia_prova)); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </article>
</div>