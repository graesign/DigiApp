<div class="archiefs folder">
	<h2><?php echo $title_for_layout; ?></h2>
	

	<div>
		Toelichting:
	</div>
	<div class="breadcrumb">
		
	</div>
	
	<div class="directory-content">
		<table cellpadding="0" cellspacing="0">
		<?php
			$tableHeaders =  $this->Html->tableHeaders(array(
				'',
				__('ID', true),
				__('#', true),
				__('Bestandsnaam', true),
				//__('Datum', true),
				__('Status', true),
				__('Actie', true),
			));
			echo $tableHeaders;

			// directories ~folders
			$rows = array();
			foreach ($content['0'] AS $directory) {
				$actions = $this->Archief->linkDirectory(__('Open', true), $path.$directory.DS);
				if ($this->Archief->inPath($deletablePaths, $path.$directory)) {
					$actions .= ' ' . $this->Archif->link(__('Delete', true), array(
						'controller' => 'filemanager',
						'action' => 'delete_directory',
						'token' => $this->params['_Token']['key'],
					), $path.$directory);
				}
				$rows[] = array(
					$this->Html->image('/img/icons/folder.png'),
					$this->Archief->linkDirectory($directory, $path.$directory.DS),
					$actions,
				);
			}
			echo $this->Html->tableCells($rows, array('class' => 'directory'), array('class' => 'directory'));

			// files
			$rows = array();
			foreach ($content['1'] AS $file) {
				$actions = $this->Archief->link(__('Wijzig', true), array('controller' => 'archief', 'action' => 'editfile'), $path.$file);
				if ($this->Archief->inPath($deletablePaths, $path.$file)) {
					$actions .= $this->Archief->link(__('Verwijder', true), array(
						'controller' => 'archief',
						'action' => 'delete_file',
						'token' => $this->params['_Token']['key'],
					), $path.$file);
				}
				$rows[] = array(
					$this->Html->image('/img/icons/'.$this->Archief->filename2icon($file)),
					$this->Archief->linkFile($file, $path.$file),
					$actions,
				);
			}
			echo $this->Html->tableCells($rows, array('class' => 'file'), array('class' => 'file'));

			echo $tableHeaders;
		?>	
		</table>
	</div>
</div>