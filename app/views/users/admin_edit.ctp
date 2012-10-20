<div class="users form">
	<h2><?php __('Wijzig gebruiker'); ?></h2>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Herstel wachtwoord', true), 
				array('action' => 'reset_password', $this->params['pass']['0'])); ?></li>
		</ul>
	</div>

	<?php echo $this->Form->create('User');?>
	<fieldset>
		<div class="tabs">
			<ul>
				<li><a href="#user-main"><?php __('Gebruiker'); ?></a></li>
				<?php echo $this->Layout->adminTabs(); ?>
			</ul>

			<div id="user-main">
			<?php
				echo $this->Form->input('id');
				echo $this->Form->input('role_id');
				echo $this->Form->input('username', array('label' => 'Gebruikersnaam'));
				echo $this->Form->input('name', array('label' => 'Naam'));
				echo $this->Form->input('email');
				//echo $this->Form->input('website');
				echo $this->Form->input('status', array('label' => 'Actief'));
			?>
			</div>
			<?php echo $this->Layout->adminTabs(); ?>
		</div>
	</fieldset>

	<div class="buttons">
	<?php
		echo $this->Form->end(__('Opslaan', true));
		echo $this->Html->link(__('Annuleren', true), array(
			'action' => 'index',
		), array(
			'class' => 'cancel',
		));
	?>
	</div>
</div>