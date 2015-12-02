<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Exercício Final de Estapa</title>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/admin.css'); ?>"/>
    </head>

    <body class="login">

        <div id="login">
            <div class="boxin">
                <h1>Exercício Final de Etapa</h1>
                <?php
                //******    VALIDACAO DE ERROS DE DO FORMULARIO   ******//

                // Usando GET para validar o retorno e inserir a mensagem de erros adequada
                $get = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);
                if(!empty($get)){
                    if($get == 'restrito'){

                        MsgErro('<b>Oppsss!!</b> Acesso negado!!', MSG_ALERT);
                    } elseif($get == 'logoff'){

                        MsgErro('<b>Você deslogou!!</b> Sua sessão foi finalizada!!', MSG_ACCEPT);
                    } elseif($get == 'erro'){

                        MsgErro('<b>Dados incompletos ou inválidos!!</b></br> Você precisa colocar um nome para entrar!!', MSG_INFOR);
                    }
                }

                //******    FORMULARIO   ******//
                validation_errors();
                $AdminLoginForm = array(
                    'name' => 'AdminLoginForm',
                    'action' => '',
                    'method' => 'post',
                    'id' => 'login'
                );

                echo form_open('inicial/login', $AdminLoginForm);
                    echo form_label('Nome:', 'nome', array('class' => 'login_label'));
                    echo form_input(array('type' => 'nome', 'name' => 'nome', 'class' => 'login_input'));
                    echo '<input type="submit" value="Logar" class="btn black" />';
                echo form_close();
                ?>
            </div>
        </div>
    </body>
</html>