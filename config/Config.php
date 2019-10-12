<?php

class Config{
	private $config;

	public function ListConfig() {
		$config = array();

		$config['base_url'] = "http://localhost/test_flip/";
		$config['base_flip_url'] = "https://nextar.flip.id";
		$config['flip_key'] = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";

		return $config;
	}
	
}

?>