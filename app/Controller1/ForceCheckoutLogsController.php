<?php
App::uses('AppController', 'Controller');
/**
 * ForceCheckoutLogs Controller
 *
 * @property ForceCheckoutLog $ForceCheckoutLog
 */
class ForceCheckoutLogsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ForceCheckoutLog->recursive = 0;
		$this->set('forceCheckoutLogs', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->ForceCheckoutLog->id = $id;
		if (!$this->ForceCheckoutLog->exists()) {
			throw new NotFoundException(__('Invalid force checkout log'));
		}
		$this->set('forceCheckoutLog', $this->ForceCheckoutLog->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ForceCheckoutLog->create();
			if ($this->ForceCheckoutLog->save($this->request->data)) {
				$this->Session->setFlash(__('The force checkout log has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The force checkout log could not be saved. Please, try again.'));
			}
		}
		$entryPoints = $this->ForceCheckoutLog->EntryPoint->find('list');
		$this->set(compact('entryPoints'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->ForceCheckoutLog->id = $id;
		if (!$this->ForceCheckoutLog->exists()) {
			throw new NotFoundException(__('Invalid force checkout log'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->ForceCheckoutLog->save($this->request->data)) {
				$this->Session->setFlash(__('The force checkout log has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The force checkout log could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->ForceCheckoutLog->read(null, $id);
		}
		$entryPoints = $this->ForceCheckoutLog->EntryPoint->find('list');
		$this->set(compact('entryPoints'));
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
		$this->ForceCheckoutLog->id = $id;
		if (!$this->ForceCheckoutLog->exists()) {
			throw new NotFoundException(__('Invalid force checkout log'));
		}
		if ($this->ForceCheckoutLog->delete()) {
			$this->Session->setFlash(__('Force checkout log deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Force checkout log was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
