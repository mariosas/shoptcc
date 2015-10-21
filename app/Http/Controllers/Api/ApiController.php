<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

abstract class ApiController extends Controller {    
 	
	/**
	 * 
	 */
	public function headerApi(){
		header ( 'Access-Control-Allow-Origin: *' );
		header ( 'Access-Control-Allow-Methods: GET, POST, OPTIONS' );
		header ( 'Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With' );
		header ( 'Access-Control-Allow-Credentials: true' );
	}
}
