<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('Fullportadas: Administrator Site:'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('bootstrap-responsive.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		echo $this->Html->script('jquery.min');
		echo $this->Html->script('bootstrap.min');
		
	?>
</head>
<body>
	<?php echo $this->element('menu'); ?>
	<div class="container">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?></div>
	</div>
    <div id="footer">
      <div class="container">
        <br><br><br>
        <p class="muted credit">Panel de Administración de  <a href="http://fullportadas.com">Fullportadas</a> de <a href="http://sickestudios.com">Sickestudios</a>.</p>
        <br><br><br>
      </div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
