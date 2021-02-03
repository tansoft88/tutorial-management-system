<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('Xml', 'Utility');
App::uses('AuthComponent', 'Controller/Component');
App::import('Vendor', '/Classes/PHPExcel/IOFactory'); //import statement for Excel editing classes
App::import('Vendor', '/Classes/PHPExcel/Cell/MyValueBinder'); //import statement for Excel editing classes


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
	   $this->Auth->allow('add_stud');
	   $this->Auth->allow('register_stud');
	}

/**
 * index method
 *
 * @return void
 */
 
 public function index_stud() {
	 
	 $this->loadModel('StudentDetail');
	 $studData = $this->StudentDetail->find('all');
	 //debug($studData);die();
	 
	 $this->set(compact('studData'));
	 
	}
	
	
public function index_stud_excel() {
	 
	 $this->loadModel('StudentDetail');
	 $studData = $this->StudentDetail->find('all');
	 //debug($studData);die();
	 
	 $this->set(compact('studData'));
	 $this->render('index_stud_excel','export_xls');
	}
 
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


	public function dptmnt_studs(){
	 $this->loadModel('StudentDetail');
	 $this->loadModel('Department');
	 $creator = $this->Session->read('Auth.User.username');
	if ($this->request->is('post') || $this->request->is('put')) {
		$dpmnt_code = $this->request->data['StaffDetail']['department_code'];
		//debug($dpmnt_code);die();
		$studData = $this->StudentDetail->find('all',array(
													'conditions'=>array('StudentDetail.department_code'=>$dpmnt_code)));
		$dptmntNm = $this->Department->find('first',
											array('conditions'=>array('Department.code'=>$dpmnt_code),
											'fields',array('Department.name')));
													
		$dptmntNm = $dptmntNm['Department']['name'];
		//debug($dptmntNm);die();										
		if(empty($studData)){
			$this->Session->setFlash(__('no attachment students from the selected department'));
			$this->redirect(array('action' => 'dptmnt_studs'));
		}
		
		//debug($studData);die();
	}
	//debug($studData);die();
			$this->loadModel('Department');
			$dptmnts=$this->Department->find('list',array('fields'=>array('code','name')));
			$this->set(compact('dpmnt_code','studData','dptmnts','dptmntNm'));
	}




