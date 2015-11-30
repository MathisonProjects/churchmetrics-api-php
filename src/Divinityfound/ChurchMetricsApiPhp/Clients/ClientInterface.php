<?php namespace Divinityfound\ChurchMetricsApiPhp\Clients;

	interface ClientInterface {
		public function __construct($user,$auth);
		public function __destruct();
		public function setUser($user);
		public function setAuth($auth);
		public function setUrl($value);
		public function fire();
	}

?>