<?php

namespace App\Controllers;
class Registrasi extends BaseController{
		
		public function __construct(){
			helper(['form','url']);
			$this->form_validation = \Config\Services::validation();
		}
		
		public function newAccount(){
			session()->setFlashData('errors', '');
			session()->setFlashData('success', '');
	
			if($this->request->getMethod()==='post'){
				
				$db = \Config\Database::connect();
                $builder = $db->table('user');
                    
					
				session()->setFlashdata('inputs', $this->request->getPost());
								
				$dataAccount = [
					'username' => strip_tags($this->request->getPost('username')),
					'nama' => strip_tags($this->request->getPost('nama')),
					'password' => strip_tags($this->request->getPost('password')),
					'password2' => strip_tags($this->request->getPost('password2')),
					'email' => strip_tags($this->request->getPost('email'))
				];
				
				
			if($this->form_validation->run($dataAccount, 'register') == FALSE){
				session()->setFlashdata('errors', $this->form_validation->getErrors());
			} else {
				unset($dataAccount['password2']);
				$builder ->insert($dataAccount);
				
				session()->setFlashdata('success', 'Registrasi berhasil.');		
			}		
		}		
		$data['title']='REGISTRASI';
		echo view('header_view');
		echo view('registrasi_view', $data);
	}
}
?>

