<?php
App::uses('AppController', 'Controller');
/**
 * FacultySubCategories Controller
 *
 * @property FacultySubCategory $FacultySubCategory
 */
class FacultySubCategoriesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FacultySubCategory->recursive = 0;
		$this->set('facultySubCategories', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->FacultySubCategory->id = $id;
		if (!$this->FacultySubCategory->exists()) {
			throw new NotFoundException(__('Invalid faculty sub category'));
		}
		$this->set('facultySubCategory', $this->FacultySubCategory->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FacultySubCategory->create();
			if ($this->FacultySubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The faculty sub category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faculty sub category could not be saved. Please, try again.'));
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
		$this->FacultySubCategory->id = $id;
		if (!$this->FacultySubCategory->exists()) {
			throw new NotFoundException(__('Invalid faculty sub category'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->FacultySubCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The faculty sub category has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The faculty sub category could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->FacultySubCategory->read(null, $id);
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
		$this->FacultySubCategory->id = $id;
		if (!$this->FacultySubCategory->exists()) {
			throw new NotFoundException(__('Invalid faculty sub category'));
		}
		if ($this->FacultySubCategory->delete()) {
			$this->Session->setFlash(__('Faculty sub category deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Faculty sub category was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
