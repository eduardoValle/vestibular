<header id="navadmin">
    <div class="content">
        <a href="<?php echo base_url('index.php/formulario/inicio'); ?>" class="logomarca">Exercício Final de Estapa</a>
        <ul class="systema_nav">
            <li class="username">Olá <?= $this->session->userdata('nome'); ?>, bem vindo ao site!!</li>
            <li><a class="icon logout"  title="Logoff"   href="<?php echo base_url('index.php/formulario/inicio/logoff'); ?>"> Logoff </a></li>
        </ul>

        <nav>
            <ul class="menu">
                <li class="li"><a href="<?php echo base_url('index.php/formulario/inicio'); ?>" class="opensub">Inicio</a></li>
                <li class="li"><a class="opensub" onclick="return false;" href="#">Formulário</a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('index.php/formulario/cadastrar'); ?>">Cadastrar-se</a></li>
                        <li><a href="#">Em Manutenção</a></li>
                    </ul>
                </li>
                <li class="li"><a href="<?php echo base_url('index.php/formulario/contato'); ?>" class="opensub">Entre em contato</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div><!--/CONTENT-->
</header>
