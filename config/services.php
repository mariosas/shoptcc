<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => '',
        'secret' => '',
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => '',
        'secret' => '',
    ],
	
	'google' => [
			'client_id' => '909142996189-9t59jcj5sdi5midapih3h4lsrigs7f34.apps.googleusercontent.com',
			'client_secret' => 't-HlgNTp03uQcj9ZxsR5Y4Gj',
			'redirect' => 'https://shoptcc.herokuapp.com/callback',
	],
		
	'github' => [
			'client_id' => '9228161563cb6ab7e6e4',
			'client_secret' => 'cd1bbce1ad9457627dce2d3f8f7295ea9a8c28a4',
			'redirect' => 'https://shoptcc.herokuapp.com/callback',
	],
	

];
