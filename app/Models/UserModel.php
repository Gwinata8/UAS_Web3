<?php 

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
	
	protected $table = "user";
	protected $primaryKey = "username";
	
	protected $returnType     = 'array';
	
	protected $allowedFields = ['username','nama','email','password', 'status'];
	
}



?>