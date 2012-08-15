<?php

class Customer extends AppModel {
/**   
 * Model name
 *
 * @var string
 * @access public
 */
	public $name = 'Customer';

	public $useDbConfig = 'mis';
	public $useTable = 'Customers';
	//var $useDbConfig = 'default';

	// $logs = $this->Customers->findAll();
	// echo $logs;



/*
	// table information
	var $name = 'LoginLog';
	// define which database driver the model 
	// needs to look upon	
	var $useDbConfig = 'backup';	
	// Table Name	
	var $useTable = 'LoginLogs';
	var $primaryKey = '';	
	var $cacheQueries = false; 

	*/
}
	//Check firebird-Mis connected Drivers
	print_r (PDO :: getAvailableDrivers ());

	function enabled() {
		return extension_loaded('interbase');
	}
     

