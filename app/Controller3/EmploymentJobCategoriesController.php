<?php
App::uses('AppController', 'Controller');
/**
 * EmploymentJobCategories Controller
 *
 * @property EmploymentJobCategory $EmploymentJobCategory
 */
class EmploymentJobCategoriesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EmploymentJobCategory->recursive = 0;
		$this->set('employmentJobCategories', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EmploymentJobCategory->id = $id;
		if (!$this->EmploymentJobCategory->exists()) {
			throw new NotFoundException(__('Invalid employment job category'));
		}
		$this->set('employmentJobCategory', $this->EmploymentJobCategory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmploymentJobCategory->create();
			if ($this->EmploymentJobCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The employment job category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employment job category could not be saved. Please, try again.'));
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
		$this->EmploymentJobCategory->id = $id;
		if (!$this->EmploymentJobCategory->exists()) {
			throw new NotFoundException(__('Invalid employment job category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmploymentJobCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The employment job category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employment job category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EmploymentJobCategory->read(null, $id);
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
		$this->EmploymentJobCategory->id = $id;
		if (!$this->EmploymentJobCategory->exists()) {
			throw new NotFoundException(__('Invalid employment job category'));
		}
		if ($this->EmploymentJobCategory->delete()) {
			$this->Session->setFlash(__('Employment job category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employment job category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
