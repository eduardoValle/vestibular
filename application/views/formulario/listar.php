<div class="content form_create">

    <article>
        <h1>Seja bem vindo ao site!! Abaixo estão informações de nossos cursos</h1>

        <ul class="ultable">
            <li class="t_title">
                <span class="un">Nome do Curso</span>
                <span class="un">Turno</span>
                <span class="un">Número de Períodos</span>
                <span class="un center">Valor</span>
            </li>

            <?php foreach($dados as $dado):?>            
                <li>
                    <span class="un"><?= $dado['curso']; ?></span>
                    <span class="un"><?= $dado['turno']; ?></span>
                    <span class="un center"><?= $dado['periodo']; ?></span>
                    <span class="un center"><?= $dado['valor']; ?></span>
                </li>
            <?php endforeach;?>
        </ul>
    </article>
    <div class="clear"></div>
</div>