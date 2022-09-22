<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	
	public $register = [
		'username' => 'required',
		'nama' => 'required',
		'password' => 'required|min_length[6]|matches[password2]',
		'password2' => 'required|min_length[6]',
		'email' => 'required|valid_email'
		];
	public $register_errors = [
		'username' => [
		'required' => 'Username tidak boleh kosong.'
		],
		'nama' => [
		'required' => 'Nama tidak boleh kosong.'
		],
		'password' => [
		'required' => 'Password tidak boleh kosong.',
		'min_length' => 'Password Anda harus terdiri dari minmal 6 karakter.',
		'matches' => 'Password tidak sama.'
		],
		'password2' => [
		'required' => 'Ulangi password tidak boleh kosong.',
		'min_length' => 'Ulangi password harus terdiri dari minmal 6 karakter.'
		],
		'email' => [
		'required' => 'Email tidak boleh kosong.',
		'valid_email' => 'Email salah.'
		]
		];
		
	public $profile = [
		'nama' => 'required',
		'email' => 'required|valid_email'
		];
	public $profile_errors = [
		'nama' => [
		'required' => 'Nama tidak boleh kosong.'
		],
		'email' => [
		'required' => 'Email tidak boleh kosong.',
		'valid_email' => 'Email salah.'
		]
		];
		
	public $pswd = [
		'password' => 'required|min_length[6]|matches[password2]',
		'password2' => 'required|min_length[6]'
		];
	public $pswd_errors = [
		'password' => [
		'required' => 'Password tidak boleh kosong.',
		'min_length' => 'Password Anda harus terdiri dari minmal 6 karakter.',
		'matches' => 'Password tidak sama.'
		],
		'password2' => [
		'required' => 'Ulangi password tidak boleh kosong.',
		'min_length' => 'Ulangi password harus terdiri dari minmal 6 karakter.'
		]
		];
}
