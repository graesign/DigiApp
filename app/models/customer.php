<?php
/**
 * Customers
 *
 * PHP version 5
 *
 * @category Model
 * @package  Admond
 * @version  1.0
 * @author   Graeham <mr.graeham@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.gravitee.nl
 */
class Customer extends AppModel {
/**   
 * Model name
 *
 * @var string
 * @access public
 */
	public $name = 'Customer';

/**   
 * Set DB_config
 * Set Current_Table
 *	
 * @var string
 * @access public
 */
	public $useDbConfig = 'mis';
	public $useTable = 'customers';
	// // var $useDbConfig = 'default';
	// public $tablePrefix = '';

	
	// public $logs = $this->Customers->findAll();
	// echo $logs;

	public $actsAs = array(
		'Ordered' => array(
			'field' => 'f_number' ,
			'foreign_key' => false,
		),

		
	);

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
	
	//Check firebird-Mis connected Drivers

}	

/**   
 * Check firebird-MIS driver
 *
 * @var string
 * @access public
 */

function enabled() {
	return extension_loaded('interbase');
}

/**   
 * Get available Drivers
 *
 * @access public
 */
// print_r (PDO :: getAvailableDrivers ());