public function register_stud(){
	
	$this->loadModel('StudentDetail');
	$this->loadModel('User');
	 $creator = $this->Session->read('Auth.User.username');
	if ($this->request->is('post') || $this->request->is('put')) {
		 //debug($this->request->data);die();
		    $created = date('d-m-y');
			$firstname = $this->request->data['StaffDetail']['firstname'];
			$surname = $this->request->data['StaffDetail']['surname'];
			$title = $this->request->data['StaffDetail']['title'];
			$id_number = $this->request->data['StaffDetail']['id_number'];
			$category = $this->request->data['StaffDetail']['department_code'];
			//$programme = $this->request->data['StaffDetail']['programme'];
			$mobile = $this->request->data['StaffDetail']['mobile'];
			//$home_address = $this->request->data['StaffDetail']['home_address'];
			$email_address = $this->request->data['StaffDetail']['email_address'];
			$username=$firstname[0].$surname;
			
			$kaYrFrm = $this->request->data['StaffDetail']['from_date']['year'];
					$kaMnthFrm = $this->request->data['StaffDetail']['from_date']['month'];
					$kaDayFrm = $this->request->data['StaffDetail']['from_date']['day'];
					//$yrFrm = substr($kaYrFrm, -2);
					$from_date = $kaDayFrm."-".$kaMnthFrm."-".$kaYrFrm;
			$kaYrTo = $this->request->data['StaffDetail']['to_date']['year'];
					$kaMnthTo= $this->request->data['StaffDetail']['to_date']['month'];
					$kaDayTo = $this->request->data['StaffDetail']['to_date']['day'];
					//$yrFrm = substr($kaYrFrm, -2);
					$to_date = $kaDayTo."-".$kaMnthTo."-".$kaYrTo;
			
			if(empty($id_number)){
			$this->Session->setFlash(__('Please Fill Student Details'));
			$this->redirect(array('action' => 'register_stud'));	
				
			}
			if(empty($firstname)){
			$this->Session->setFlash(__('Please Fill Student Details'));
			$this->redirect(array('action' => 'register_stud'));	
				
			}
			if(empty($surname)){
			$this->Session->setFlash(__('Please Fill Student Details'));
			$this->redirect(array('action' => 'register_stud'));	
				
			}
		
		
		
		 /*************check if student exists**************/
			$checkStud = $this->StudentDetail->find('list',array(
													'conditions'=>array('StudentDetail.id_number'=>$id_number),
													'fields'=>array('id')));
		 
		if(!empty($checkStud)){
				$this->Session->setFlash(__('Student with same details already exists'));
				$this->redirect(array('action' => 'register_stud'));
			}
		if(empty($checkStud)){
			
		//========================save to StudentDetail Table=======================//
					$this->StudentDetail->create();
						$this->StudentDetail->set(array(
									'id_number' => $id_number,
									'firstname' => $firstname,
									'surname'=> $surname,
									'title'=>$title,
									//'programme'=>$programme,
									'department_code'=>$category,
									'mobile'=>$mobile,
									'from_date'=>$from_date,
									'to_date'=>$to_date,
									'email_address'=>$email_address
								    //'home_address'=>$home_address
												));
						$this->StudentDetail->save();
			
		
		/*************check if user exists**************/
			$checkUsr = $this->User->find('list',array(
													'conditions'=>array('User.ecnumber'=>$id_number),
													'fields'=>array('id')));
			if(empty($checkUsr)){
			
								$this->User->create();
								$this->User->set(array(
									'username' => $username,
									'password'=> $surname,
									'system_group_id'=>3,
									'ecnumber'=>$id_number,
									//'created'=>$created,
									'account_status'=>1,
									//'created_by'=>$creator,
									'email_address'=>$email_address
									));
									$this->User->save();	
				
			}
			if(!empty($checkUsr)){
				$this->Session->setFlash(__('User already exists please log in with your credentials'));
				$this->redirect(array('action' => 'login'));
				
			}
		
		}
			
	}
	if ($this->StudentDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The student detail has been saved. You are now a member '));
				$this->redirect(array('controller'=> 'users', 'action' => 'login'));
			} /*else {
				$this->Session->setFlash(__('The student detail could not be saved. Please, try again.'));
			}*/
	$this->loadModel('Department');
			$this->loadModel('Programme');
			$dptmnts=$this->Department->find('list',array('fields'=>array('code','name')));
			$progs=$this->Programme->find('list',array('fields'=>array('code','name')));
			$this->set(compact('dptmnts','progs'));
}

