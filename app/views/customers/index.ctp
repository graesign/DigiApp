<!-- Customers CO admond-->
<div class="users index">
	<h2><?php echo $title_for_layout; ?></h2>

	<p><?php echo __('Logged in as Customers$$.ID') . ' ' . $this->Session->read('Auth.User.username'); ?></p>
	
	<p><?php  echo $this->Html->link(__("Afmelden", true), array('plugin' => 0, 'controller' => 'users', 'action' => 'logout'));?></p>
</div>