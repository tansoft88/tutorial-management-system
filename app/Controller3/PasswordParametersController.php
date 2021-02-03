<?php
App::uses('AppController', 'Controller');
/**
 * PasswordParameters Controller
 *
 * @property PasswordParameter $PasswordParameter
 */
class PasswordParametersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PasswordParameter->recursive = 0;
		$this->set('passwordParameters', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->PasswordParameter->id = $id;
		if (!$this->PasswordParameter->exists()) {
			throw new NotFoundException(__('Invalid password parameter'));
		}
		$this->set('passwordParameter', $this->PasswordParameter->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PasswordParameter->create();
			if ($this->PasswordParameter->save($this->request->data)) {
				$this->Session->setFlash(__('The password parameter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The password parameter could not be saved. Please, try again.'));
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
		$this->PasswordParameter->id = $id;
		if (!$this->PasswordParameter->exists()) {
			throw new NotFoundException(__('Invalid password parameter'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PasswordParameter->save($this->request->data)) {
				$this->Session->setFlash(__('The password parameter has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The password parameter could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PasswordParameter->read(null, $id);
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
		$this->PasswordParameter->id = $id;
		if (!$this->PasswordParameter->exists()) {
			throw new NotFoundException(__('Invalid password parameter'));
		}
		if ($this->PasswordParameter->delete()) {
			$this->Session->setFlash(__('Password parameter deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Password parameter was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