public function submit_ass() {
	$this->loadModel('StudentDetail');
	$this->loadModel('Assignment');
	$id_number = $this->Session->read('Auth.User.ecnumber');
	//email address
	$email = $this->StudentDetail->find('first',array(
													'conditions'=>array('StudentDetail.id_number'=>$id_number),
													'fields'=>array('email_address')));
	$email_address = $email['StudentDetail']['email_address'];
	
	//debug($email);die();
	if ($this->request->is('post') || $this->request->is('put')) {
		
		$category = $this->request->data['StaffDetail']['department_code'];
		$filename = $this->request->data['StaffDetail']['Browse_File']['name'];	
		$kaYrTo = $this->request->data['StaffDetail']['to_date']['year'];
					$kaMnthTo= $this->request->data['StaffDetail']['to_date']['month'];
					$kaDayTo = $this->request->data['StaffDetail']['to_date']['day'];
					//$yrFrm = substr($kaYrFrm, -2);
					$to_date = $kaDayTo."-".$kaMnthTo."-".$kaYrTo;
					//debug($to_date);die();
		$checkAss = $this->Assignment->find('list',array(
													'conditions'=>array('Assignment.stud_id'=>$id_number,
																		'Assignment.file_name'=>$filename,
																		'Assignment.category'=>$category),
													'fields'=>array('id')));
													
													
		if(!empty($checkAss)){
			$this->Session->setFlash(__('Assignment has already been uploaded, upload a different assignment'));
			$this->redirect(array('controller' => 'Users','action' =>'index_reports'));
			}
		//upload assignment
		if(empty($checkAss)){
			 
			 //Upload file
		    //making the directory with the supp email
			$files_dir = APP."uploads\\$email_address\\$id_number\\";
			if (!file_exists($files_dir)) {
			mkdir($files_dir, 0777, true); 
			}
			
			if(empty($this->request->data['StaffDetail']['Browse_File']['name'])){
			$this->Session->setFlash(__('No assignment file has been selected'));
			$this->redirect(array('controller' => 'Users','action' =>'index_reports'));
			}
		    //file name
			$filename = $this->request->data['StaffDetail']['Browse_File']['name'];	
			$this->request->data['StaffDetail']['file_attachment'] =	$filename;
			$path = pathinfo($filename);
			//allowed formats				
			$acceptable = array("pdf","docx");
			if(!in_array($path['extension'],$acceptable)) {
           		$this->Session->setFlash('Error Uploading: Please upload files with .pdf file extension only');
				$this->redirect(array('controller' => 'Users','action' =>'index_reports'));
              }
			 //upload file
			$filenames = $files_dir . $this->request->data['StaffDetail']['Browse_File']['name'];
			$success = move_uploaded_file($this->request->data['StaffDetail']['Browse_File']['tmp_name'],$filenames);
			 
			 
			//========================save to StudentDetail Table=======================//
					$this->Assignment->create();
						$this->Assignment->set(array(
									'stud_id' => $id_number,
									'downloaded'=>'NO',
									'category'=>$category,
									'due_date'=>$to_date,
									'file_name'=>$filename,
									'answered'=>'NO'
									));
						$this->Assignment->save();
				
			
		}
		$this->Session->setFlash('Assignment Successfully Uploaded');
		$this->redirect(array('controller' => 'Users','action' =>'index_reports'));
		
		
	}
	        $this->loadModel('Department');
			$this->loadModel('Programme');
			$dptmnts=$this->Department->find('list',array('fields'=>array('code','name')));
			$progs=$this->Programme->find('list',array('fields'=>array('code','name')));
			$this->set(compact('dptmnts','progs'));	
    }

