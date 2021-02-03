<?php
App::uses('AppController', 'Controller');
/**
 * EmploymentJobTittles Controller
 *
 * @property EmploymentJobTittle $EmploymentJobTittle
 */
class EmploymentJobTittlesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EmploymentJobTittle->recursive = 0;
		$this->set('employmentJobTittles', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EmploymentJobTittle->id = $id;
		if (!$this->EmploymentJobTittle->exists()) {
			throw new NotFoundException(__('Invalid employment job tittle'));
		}
		$this->set('employmentJobTittle', $this->EmploymentJobTittle->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmploymentJobTittle->create();
			if ($this->EmploymentJobTittle->save($this->request->data)) {
				$this->Session->setFlash(__('The employment job tittle has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employment job tittle could not be saved. Please, try again.'));
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
		$this->EmploymentJobTittle->id = $id;
		if (!$this->EmploymentJobTittle->exists()) {
			throw new NotFoundException(__('Invalid employment job tittle'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmploymentJobTittle->save($this->request->data)) {
				$this->Session->setFlash(__('The employment job tittle has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employment job tittle could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EmploymentJobTittle->read(null, $id);
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
		$this->EmploymentJobTittle->id = $id;
		if (!$this->EmploymentJobTittle->exists()) {
			throw new NotFoundException(__('Invalid employment job tittle'));
		}
		if ($this->EmploymentJobTittle->delete()) {
			$this->Session->setFlash(__('Employment job tittle deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employment job tittle was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
