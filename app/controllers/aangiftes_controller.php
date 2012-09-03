<?php
/**
 * Aangiftes Controller
 *
 * PHP version 5
 *
 */
class AangiftesController extends AppController {
	
	public $name = 'aangifte';
	// The next line could be omitted...default is default ;-)

/**
 * Helpers used by the Controller
 *
 * @var array
 * @access public
 */
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('title_for_layout', __('Aangiftes', true));

		$this->set('Aangiftes', $this->Aangifte->find('all'));
	}

	public function admin_index() {
		$this->set('title_for_layout', __('Aangiftes', true));

		//$this->Customers->recursive = 0;
		//$this->set('Aangiftes', $this->paginate());
	}
}