/**
 * add method
 *
 * @return void
 */
 
 
 public function add_stud() {
	 $this->loadModel('StudentDetail');
	 $creator = $this->Session->read('Auth.User.username');
	if ($this->request->is('post') || $this->request->is('put')) {
		// debug($this->request->data);die();
		    $created = date('d-m-y');
			$firstname = $this->request->data['StaffDetail']['firstname'];
			$surname = $this->request->data['StaffDetail']['surname'];
			$title = $this->request->data['StaffDetail']['title'];
			$id_number = $this->request->data['StaffDetail']['id_number'];
			$department_code = $this->request->data['StaffDetail']['department_code'];
			$programme = $this->request->data['StaffDetail']['programme'];
			$mobile = $this->request->data['StaffDetail']['mobile'];
			$home_address = $this->request->data['StaffDetail']['home_address'];
			$email_address = $this->request->data['StaffDetail']['email_address'];
			//$from_date = $this->request->data['StaffDetail']['from_date'];
			
			$kaYrFrm = $this->request->data['StaffDetail']['from_date']['year'];
					$kaMnthFrm = $this->request->data['StaffDetail']['from_date']['month'];
					$kaDayFrm = $this->request->data['StaffDetail']['from_date']['day'];
					//$yrFrm = substr($kaYrFrm, -2);
					$from_date = $kaDayFrm."-".$kaMnthFrm."-".$kaYrFrm;
			$kaYrTo = $this->request->data['StaffDetail']['to_date']['year'];
					$kaMnthTo= $this->request->data['StaffDetail']['to_date']['month'];
					$kaDayTo = $this->request->data['StaffDetail']['to_date']['day'];
					//$yrFrm = substr($kaYrFrm, -2);
					$to_date = $kaDayTo."-".$kaMnthTo."-".$kaYrTo;
					
			
			
			//debug($to_date);die();
			if(empty($id_number)){
			$this->Session->setFlash(__('Please Fill Student Details'));
			$this->redirect(array('action' => 'add_stud'));	
				
			}
			if(empty($firstname)){
			$this->Session->setFlash(__('Please Fill Student Details'));
			$this->redirect(array('action' => 'add_stud'));	
				
			}
			if(empty($surname)){
			$this->Session->setFlash(__('Please Fill Student Details'));
			$this->redirect(array('action' => 'add_stud'));	
				
			}
		
		
		
		 /*************check if student exists**************/
			$checkStud = $this->StudentDetail->find('list',array(
													'conditions'=>array('StudentDetail.id_number'=>$id_number),
													'fields'=>array('id')));
		 
		if(!empty($checkStud)){
				$this->Session->setFlash(__('Student with same details already exists'));
				$this->redirect(array('action' => 'add_stud'));
			
		}
		
		
		
		 if(empty($checkStud)){
			 
			 //Upload file
		    //making the directory with the supp email
			$files_dir = APP."uploads\\$email_address\\$id_number\\";
			if (!file_exists($files_dir)) {
			mkdir($files_dir, 0777, true); 
			}
			
			if(empty($this->request->data['StaffDetail']['Browse_File']['name'])){
			$this->Session->setFlash(__('No assignment file has been selected'));
			$this->redirect(array('action' =>'add_stud'));
			}
		    //file name
			$filename = $this->request->data['StaffDetail']['Browse_File']['name'];	
			$this->request->data['StaffDetail']['file_attachment'] =	$filename;
			$path = pathinfo($filename);
			//allowed formats				
			$acceptable = array("pdf","docx");
			if(!in_array($path['extension'],$acceptable)) {
           		$this->Session->setFlash('Error Uploading: Please upload files with .pdf file extension only');
				$this->redirect(array('action' =>'add_stud'));
              }
			 //upload file
			$filenames = $files_dir . $this->request->data['StaffDetail']['Browse_File']['name'];
			$success = move_uploaded_file($this->request->data['StaffDetail']['Browse_File']['tmp_name'],$filenames);
			 
			 
			//========================save to StudentDetail Table=======================//
					$this->StudentDetail->create();
						$this->StudentDetail->set(array(
									'id_number' => $id_number,
									'firstname' => $firstname,
									'surname'=> $surname,
									'title'=>$title,
									'programme'=>$programme,
									'department_code'=>$department_code,
									'mobile'=>$mobile,
									'from_date'=>$from_date,
									'to_date'=>$to_date,
									'email_address'=>$email_address,
								    'home_address'=>$home_address
												));
						$this->StudentDetail->save();
						
						
		     
		
			
		}
		if ($this->StudentDetail->save($this->request->data)) {
				$this->Session->setFlash(__('The student detail has been saved'));
				$this->redirect(array('action' => 'add_stud'));
			} else {
				$this->Session->setFlash(__('The student detail could not be saved. Please, try again.'));
			}
		
		// debug($this->request->data);die();
	 }
			$this->loadModel('Department');
			$this->loadModel('Programme');
			$dptmnts=$this->Department->find('list',array('fields'=>array('code','name')));
			$progs=$this->Programme->find('list',array('fields'=>array('code','name')));
			$this->set(compact('dptmnts','progs'));
	 
 }
 
 	//Download tender responses
	public function download_files($id,$x) {
	// $x is email addres
	//$id is the ID Number
				// Get real path for our folder
				$rootPath = realpath('folder-to-zip');
				$rootPath = APP . 'uploads\\'.$x."\\".$id;
				// Initialize archive object
				$this->Zip = new ZipArchive();
				$this->Zip->open($id.".zip", ZipArchive::CREATE | ZipArchive::OVERWRITE);
				// Create recursive directory iterator
				/** @var SplFileInfo[] $files */
				$files = new RecursiveIteratorIterator(
					new RecursiveDirectoryIterator($rootPath),
					RecursiveIteratorIterator::LEAVES_ONLY
				);

				
				foreach ($files as $name => $file)
				{
					// Skip directories (they would be added automatically)
					if (!$file->isDir())
					{
						// Get real and relative path for current file
						$filePath = $file->getRealPath();
					
						$relativePath = substr($filePath, strlen($rootPath) + 1);
						// Add current file to archive
						$this->Zip->addFile($filePath, $relativePath);
					}
				}
				// Zip archive will be created only after closing object
			$this->Zip->close();
						
		//----------//
		
		
    $this->viewClass = 'Media';
    $path  = APP . 'webroot\\';
	$rootPath = realpath($path);
	//debug($path);die();
    // in this example $path should hold the filename but a trailing slash
    $params = array(
		'id' => "\\".$id.".zip",
       // 'name' => $id.".zip",
        'download' => true,
        'extension' => 'zip',
        'path' =>$rootPath
    );
    $this->set($params);
	}
	
	
 
 
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
