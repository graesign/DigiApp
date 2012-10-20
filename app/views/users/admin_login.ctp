<div class="users form">
	<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));?>
		<fieldset>

		<?php
			echo "<h1>Inloggen</h1>";
			echo "<p>Vul uw gebruikers-id en wachtwoord in.</p>";
			echo $this->Form->input('username', array('label' => 'Gebruikers-id'));
			echo $this->Form->input('password', array('label' => 'Wachtwoord'));
		?>
		</fieldset>
	<?php
		echo $this->Html->link(__('Wachtwoord vergeten?', true), array(
			'admin' => true,
			'controller' => 'users',
			'action' => 'forgot',
		), array(
			'class' => 'forgot',
		));
		echo $this->Form->end(__('Inloggen', true));
	?>
</div>