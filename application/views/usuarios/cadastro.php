<div class="content form_create">

    <article>

        <h1>Cadastrar Usuário!</h1>

        <?php
            /*
              MsgErro("Erro ao atualizar, e-mail informado não tem um formáto válido!!", MSG_INFOR);
              MsgErro("Erro ao atualizar, senha deve ter entre 6 e 12 caracteres!!", MSG_INFOR);
              MsgErro("Erro ao atualizar, existem campos em branco, todos são obrigatórios!!", MSG_ALERT);
              MsgErro("Erro ao atualizar, e-mail informado está em uso por outra conta!!", MSG_ERROR);

             */

            //******    VALIDACAO DE ERROS DE DO FORMULARIO   ******//
            // Usando GET para validar o retorno e inserir a mensagem de erros adequada


            $get = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);
            
            if(!empty($get)){
                if($get == 'erro'){
                    
                    MsgErro("<b>Erro ao atualizar, existem campos em branco, ou os dados informados são inválidos!!</b>", MSG_ALERT);
                } elseif($get == 'sucesso'){

                    MsgErro("<b>Ok, seus dados foram atualizados com sucesso!!</b>", MSG_ACCEPT);
                } elseif($get == 'errocadastrar'){

                    MsgErro("<b>Erro ao cadastrar, e-mail informado está em uso por outra conta!!</b>", MSG_ERROR);
                }
            }

            //******    FORMULARIO   ******//

            validation_errors();
            $UserCadastro = array(
                'name' => 'UserCadastro',
                'action' => '',
                'method' => 'post',
                'id' => 'usuario'
            );

            echo form_open('usuarios/cadastro/inserir', $UserCadastro);

                echo '<label class="label_large">';
                    echo form_label('Nome:', 'name', array('class' => 'field'));
                    echo form_input(array('type' => 'text', 'id' => 'name', 'class' => 'field', 'name' => 'nome', 'value' => '', 'title' => 'Informe seu primeiro nome!!'), 'required');
                echo '</label>';

                echo '<label class="label_large">';
                    echo form_label('E-mail:', 'mail', array('class' => 'field'));
                    echo form_input(array('type' => 'email', 'id' => 'mail', 'class' => 'field', 'name' => 'email', 'value' => '', 'title' => 'Informe seu e-mail!!'), 'required');
                echo '</label>';
        ?>

                <div class="label_line">
        <?php
                    echo '<label class="label_medium">';
                        echo form_label('Senha:', 'senha', array('class' => 'field'));
                        echo form_input(array('type' => 'password', 'id' => 'pass', 'class' => 'field', 'name' => 'senha', 'value' => '', 'title' => 'Informe sua senha [ de 6 a 12 caracteres!! ]'));
                    echo '</label>';
        ?>

                    <label class="label_medium">
                        <span class="field">Nível:</span>
                        <select name = "nivel" title = "Selecione o nível de usuário!!" required >
                            <option value = "">Selecione o Nível</option>
                            <option value = "1" <?php if($this->session->userdata('nivel') == 1){ echo 'disabled="disabled"';} ?>>User</option>
                            <option value = "2" >Editor</option>
                            <option value = "3" <?php if($this->session->userdata('nivel') < 3){ echo 'disabled="disabled"';} ?>>Admin</option>
                        </select>
                    </label>
                </div>
                <input type="submit" name="UserUpdate" value="Cadastrar Usuário" class="btn green" />

        <?php echo form_close(); ?>
    </article>

    <div class="clear"></div>
</div> <!-- content home -->