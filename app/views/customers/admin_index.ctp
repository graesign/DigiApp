<!-- customers -->

<div class="users index">
	<h2><?php __('Customers CO');?></h2>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User', true), array('action'=>'add')); ?></li>
		</ul>
	</div>

	<table cellpadding="0" cellspacing="0">
	<?php
		$tableHeaders =  $this->Html->tableHeaders(array(
			$paginator->sort('id'),
			//__('Role', true),
			$paginator->sort('F_NAME'),
			$paginator->sort('name'),
			$paginator->sort('email'),
			__('Actions', true),
		));
		echo $tableHeaders;

		$rows = array();
		foreach ($customers AS $customers) {
			$actions  = $this->Html->link(__('Edit', true), array('controller' => 'customers', 'action' => 'edit', $customers['customers']['id']));
			$actions .= ' ' . $this->Layout->adminRowActions($customers['customers']['id']);
			$actions .= ' ' . $this->Html->link(__('Delete', true), array(
				'controller' => 'customers',
				'action' => 'delete',
				$user['customers']['id'],
				'token' => $this->params['_Token']['key'],
			), null, __('Weet u het zeker?', true));

			$rows[] = array(
				$customers['customers']['id'],
				h($customers['customers']['F_NAME']),
				h($customers['customers']['username']),
				h($customers['customers']['name']),
				$customers['customers']['email'],
				$actions,
			);
		}

		echo $this->Html->tableCells($rows);
		echo $tableHeaders;
	?>
	</table>
</div>

<div class="paging"><?php echo $paginator->numbers(); ?></div>
<div class="counter"><?php echo $paginator->counter(array('format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true))); ?></div>