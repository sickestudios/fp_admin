<div class="covers form">
<?php echo $this->Form->create('Cover'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cover'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('score');
		echo $this->Form->input('image');
		echo $this->Form->input('published');
		echo $this->Form->input('language_id');
		echo $this->Form->input('Categorytype');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cover.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Cover.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Covers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorytypes'), array('controller' => 'categorytypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorytype'), array('controller' => 'categorytypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
