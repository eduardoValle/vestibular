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

                    MsgErro("<b>Ok, seu contato foi registrado com sucesso!! Analisaremos o mais rápido possivel</b>", MSG_ACCEPT);
                } elseif($get == 'errocadastrar'){

                    MsgErro("<b>Erro ao registrar contato, não foi possivel registrar seu contato!!</b>", MSG_ERROR);
                }
            }

            validation_errors();
            $contatoForm = array(
                'name' => 'UserContato',
                'action' => '',
                'method' => 'post',
                'id' => 'usuario'
            );

            echo form_open_multipart('#', $contatoForm);
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
                
                <!-- Descrição -->
                <label class="label">
                    <span class="field">Descrição:</span>
                    <textarea class="field" name="descricao" rows="10"></textarea>
                </label>
            <input type="submit" class="btn black j_cadastar" value="Enviar" name="SendContatoForm" />
        <?php echo form_close(); ?>
    </article>
    <div class="clear"></div>
</div> <!-- content home -->