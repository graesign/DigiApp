<?php
/**
 * Customers Controller
 *
 * This file will show all the User directory with the right 
 *
 * PHP version 5
 *
 */
class CustomersController extends AppController {
/**
 * Controller name
 *
 * @var string
 * @access public
 */
	public $name = 'Customers';
	// The next line could be omitted...default is default ;-)

/**
 * Helpers used by the Controller
 *
 * @var array
 * @access public
 */
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('title_for_layout', __('Customers', true));
	}

	public function admin_index() {
		$this->set('title_for_layout', __('Customers', true));

		$this->User->recursive = 0;
		$this->set('customers', $this->paginate());
	}
}
