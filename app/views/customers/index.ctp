<?php 
//echo $logs;
 ?>

 <!-- customers -->



<div class="customers index">
	<h2><?php __('Customers [CO]');?></h2>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New CO', true), array('action'=>'add')); ?></li>
		</ul>
	</div>

	<table cellpadding="0" cellspacing="0">
	

<!-- File: /app/views/posts/index.ctp -->

	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
	</tr>

	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($customers as $hall): ?>
	<tr>
		<td><?php echo $hall['Customer']['f_number']; ?></td>
		
		<td><?php echo $hall['Customer']['naam']; ?></td>
	</tr>
	<?php endforeach; ?>










	</table>
</div>

<div class="paging"><?php echo $paginator->numbers(); ?></div>
<div class="counter"><?php echo $paginator->counter(array('format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true))); ?></div>




<?php print_r($customers) ; ?>
<?php Configure::write('debug', 0); ?>