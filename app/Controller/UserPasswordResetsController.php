<?php
App::uses('AppController', 'Controller');
/**
 * UserPasswordResets Controller
 *
 * @property UserPasswordReset $UserPasswordReset
 */
class UserPasswordResetsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserPasswordReset->recursive = 0;
		$this->set('userPasswordResets', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UserPasswordReset->id = $id;
		if (!$this->UserPasswordReset->exists()) {
			throw new NotFoundException(__('Invalid user password reset'));
		}
		$this->set('userPasswordReset', $this->UserPasswordReset->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserPasswordReset->create();
			if ($this->UserPasswordReset->save($this->request->data)) {
				$this->Session->setFlash(__('The user password reset has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user password reset could not be saved. Please, try again.'));
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
		$this->UserPasswordReset->id = $id;
		if (!$this->UserPasswordReset->exists()) {
			throw new NotFoundException(__('Invalid user password reset'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserPasswordReset->save($this->request->data)) {
				$this->Session->setFlash(__('The user password reset has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user password reset could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UserPasswordReset->read(null, $id);
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
		$this->UserPasswordReset->id = $id;
		if (!$this->UserPasswordReset->exists()) {
			throw new NotFoundException(__('Invalid user password reset'));
		}
		if ($this->UserPasswordReset->delete()) {
			$this->Session->setFlash(__('User password reset deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User password reset was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
