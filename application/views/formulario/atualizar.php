<div class="content form_create">

    <article>
        <header>
            <h1>Atualizando o cadastro de cursos</h1>
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
                'id' => 'atualizar_curso'
            );

            echo form_open_multipart('formulario/atualizar/update?id='.$dados[0]->id_curso, $Form);
        ?>
                <!-- NOME -->
                <label class="label">
                    <span class="field">Nome do curso:
                        <input type="text" class="field" name="curso" value="<?= $dados[0]->curso; ?>" required/>
                    </span>
                </label>

                <!-- EMAIL -->
                <label class="label">
                    <span class="field">Turnos:
                        <select name="turnos" class="field" required>
                            <option value="Manhã" <?php if($dados[0]->turnos == "Manhã") echo 'selected="selected"'; ?>>Manhã</option>
                            <option value="Tarde" <?php if($dados[0]->turnos == "Tarde") echo 'selected="selected"'; ?>>Tarde</option>
                            <option value="Noite" <?php if($dados[0]->turnos == "Noite") echo 'selected="selected"'; ?>>Noite</option>
                        </select>
                    </span>
                </label>
                
                <!-- Endereço -->
                <label class="label">
                    <span class="field">Períodos:
                        <input type="number" class="field" name="periodos" value="<?= $dados[0]->periodos; ?>" required/>
                    </span>
                </label>
                
                <!-- Endereço -->
                <label class="label">
                    <span class="field">Valor:
                        <input type="text" class="field" name="valor" value="<?= $dados[0]->valor; ?>" required/>
                    </span>
                </label>

                <!-- BAIRRO -->
                <label class="label_small">
                    <span class="field">Descrição:</span>
                    <textarea type="text" rows="8" name="descricao"><?= $dados[0]->descricao; ?></textarea>
                </label>

                <div class="label_line">
                    <label class="label_small">
                        <span class="field">Perfil do Egresso:</span>
                        <textarea type="text" rows="8" name="perfil"><?= $dados[0]->perfil; ?></textarea>
                    </label>
                </div><!--/line-->

                <div class="label_line">
                    <input type="submit" class="btn black j_cadastar" value="Atualizar Curso" name="SendForm" />
                </div><!--/line-->
        <?php echo form_close(); ?>
    </article>
    <div class="clear"></div>
</div> <!-- content home -->