<header id="navadmin">
    <div class="content">
        <a href="<?php echo base_url('index.php/adm/inicio'); ?>" class="logomarca">Exercício Final de Estapa</a>
        <ul class="systema_nav">
            <li class="username">Olá <?= $this->session->userdata('nome'); ?>, bem vindo ao site!!</li>
            <li><a class="icon profile" title="Perfíl"   href="<?php echo base_url('index.php/usuarios/perfil'); ?>"> Perfíl </a></li>
            <li><a class="icon users"   title="Usuários" href="<?php echo base_url('index.php/usuarios/usuarios'); ?>"> Usuários </a></li>
            <li><a class="icon logout"  title="Logoff"   href="<?php echo base_url('index.php/adm/inicio/logoff'); ?>"> Logoff </a></li>
        </ul>

        <nav>
            <ul class="menu">
                <li class="li"><a href="<?php echo base_url('index.php/adm/inicio'); ?>" class="opensub">Inicio</a></li>
                <li class="li"><a class="opensub" onclick="return false;" href="#">Cursos</a>
                    <ul class="sub">
                        <li><a href="<?php echo base_url('index.php/adm/cadastrar'); ?>">Cadastrar Curso</a></li>
                        <li><a href="#">Em Manutenção</a></li>
                    </ul>
                </li>
                <li class="li"><a href="<?php echo base_url('index.php/adm/inscritos'); ?>" class="opensub">Inscritos</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </div><!--/CONTENT-->
</header>
