<?php
App::uses('AppController', 'Controller');
/**
 * CurrentLogInUsers Controller
 *
 * @property CurrentLogInUser $CurrentLogInUser
 */
class CurrentLogInUsersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CurrentLogInUser->recursive = 0;
		$this->set('currentLogInUsers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->CurrentLogInUser->id = $id;
		if (!$this->CurrentLogInUser->exists()) {
			throw new NotFoundException(__('Invalid current log in user'));
		}
		$this->set('currentLogInUser', $this->CurrentLogInUser->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CurrentLogInUser->create();
			if ($this->CurrentLogInUser->save($this->request->data)) {
				$this->Session->setFlash(__('The current log in user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The current log in user could not be saved. Please, try again.'));
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
		$this->CurrentLogInUser->id = $id;
		if (!$this->CurrentLogInUser->exists()) {
			throw new NotFoundException(__('Invalid current log in user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CurrentLogInUser->save($this->request->data)) {
				$this->Session->setFlash(__('The current log in user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The current log in user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->CurrentLogInUser->read(null, $id);
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
		$this->CurrentLogInUser->id = $id;
		if (!$this->CurrentLogInUser->exists()) {
			throw new NotFoundException(__('Invalid current log in user'));
		}
		if ($this->CurrentLogInUser->delete()) {
			$this->Session->setFlash(__('Current log in user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Current log in user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
