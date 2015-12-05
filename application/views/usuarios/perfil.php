<div class="content form_create">

    <article>
        <h1>Olá <?= $this->session->userdata('nome'); ?>, atualize seu perfíl!!</h1>

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
                } elseif($get == 'erroatualizar'){

                    MsgErro("<b>Erro ao atualizar, e-mail informado está em uso por outra conta!!</b>", MSG_ERROR);
                }
            }

            //******    FORMULARIO   ******//

            validation_errors();
            $UserEditForm = array(
                'name' => 'UserEditForm',
                'action' => '',
                'method' => 'post',
                'id' => 'perfil'
            );

            echo form_open('users/perfil/update', $UserEditForm);

                echo '<label class="label_large">';
                    echo form_label('Nome:', 'name', array('class' => 'field'));
                    echo form_input(array('type' => 'text', 'id' => 'name', 'class' => 'field', 'name' => 'nome', 'value' => $this->session->userdata('nome'), 'title' => 'Informe seu primeiro nome!!'), 'required');
                echo '</label>';

                echo '<label class="label_large">';
                    echo form_label('E-mail:', 'mail', array('class' => 'field'));
                    echo form_input(array('type' => 'text', 'id' => 'mail', 'class' => 'field', 'name' => 'email', 'value' => $this->session->userdata('email'), 'title' => 'Informe seu e-mail!!'), 'required');
                echo '</label>';
        ?>

                <div class="label_line">
        <?php
                    echo '<label class="label_medium">';
                        echo form_label('Senha:', 'senha', array('class' => 'field'));
                        echo form_input(array('type' => 'password', 'id' => 'pass', 'class' => 'field', 'name' => 'senha', 'value' => md5($this->session->userdata('senha')), 'title' => 'Informe sua senha [ de 6 a 12 caracteres!! ]'));
                    echo '</label>';
        ?>

                    <label class="label_medium">
                        <span class="field">Nível:</span>
                        <select name = "nivel" title = "Selecione o nível de usuário!!" required >
                            <option value = "">Selecione o Nível</option>
                            <option value = "1" <?php if($this->session->userdata('nivel') == 1) echo 'selected="selected"'; ?>>User</option>
                            <option value = "2" <?php if($this->session->userdata('nivel') == 2) echo 'selected="selected"'; ?>>Editor</option>
                            <option value = "3" <?php if($this->session->userdata('nivel') == 3) echo 'selected="selected"'; ?>>Admin</option>
                        </select>
                    </label>
                </div>
                <input type="submit" name="UserUpdate" value="Atualizar Usuário" class="btn green" />

        <?php echo form_close(); ?>
    </article>
    <div class="clear"></div>
</div> <!-- content home -->