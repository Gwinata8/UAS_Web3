<?php

namespace App\Controllers;
use App\Models\UserModel;
class User extends BaseController{
	
	public function index(){
	
	$session = \Config\Services::session();
	
	if($this->request->getMethod()==='post'){
		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');
	
		$model =  new \App\Models\UserModel();
		$result = $model->select(array('username', 'nama', 'password', 'status'))
						->where('username', $username)
						->where('password', $password)
						->find();
		//var_dump($result);die();
		if($result)
		{
			
			$session->set(array(
								'username'=> $result[0]['username'],
								'nama'=> $result[0]['nama'],
								'status'=> $result[0]['status'],
								'isLogin'=> true
								));
								
			$status = 	$session->get('status');
			if($status=='Enable'||$status==''){
				if($username=='admin' && $password=='admin12'){
					return redirect()->to(base_url('Admin/index'));
				}else{
					return redirect()->to(base_url('Home/index'));
				}
			}else{
				session()->setFlashData('errors', 'Akun nya di blok gan! Mohon hubungi Admin: 0800xxxx');
			}
		}else{
			session()->setFlashData('errors', 'Username atau password salah! Mohon periksa kembali.');
		}
	}
		echo view('header_view');
		echo view('login_view'); 
	}
	
	public function logout(){
		$session = \Config\Services::session();
		$session->destroy();
		return redirect()->to('../');
	}
	
}
?>

