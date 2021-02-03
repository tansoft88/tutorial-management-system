<?php
App::uses('AppController', 'Controller');
/**
 * EmploymentTitles Controller
 *
 * @property EmploymentTitle $EmploymentTitle
 */
class EmploymentTitlesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EmploymentTitle->recursive = 0;
		$this->set('employmentTitles', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EmploymentTitle->id = $id;
		if (!$this->EmploymentTitle->exists()) {
			throw new NotFoundException(__('Invalid employment title'));
		}
		$this->set('employmentTitle', $this->EmploymentTitle->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmploymentTitle->create();
			if ($this->EmploymentTitle->save($this->request->data)) {
				$this->Session->setFlash(__('The employment title has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employment title could not be saved. Please, try again.'));
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
		$this->EmploymentTitle->id = $id;
		if (!$this->EmploymentTitle->exists()) {
			throw new NotFoundException(__('Invalid employment title'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmploymentTitle->save($this->request->data)) {
				$this->Session->setFlash(__('The employment title has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employment title could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EmploymentTitle->read(null, $id);
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
		$this->EmploymentTitle->id = $id;
		if (!$this->EmploymentTitle->exists()) {
			throw new NotFoundException(__('Invalid employment title'));
		}
		if ($this->EmploymentTitle->delete()) {
			$this->Session->setFlash(__('Employment title deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employment title was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
