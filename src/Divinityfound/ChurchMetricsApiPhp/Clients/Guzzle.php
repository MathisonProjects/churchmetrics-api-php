<?php namespace Divinityfound\ChurchMetricsApiPhp\Clients;
	use Guzzle\Http\Client;

	class Guzzle implements ClientInterface {
		protected $client;
		private $url, $user, $auth;

		public function __construct($user,$auth) {
			$this->client = new Client();
			$this->setUser($user)->setAuth($auth);
		}

		public function __destruct() {}

		public function setUser($user) {
			$this->user = $user;
			return $this;
		}

		public function setAuth($auth) {
			$this->auth = $auth;
			return $this;
		}

		public function setUrl($value) {
			$this->url = 'https://churchmetrics.com/api/v1/'.$value.'.json';
			return $this;
		}

		public function fire($params = array()) {
			$request = $this->client->get($this->url);
			$request->setHeader('Content-Type', 'application/json');
			$request->setHeader('X-Auth-User', $this->user);
			$request->setHeader('X-Auth-Key' , $this->auth);
			if (!empty($params)) {
				$query = $request->getQuery();
			    foreach($params as $key=>$value)
			    {
			      $query->add($key, $value);
			    }
			}
			return $request->send()->json();
		}
	}
?>