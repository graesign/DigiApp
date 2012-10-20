<?php 
//echo $logs;

	//echo $pending;

 ?>

 <!-- customers -->


<div class="customers index">
	<h2><?php __('Customers [CO]');?></h2>

	<div class="actions">
		<ul>
			<li><?php // echo $this->Html->link(__('Nieuwe CO', true), array('action'=>'add')); ?></li>
			<li><?php echo $this->Html->link(__('Zoeken', true), array('action'=>'search')); ?></li>
		</ul>
	</div>

	<table cellpadding="0" cellspacing="0">
	<?php
		$tableHeaders =  $this->Html->tableHeaders(array(
			$paginator->sort('Klantnr'),
			//__('Role', true),
			$paginator->sort('code'),
			$paginator->sort('naam'),
			$paginator->sort('postcode'),
			$paginator->sort('plaats'),
			$paginator->sort('land'),
			$paginator->sort('active'),
			__('Actie', true),

		));
		echo $tableHeaders;

		$rows = array();
		foreach ($klants AS $klant) {
		
			$actions .= ' ' . $this->Layout->adminRowActions($klant['Customer']['f_number']);
			/*
			$actions .= ' ' . $this->Html->link(__('Verwijder', true), array(
				'controller' => 'users',
				'action' => 'delete',
				$user['User']['id'],
				'token' => $this->params['_Token']['key'],
			), null, __('Are you sure?', true));

			*/

			$rows[] = array(
					   //model 	    db_field
				$klant['Customer']['f_number'],
				$klant['Customer']['f_code'],
				$klant['Customer']['f_name'],
				$klant['Customer']['f_postcode'],
				$klant['Customer']['f_city'],
				$klant['Customer']['f_country'],
				$klant['Customer']['f_active'],
				// h($user['Role']['title']),
				// h($user['User']['username']),
				// h($user['User']['name']),
				$actions,
			);
		}

		echo $this->Html->tableCells($rows);
		echo $tableHeaders;
	?>
	</table>
</div>

<div class="paging"><?php echo $paginator->numbers(); ?></div>
<div class="counter"><?php echo $paginator->counter(array('format' => __('Pagina %page% van %pages%,  %current% items van de %count%', true))); ?></div>


<?php 
	//	find all customers
	//	print_r($customers);	
	Configure::write('debug', 0); 
?>