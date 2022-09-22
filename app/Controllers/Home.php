<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function __construct(){
			helper(['form','url']);
			$this->form_validation = \Config\Services::validation();
		}
	
	public function index()
	{
		$session = \Config\Services::session();
		//var_dump($session->get('nama'));die();
		
		echo view('header_view');
		echo view('navbar_view');
		echo view('home_view');
		echo view('footer_view');
	}

	public function rekom(){
		$session = \Config\Services::session();
		echo view('header_view');
		echo view('navbar_view');
		echo view('rekomendasi_view');
		echo view('footer_view');
	}
	
	public function galeri(){
		$session = \Config\Services::session();
		echo view('header_view');
		echo view('navbar_view');
		echo view('galeri');
		echo view('footer_view');
	}
	
	public function spek(){
		$session = \Config\Services::session();
		echo view('header_view');
		echo view('navbar_view');
		echo view('spek');
		echo view('footer_view');
	}
	
	
	public function profile(){
			$session = \Config\Services::session();
	
		
			session()->setFlashData('errors', '');
			session()->setFlashData('success', '');
			$username = $_SESSION['username'];
			
			
			$model =  new \App\Models\UserModel();
			$result = $model->find($username);
                session()->setFlashdata('inputs', $result);
			if($this->request->getMethod()==='post'){
				
				$dataAccount = [
					'nama' => strip_tags($this->request->getPost('nama')),
					'email' => strip_tags($this->request->getPost('email'))
				];
				
				
			if($this->form_validation->run($dataAccount, 'profile') == FALSE){
				session()->setFlashdata('errors', $this->form_validation->getErrors());
			} else {
				$model ->update($username, $dataAccount);
				session()-> set("nama", $dataAccount['nama']);
				session()->setFlashdata('success', 'Edit berhasil.');								
			}		
		}		
		echo view('header_view');
		echo view('navbar_view');
		echo view('ubah_profile');
		echo view('footer_view');
	}
	public function password(){
		$session = \Config\Services::session();
		
		session()->setFlashData('errors', '');
			session()->setFlashData('success', '');
			$username = $_SESSION['username'];
			
			
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
		echo view('navbar_view');
		echo view('ubah_password');
		echo view('footer_view');
		
	}
}
?>