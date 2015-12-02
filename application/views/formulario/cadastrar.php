<div class="content form_create">

    <article>
        <header>
            <h1>Formulário de cadastro:</h1>
        </header>
        <?php
            //******    VALIDACAO DE ERROS DE DO FORMULARIO   ******//

            // Usando GET para validar o retorno e inserir a mensagem de erros adequada
            $get = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);

            if(!empty($get)){
                if($get == 'erro'){

                    MsgErro("<b>Existem campos em branco, preencha todos os campos, por favor!!</b>", MSG_INFOR);
                } elseif($get == 'sucesso'){

                    MsgErro("<b>Ok, seu formulário foi enviado com sucesso!! Analisaremos o mais rápido possivel</b>", MSG_ACCEPT);
                } elseif($get == 'errocadastrar'){

                    MsgErro("<b>Erro ao registrar formulário, não foi possivel registrar seu formulário!!</b>", MSG_ERROR);
                }
            }

            validation_errors();
            $Form = array(
                'name' => 'UserForm',
                'action' => '',
                'method' => 'post',
                'id' => 'usuario'
            );

            echo form_open_multipart('#', $Form);
        ?>
                <!-- NOME -->
                <label class="label">
                    <span class="field">Nome:</span>
                    <input type="text" class="field" name="nome" value="<?= $this->session->userdata('nome'); ?>" required/>
                </label>

                <!-- EMAIL -->
                <label class="label">
                    <span class="field">Email:</span>
                    <input type="email" class="field" name="email" required/>
                </label>
                
                <!-- Endereço -->
                <label class="label">
                    <span class="field">Rua:</span>
                    <input type="text" class="field" name="rua" required/>
                </label>
                
                 <div class="label_line">

                <!-- BAIRRO -->
                <label class="label_small">
                    <span class="field">Bairro:</span>
                    <input type="text" class="formDate center" name="bairro"/>
                </label>
                
                <!-- CIDADE -->
                <label class="label_small">
                    <span class="field">Cidade:</span>
                    <input type="text" class="formDate center" name="cidade"/>
                </label>
                
                <!-- ESTADO -->
                <label class="label_small">
                    <span class="field">Estado:</span>
                    <input type="text" class="formDate center" name="estado"/>
                </label>

            </div><!--/line-->

            <div class="label_line">

                <label class="label_small">
                    <span class="field">Telefone</span>
                    <input type="tel" class="formDate center" name="telefone"/>
                </label>
                
                <!-- DATA -->
                <label class="label_small">
                    <span class="field">Data de Nascimento:</span>
                    <input type="date" class="formDate center" name="data"/>
                </label>

                <!-- CURSO -->
                <label class="label_small">
                    <span class="field">Curso:</span>
                    <select name="status">
                        <option value="">Escolha o curso</option>
                        <option value="1">&raquo&raquo Engenharia de computação</option>
                        <option value="2">&raquo&raquo Engenharia Mecanica</option>
                        <option value="3">&raquo&raquo Engenharia Minas</option>
                        <option value="4">&raquo&raquo Engenharia de Produção</option>
                        <option value="5">&raquo&raquo Engenharia de controle e automação</option>
                        <option value="6">&raquo&raquo Medicina veterinaria</option>
                    </select>
                </label>

            </div><!--/line-->
            <input type="submit" class="btn black j_cadastar" value="Enviar" name="SendForm" />
        <?php echo form_close(); ?>
    </article>
    <div class="clear"></div>
</div> <!-- content home -->