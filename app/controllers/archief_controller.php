<?php 

class ArchiefController extends AppController {
	
	public $name = 'archief';

	public $uses = array('Setting', 'User');

	public $helpers = array('Html', 'Form', 'Archief');

	/*public function admin_index(){
		$this->set('title_for_layout', __('Archief', true));

		$this->Archief->recursive = 0;
		//$this->paginate['Contact']['order'] = 'Contact.title ASC';
		//$this->set('contacts', $this->paginate());
	}*/

	public function beforeFilter() {
		parent::beforeFilter();

		$this->deletablePaths = array(
			APP.'views'.DS.'themed'.DS,
			WWW_ROOT,
		);
		$this->set('deletablePaths', $this->deletablePaths);

		//App::import('Core', 'Folder');
		App::import('Core', 'File');
	}

	public function admin_index(){
		$this->redirect(array('action' => 	'browse'));
		die();
	}


	public function admin_browse() {
		$this->folder = new Folder;
		
		if (isset($this->params['url']['path'])) {
			$path = $this->params['url']['path'];
		} else {
			$path = APP;
		}
		
		$this->set('title_for_layout', __('Archief', true));
		// $this->set('title_for_layout', __('File Manager', true));

		//new url
		//Substring( $string, 1, 4)
		
		//user sssion
		$usersess = $this->Session->read('Auth.User.username' );	

		$path = realpath($path) . DS;
		$regex = '/^' . preg_quote(realpath('c:\data'), '/') . '/';
		if (preg_match($regex, $path) == false) {
			$this->Session->setFlash(__(sprintf('Pad %s is beperkt', $path), true));
			$path = 'c:\data'.DS;

			// Substring( $string, 1, 4)
			// update 14812 App -> change to AdmondDigi_DB / Super Admin
		}

		$blacklist = array('.git', '.svn', '.CVS', '.test', );
		$regex = '/(' . implode('|', $blacklist) . ')/';
		if (in_array(basename($path), $blacklist) || preg_match($regex, $path)
			) {
			$this->Session->setFlash(__(sprintf('Path %s is beperkt', $path), true));
			$path = dirname($path);
		}

		$this->folder->path = $path;

		$content = $this->folder->read();
		$this->set(compact('content'));
		$this->set('path', $path);
	}x

}