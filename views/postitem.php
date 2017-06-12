<div class="postitem">
<strong>Meu Post:</strong><br>
<?php if($tipo == 'foto'): ?>
	<center><img src="<?php echo BASE; ?>/assets/img/postagens/<?php echo $url; ?>" border="0" width="25%"  /></center>
	<?php endif; ?>
	<?php if($tipo == 'file'): ?>
	<a href="<?php echo BASE; ?>/assets/img/postagens/files/<?php echo $url; ?>" target="__blank" download>Download do Arquivo<br></a>
	<?php endif; ?>
	<div class="postitem_texto">
	
	<?php echo $texto ?>
	</div>
	
	<div class="postitem_info">
		
	</div>
	<div class="postitem_botoes">
	
	</div>
	</div>