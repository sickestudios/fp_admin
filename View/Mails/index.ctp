<?php App::uses('CakeTime', 'Utility'); ?>
<div class="container">
	<div class="row">
		<div class="span12">
			<table class="table table-striped">
				<caption><?php echo __('E-mails List'); ?></caption>
				<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('subject'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($mails as $mail): ?>
					<tr>
						<td><?php echo h($mail['Mail']['id']); ?>&nbsp;</td>
						<td><?php echo h($mail['Mail']['name']); ?>&nbsp;</td>
						<td><?php echo h($mail['Mail']['email']); ?>&nbsp;</td>
						<td><?php echo h($mail['Mail']['subject']); ?>&nbsp;</td>
						<td><?php echo h($this->Time->niceShort($mail['Mail']['created'])); ?>&nbsp;<?php if ($mail['Mail']['status'] == '1') { echo '<span class="label label-important">New</span>'; } ?></td>
						<td class="actions">
							<div class="btn-group">
				          		<?php echo $this->Html->link(__('<i class="icon-eye-open icon-white"></i> Read'), array('action' => 'view', $mail['Mail']['id']),array('class'=>'btn btn-primary','escape'=>false)); ?>
				          		<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
				          		<ul class="dropdown-menu">
				            		<li><?php echo $this->Form->postLink('<i class="icon-trash"></i>'.__(' Delete'), array('action' => 'delete', $mail['Mail']['id']), array('escape'=>false), __('Are you sure you want to delete %s?', $mail['Mail']['id'])); ?></li>
				          		</ul>
				        	</div>
						</td>
					</tr>
	<?php endforeach; ?>
				<tbody>
			</table>
		</div>
		<div class="span12">
			<p>
			<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?>
			</p>
		</div>
		<div class="span12">
			<?php
				echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => '-'));
				echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
		</div>
	</div>	
</div>
