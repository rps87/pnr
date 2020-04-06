<?php if ( ! defined('ABSPATH')) exit; ?>

<?php if ( $this->login_required && ! $this->logged_in ) return; ?>

<nav class="menu clearfix">
	<ul>
		<li><a href="<?php echo HOME_URI;?>">Home</a></li>
		<li><a href="<?php echo HOME_URI;?>/login/">Login</a></li>
		<li><a href="<?php echo HOME_URI;?>/user-register/">Cadastro de Usuario</a></li>
		<li><a href="<?php echo HOME_URI;?>/noticias/">XXX</a></li>
		<li><a href="<?php echo HOME_URI;?>/noticias/adm/">XXX Admin</a></li>
		<li><a href="<?php echo HOME_URI;?>/exemplo/">Exemplo básico</a></li>
		<li><a href="<?php echo HOME_URI;?>/logout/">Logout</a></li>
	</ul>
</nav>