<?php if ( ! defined('ABSPATH')) exit; ?>

<div class="wrap">

    <form method="post" action="<?php echo HOME_URI;?>/logout/sair">
		<table class="form-table">
			<input type="hidden" name="sair">
			<tr>
				<td>Deseja realmente sair?</td>
			</tr>
            <tr>
				<td colspan="2">
					<input type="submit" value="Sim"> 
				</td>
                <td colspan="2">
					<input type="button" onclick="javascript:window.location.href = '<?php echo HOME_URI;?>'" value="Não"> 
				</td>
			</tr>
		</table>
	</form>
	
</div> <!-- .wrap -->