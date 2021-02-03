<?php
App::uses('AppController', 'Controller');
/**
 * LoginAudits Controller
 *
 * @property LoginAudit $LoginAudit
 */
class LoginAuditsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->LoginAudit->recursive = 0;
		$this->set('loginAudits', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->LoginAudit->id = $id;
		if (!$this->LoginAudit->exists()) {
			throw new NotFoundException(__('Invalid login audit'));
		}
		$this->set('loginAudit', $this->LoginAudit->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LoginAudit->create();
			if ($this->LoginAudit->save($this->request->data)) {
				$this->Session->setFlash(__('The login audit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The login audit could not be saved. Please, try again.'));
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
		$this->LoginAudit->id = $id;
		if (!$this->LoginAudit->exists()) {
			throw new NotFoundException(__('Invalid login audit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->LoginAudit->save($this->request->data)) {
				$this->Session->setFlash(__('The login audit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The login audit could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->LoginAudit->read(null, $id);
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
		$this->LoginAudit->id = $id;
		if (!$this->LoginAudit->exists()) {
			throw new NotFoundException(__('Invalid login audit'));
		}
		if ($this->LoginAudit->delete()) {
			$this->Session->setFlash(__('Login audit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Login audit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
