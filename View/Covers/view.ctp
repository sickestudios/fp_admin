<div class="covers view">
<h2><?php  echo __('Cover'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cover['Cover']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($cover['Cover']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Score'); ?></dt>
		<dd>
			<?php echo h($cover['Cover']['score']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo h($cover['Cover']['image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cover['Cover']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cover['Cover']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published'); ?></dt>
		<dd>
			<?php echo h($cover['Cover']['published']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Language'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cover['Language']['name'], array('controller' => 'languages', 'action' => 'view', $cover['Language']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cover'), array('action' => 'edit', $cover['Cover']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cover'), array('action' => 'delete', $cover['Cover']['id']), null, __('Are you sure you want to delete # %s?', $cover['Cover']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Covers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cover'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorytypes'), array('controller' => 'categorytypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorytype'), array('controller' => 'categorytypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Categorytypes'); ?></h3>
	<?php if (!empty($cover['Categorytype'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cover['Categorytype'] as $categorytype): ?>
		<tr>
			<td><?php echo $categorytype['id']; ?></td>
			<td><?php echo $categorytype['name']; ?></td>
			<td><?php echo $categorytype['url']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'categorytypes', 'action' => 'view', $categorytype['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'categorytypes', 'action' => 'edit', $categorytype['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'categorytypes', 'action' => 'delete', $categorytype['id']), null, __('Are you sure you want to delete # %s?', $categorytype['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Categorytype'), array('controller' => 'categorytypes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
