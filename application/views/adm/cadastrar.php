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
                'id' => 'cadastrar_curso'
            );

            echo form_open_multipart('adm/cadastrar/inserir', $Form);
        ?>
                <!-- NOME -->
                <label class="label">
                    <span class="field">Nome do curso:
                        <input type="text" class="field" name="curso" required/>
                    </span>
                </label>

                <!-- EMAIL -->
                <label class="label">
                    <span class="field">Turnos:
                        <select name="turnos" class="field" required>
                            <option value="">Selecione o turno do curso</option>
                            <option value="Manhã">Manhã</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Noite">Noite</option>
                        </select>
                    </span>
                </label>
                
                <!-- Endereço -->
                <label class="label">
                    <span class="field">Períodos:
                        <input type="text" class="field" name="periodos" required/>
                    </span>
                </label>
                
                <!-- Endereço -->
                <label class="label">
                    <span class="field">Valor:
                        <input type="text" class="field" name="valor" required/>
                    </span>
                </label>

                <!-- BAIRRO -->
                <label class="label_small">
                    <span class="field">Descrição:</span>
                    <textarea type="text" rows="8" name="descricao"></textarea>
                </label>

                <div class="label_line">
                    <label class="label_small">
                        <span class="field">Perfil do Egresso:</span>
                        <textarea type="text" rows="8" name="perfil"></textarea>
                    </label>
                </div><!--/line-->

                <div class="label_line">
                    <input type="submit" class="btn black j_cadastar" value="Cadastrar Curso" name="SendForm" />
                </div><!--/line-->
        <?php echo form_close(); ?>
    </article>
    <div class="clear"></div>
</div> <!-- content home -->