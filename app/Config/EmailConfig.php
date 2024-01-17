<?php
namespace Config;

class EmailConfig {
	
	public $provider = 'Standard';
	// public $provider = 'Google';
	// public $provider = 'AmazonSES';

	public $client = [	'standard' => [
										'host' => 'mail.symptomed.id'
										, 'username' => 'support@symptomed.id'
										, 'password' => 'Password'
									]
						,'google' => ['client_id' => ''
										, 'client_secret' => ''
										, 'refresh_token' => ''
									]
						, 'ses' => ['username' => ''
										, 'password' => ''
									]
					];
	
	// Disesuaikan dengan konfigurasi username
	public $from = 'support@symptomed.id';
	public $fromTitle = 'symptomed.id';
	public $emailSupport = 'support@symptomed.id';
}