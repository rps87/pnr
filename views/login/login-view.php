<?php if ( ! defined('ABSPATH')) exit; ?>

<div class="wrap">

<?php
if ( $this->logged_in ) {
	echo '<p class="alert">Logado</p>';
}
?>

	<form method="post">
		<table class="form-table">
			<tr>
				<td>Usuario</td> 
				<td><input name="userdata[usuario]"></td>
			</tr>
			<tr>
				<td>Senha </td>
				<td><input type="password" name="userdata[usuario_password]"></td>
			</tr>

			<?php
			if ( $this->login_error ) {
				echo '<tr><td colspan="2" class="error">' . $this->login_error . '</td></tr>';
			}
			?>
			
			<tr>
				<td colspan="2">
					<input type="submit" value="Logar"> 
				</td>
			</tr>
		</table>
	</form>
	
</div> <!-- .wrap -->