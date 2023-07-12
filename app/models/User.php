<?php 


/**
 * User class - No time
 */
class User
{
	
	use Model;

	protected $table = 'users';
	protected $allowedColumns = [

		'email',
		'password',
	];

}