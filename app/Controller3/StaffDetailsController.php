<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Xml', 'Utility');
App::uses('AuthComponent', 'Controller/Component');
/**
 * StaffDetails Controller
 *
 * @property StaffDetail $StaffDetail
 */
class StaffDetailsController extends AppController {
var $components = array("Email","Session",'RequestHandler');
var $helpers = array("Html","Form","Session",'Js');
	
	public function beforeFilter(){
 	parent::beforeFilter();
	  /* $this->Auth->allow('add');
	   $this->Auth->allow('index'); 
	   $this->Auth->allow('edit'); 
	   $this->Auth->allow('delete'); 
	   $this->Auth->allow('user_search'); */
	   $this->Auth->deny();
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->StaffDetail->recursive = 0;
		$this->set('staffDetails', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->StaffDetail->id = $id;
		if (!$this->StaffDetail->exists()) {
			throw new NotFoundException(__('Invalid staff detail'));
		}
		$this->set('staffDetail', $this->StaffDetail->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$creator = $this->Session->read('Auth.User.username');
		$this->loadModel('User');
		if ($this->request->is('post')) {
			
			//debug($this->request->data);die();
			$created = date('d-m-y');
			$firstname = $this->request->data['StaffDetail']['firstname'];
			$lastname = $this->request->data['StaffDetail']['lastname'];
			$title = $this->request->data['StaffDetail']['title'];
			$ecnumber = $this->request->data['StaffDetail']['ecnumber'];
			$department_code = $this->request->data['StaffDetail']['department_code'];
			//$physical_address = $this->request->data['StaffDetail']['physical_address'];
			//$contact_address = $this->request->data['StaffDetail']['contact_address'];
			//$mobile = $this->request->data['StaffDetail']['mobile'];
			$designation = $this->request->data['StaffDetail']['designation'];
			//$work_phone = $this->request->data['StaffDetail']['work_phone'];
			//$home_phone = $this->request->data['StaffDetail']['home_phone'];
			$email_address = $this->request->data['StaffDetail']['email_address'];
			$user_type = $this->request->data['StaffDetail']['user_type'];
			$username=$firstname[0].$lastname;
			
			//===== generates default password i.e alpha numeric with 10 characters =====//
			//$default_password = substr( md5(mt_rand()), 0, 10);
		
		/*************check if user exists**************/
			$checkStaff = $this->StaffDetail->find('list',array(
													'conditions'=>array('StaffDetail.ecnumber'=>$ecnumber),
													'fields'=>array('id')));
													
		if(empty($checkStaff)){
			//========================save staff details to Staff Details Tables=======================//
					$this->StaffDetail->create();
						$this->StaffDetail->set(array(
									'ecnumber' => $ecnumber,
									'firstname' => $firstname,
									'lastname'=> $lastname,
									'title'=>$title,
									'designation'=>$designation,
									'department_code'=>$department_code,
									//'home_phone'=>$home_phone,
									//'work_phone'=>$work_phone,
									//'mobile'=>$mobile,
									'email_address'=>$email_address
									//'contact_address'=>$contact_address,
									//'physical_address'=>$physical_address
												));
						$this->StaffDetail->save();
			
		}
		if(!empty($checkStaff)){
				$this->Session->setFlash(__('Staff with same details already exists'));
				$this->redirect(array('action' => 'index'));
			
		}
	/*************check if user exists**************/
		/*	$checkUsr = $this->User->find('list',array(
													'conditions'=>array('User.ecnumber'=>$ecnumber),
													'fields'=>array('id')));
			if(empty($checkUsr)){
			
								$this->User->create();
								$this->User->set(array(
									'username' => $username,
									'password'=> $lastname,
									'system_group_id'=>$user_type,
									'ecnumber'=>$ecnumber,
									'created'=>$created,
									'account_status'=>1,
									'created_by'=>$creator,
									'email_address'=>$email_address
									));
									$this->User->save();	
				
			}
			if(!empty($checkUsr)){
				$this->Session->setFlash(__('User already exists'));
				$this->redirect(array('action' => 'index'));
				
			}*/
			
				
			
			if ($this->StaffDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The staff detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff detail could not be saved. Please, try again.'));
			}
		}
		    $this->loadModel('SystemGroup');
		    $this->loadModel('Department');
			$user_type=$this->SystemGroup->find('list',array('fields'=>array('id','account_type_name')));
			$dptmnts=$this->Department->find('list',array('fields'=>array('code','name')));
			$this->set(compact('user_type','dptmnts'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->StaffDetail->id = $id;
		if (!$this->StaffDetail->exists()) {
			throw new NotFoundException(__('Invalid staff detail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->StaffDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The staff detail has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The staff detail could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->StaffDetail->read(null, $id);
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
		$this->StaffDetail->id = $id;
		if (!$this->StaffDetail->exists()) {
			throw new NotFoundException(__('Invalid staff detail'));
		}
		if ($this->StaffDetail->delete()) {
			$this->Session->setFlash(__('Staff detail deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Staff detail was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
