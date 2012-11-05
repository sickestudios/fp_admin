<div class="row">
	<div class="span12">
	<table class="table table-striped">
	  <caption><h2><?php echo __('Reviews'); ?></h2></caption>
	  <thead>
	    <tr>
		  <th></th>	
	      <th><?php echo $this->Paginator->sort('title'); ?></th>
	      <th><?php echo $this->Paginator->sort('created'); ?></th>
	      <th><?php echo $this->Paginator->sort('modified'); ?></th>
	      <th><?php echo $this->Paginator->sort('view'); ?></th>
	      <th><?php echo $this->Paginator->sort('language_id'); ?></th>	      
	      <th><?php echo h('Actions'); ?></th>
	      
	    </tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($reviews as $review): ?>
	    <?php
	    	if($review['Review']['status'] == 'pending') {
	    		echo '<tr class="warning">';
	    	} else if($review['Review']['status'] == 'waiting-supervision') {
	    		echo '<tr class="info">';	
	    	} else if($review['Review']['status'] == 'completed') {
	    		echo '<tr class="success">';
	    	} else {
	    		'<tr>';
	    	}
	    ?>
	      <td><?php echo $this->Html->image(str_replace('/s1600/','/s90/',$review['Cover']['image']),array('class'=>'img-polaroid')); ?></td>
	      <td>
	      	<?php echo h($review['Review']['title']); ?><br>
	      	<?php echo ($review['Review']['published'] == 1) ? '<span class="label label-success">Published</span>' : '<span class="label label-important">no-Published</span>'; ?>
	      	<?php if($review['Review']['feature'] == 1) { echo '<span class="label label-complete">Feature</span>'; } ?>
	      </td>
	      <td><?php echo h($review['Review']['created']); ?></td>
	      <td><?php echo h($review['Review']['modified']); ?></td>
	      <td><?php echo h($review['Review']['view']); ?></td>
	      <td><?php echo $this->Html->image('flag_'.$review['Language']['isocode'].'.png'); ?></td>
	      <td><?php echo ($review['Review']['status'] == 'waiting-supervision') ? $this->Html->link('<i class="icon-eye-open icon-white"></i>',array('controller'=>'reviews','action'=>'supervise',$review['Review']['id']),array('escape'=>false,'class'=>'btn btn-primary')):''; ?></td>
	    </tr>
	    <?php endforeach; ?>
	  </tbody>
	</table>
	</div>
	<div class="row">
		<div class="span12">
			<?php
		    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		    echo " ";
		    echo $this->Paginator->numbers(array('separator' => ' - '));
		    echo " ";
		    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		    ?>
    	</div>
	</div>	
</div>

		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $review['Review']['id'])); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $review['Review']['id'])); ?>
			<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $review['Review']['id']), null, __('Are you sure you want to delete # %s?', $review['Review']['id'])); ?>
		</td>