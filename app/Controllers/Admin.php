<?php
	namespace App\Controllers;
	
	use App\Models\UserModel;
	use App\Controllers\BaseController;
	
	class Admin extends BaseController{
		
		public function __construct(){
			helper(['form','url']);
			$this->form_validation = \Config\Services::validation();
		}
		
		public function index(){
			$session = \Config\Services::session();
			echo view('header_view');
			echo view('navbar_admin');
			echo view('admin_home');
		}
		
		public function user_list(){
			$data['title']='List User';
			$model = new UserModel();
			$data['user'] = $model->findAll();
			$session = \Config\Services::session();
			
			
			echo view('header_view', $data);
			echo view('navbar_admin');
			echo view('user_view', $data);
		}
		
		public function status($username, $status){
			
			$model = new UserModel();
			$model -> update ($username, ['status'=>$status]);
			
			return redirect()->to(base_url('admin/user_list'));
		}
		
		public function password($username){
		$session = \Config\Services::session();
		
		session()->setFlashData('errors', '');
			session()->setFlashData('success', '');
			
			$model =  new \App\Models\UserModel();
			$result = $model->find($username);
                session()->setFlashdata('inputs', $result);
			if($this->request->getMethod()==='post'){
				
				$dataAccount = [
					'password' => strip_tags($this->request->getPost('password')),
					'password2' => strip_tags($this->request->getPost('password2'))
				];
				
				
			if($this->form_validation->run($dataAccount, 'pswd') == FALSE){
				session()->setFlashdata('errors', $this->form_validation->getErrors());
			} else {
				unset($dataAccount['password2']);
				$model ->update($username, $dataAccount);
				session()->setFlashdata('success', 'Edit berhasil.');								
			}	
		}	
		echo view('header_view');
		echo view('navbar_admin');
		echo view('ubah_password_admin');
		
	}
	}
	
?>