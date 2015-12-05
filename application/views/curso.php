<div class="content">
    <article>
        <div class="conteudo">
            <h1><?= $dados[0]->curso; ?></h1>
            <div><textarea class="form-control" rows="20" readonly=""><?= $dados[0]->descricao; ?></textarea></div>
            <h2>Perfil do Egresso:</h2>
            <div><textarea class="form-control" rows="20" readonly=""><?= $dados[0]->perfil; ?></textarea></div>
            <h4>Mensalidade: <?= $dados[0]->valor; ?> reais</h4>
            <h4>Duração: <?= $dados[0]->periodos; ?> períodos</h4>
        </div>
    </article>
</div>