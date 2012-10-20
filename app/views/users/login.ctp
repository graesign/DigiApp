<div class="users form">
	<h2><?php __('Inloggen '); ?></h2>
	<?php echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));?>

		<p>Via dit inlogscherm krijgt u toegang tot het Digi-Archief, D'accord (accorderingssyteem), opvragen van rapporten uit uw administratie, uploaden van uw administratie en uw facturen welke door ons aan u verzonden zijn.</p>
 
		<fieldset>
		<?php
			echo $this->Form->input('username', array('label' => 'Klant-ID'));
			echo $this->Form->input('password', array('label' => 'Wachtwoord'));
		?>
		</fieldset>
	<?php echo $this->Form->end('Login');?>
</div>