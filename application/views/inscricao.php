<div class="content form_create">
    <article>
        <header>
            <h1>Cadastro de cursos</h1>
        </header>
        <?php
            //******    VALIDACAO DE ERROS DE DO FORMULARIO   ******//
            // Usando GET para validar o retorno e inserir a mensagem de erros adequada
            $get = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);

            if(!empty($get)){
                if($get == 'erro'){

                    MsgErro("<b>Existem campos em branco, preencha todos os campos, por favor!!</b>", MSG_INFOR);
                } elseif($get == 'sucesso'){

                    MsgErro("<b>Ok, Cruso atualizado com sucesso!!</b>", MSG_ACCEPT);
                } elseif($get == 'errocadastrar'){

                    MsgErro("<b>Erro ao registrar formulário, não foi possivel registrar a atualização!!</b>", MSG_ERROR);
                }
            }

            validation_errors();
            $Form = array(
                'name' => 'UserForm',
                'action' => '',
                'method' => 'post',
                'id' => 'inscritos'
            );

            echo form_open_multipart('inscricao/inserir', $Form);
        ?>
                <!-- NOME -->
                <label class="label">
                    <span class="field">Nome do curso:
                        <input type="text" class="field" name="nome" placeholder="Digite seu nome" required/>
                    </span>
                </label>

                <!-- CPF -->
                <label class="label">
                    <span class="field">Nome do curso:
                        <input type="text" class="field" name="cpf" placeholder="Digite seu CPF" required/>
                    </span>
                </label>

                <!-- EMAIL -->
                <label class="label">
                    <span class="field">Nome do curso:
                        <input type="email" class="field" name="email" placeholder="Digite seu E-mail" required/>
                    </span>
                </label>

                <!-- CURSO 1 -->
                <label class="label">
                    <span class="field">Primeira opção de cruso:
                        <select name="opcao1" class="field" required>
                            <option value="">Selecione sua peimeira opção de cruso</option>
                            <?php foreach ($cursos as $curso): ?>
                                <option value="<?= $curso->curso; ?>"><?= $curso->curso; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </span>
                </label>

                <!-- CURSO 2 -->
                <label class="label">
                    <span class="field">Segunda opção de cruso:
                        <select name="opcao2" class="field" required>
                            <option value="">Selecione sua segunda opção de cruso</option>
                            <?php foreach ($cursos as $curso): ?>
                                <option value="<?= $curso->curso; ?>"><?= $curso->curso; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </span>
                </label>

                <!-- DATA -->
                <label class="label">
                    <span class="field">Dia da Prova:
                        <input type="date" class="field" name="dia_prova" placeholder="Dia da Prova" required/>
                    </span>
                </label>

                <div class="label_line">
                    <input type="submit" class="btn black j_cadastar" value="Fazer inscrição" name="SendForm" />
                </div><!--/line-->
        <?php echo form_close(); ?>
    </article>
    <div class="clear"></div>
</div> <!-- content home -->