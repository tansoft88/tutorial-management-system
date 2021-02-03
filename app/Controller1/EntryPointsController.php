<?php
App::uses('AppController', 'Controller');
/**
 * EntryPoints Controller
 *
 * @property EntryPoint $EntryPoint
 */
class EntryPointsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EntryPoint->recursive = 0;
		$this->set('entryPoints', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EntryPoint->id = $id;
		if (!$this->EntryPoint->exists()) {
			throw new NotFoundException(__('Invalid entry point'));
		}
		$this->set('entryPoint', $this->EntryPoint->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			
			$name = $this->request->data['EntryPoint']['name'];
			$check_in = $this->request->data['EntryPoint']['check_in'];
			//debug($this->request->data);die();
			
			/*************check if user exists**************/
			$checkEntry = $this->EntryPoint->find('list',array(
													'conditions'=>array('EntryPoint.name'=>$name,
																		'EntryPoint.check_in'=>$check_in),
													'fields'=>array('id')));
			if(empty($checkEntry)){
				$this->EntryPoint->create();
						$this->EntryPoint->set(array(
									'name' => $name,
									'check_in' => $check_in
												));
						$this->EntryPoint->save();
				
			}
					
		
			if ($this->EntryPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The entry point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entry point could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EntryPoint->id = $id;
		if (!$this->EntryPoint->exists()) {
			throw new NotFoundException(__('Invalid entry point'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EntryPoint->save($this->request->data)) {
				$this->Session->setFlash(__('The entry point has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entry point could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EntryPoint->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->EntryPoint->id = $id;
		if (!$this->EntryPoint->exists()) {
			throw new NotFoundException(__('Invalid entry point'));
		}
		if ($this->EntryPoint->delete()) {
			$this->Session->setFlash(__('Entry point deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Entry point was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
