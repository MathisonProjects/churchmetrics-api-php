<?php namespace Divinityfound\ChurchMetricsApiPhp;
	use Divinityfound\ChurchMetricsApiPhp\Clients\Guzzle;

	class Rest {
		protected $client;

		public function __construct($user,$auth)
		{
			$this->client = new Guzzle($user, $auth);
		}

		public function campuses($params = array()) {
			return $this->setUrl('campuses',$params);
		}

		public function categories($params = array()) {
			return $this->setUrl('categories',$params);
		}

		public function churches($params = array()) {
			return $this->setUrl('churches',$params);
		}

		public function events($params = array()) {
			return $this->setUrl('events',$params);
		}

		public function groups($params = array()) {
			return $this->setUrl('groups',$params);
		}

		public function organizations($params = array()) {
			return $this->setUrl('organizations',$params);
		}

		public function projections($params = array()) {
			return $this->setUrl('projections',$params);
		}

		public function records($params = array()) {
			return $this->setUrl('records',$params);
		}

		public function regions($params = array()) {
			return $this->setUrl('regions',$params);
		}

		public function service_times($params = array()) {
			return $this->setUrl('service_times',$params);
		}

		public function users($params = array()) {
			return $this->setUrl('users',$params);
		}

		private function fire($url, $params = array()) {
			$this->client->setUrl($url);
			return $this->client->fire($params);
		}

		private function setUrl($url, &$params) {
			if (isset($params['url'])) {
				$url = $url.'/'.$params['url'];
				unset($params['url']);
			}
			return $this->fire($url, $params);
		}
	}
?>