<?php
/**
 * Customers Controller
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

class CustomersController extends AppController {
	public $helpers = array('Html', 'Form');
	public $name 	= 'Customers';

	public function index() {
		// table 	model
 		// $this->set('posts', $this->Post->find('all'));
		// $this->set('customers', $this->Customer->find('all'  == "actief", true));
	}

	public function admin_index() {
		$this->set('title_for_layout', __('Customers', true));
		
		$klant = $this->Customer->find('all', array('conditions' => array('Customer.f_active' => 'T')));
		
		$this->Customer->recursive = 0;

		$this->set('klants', $this->paginate());
		$this->set('klants', $klant);


		///

		$this->set('title_for_layout', __('Users', true));

		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
		
	 	//	$this->Customer->find('all', array('conditions'=>array('Customer.f_active'=> 'F' )));
	 	//	$this->Customer->query("SELECT * FROM customers WHERE f_active = 'T'");

		///	$this->Customer->find('all', array ('conditions' => array("not" => array ( "Customer.f_active" => null)));

		// $this->Customer->find('list', array('conditions' => array('Customer.f_active' => 'T')));

		//	$klant = $this->Customer->query("SELECT * FROM customers WHERE f_active = 'T'");

		// print_r($klant);

		$this->set('customers', $this->paginate());

		/////////////////////
		$this->set('title_for_layout', __('Users', true));

		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
}