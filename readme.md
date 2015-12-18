Church Metrics PHP API
=================================================

License: GNU

Contents
--------
1. About
2. Installation via Composer
3. Usage Example

1. About
--------
Church Metrics (originally) did not have a publicly available PHP API, though they did have an a public API... so I chose to remedy that situation to make it easier to implement Church Metrics API via PHP.

2. Installation via Composer
--------
```json
{
	"require": {
		"divinityfound/churchmetricsapiphp": "dev-master"
	},
	"minimum-stability": "dev"
}
```
Then install with Composer

```bash
$ composer install
```

3. Usage Examples
--------

```php
// Load Rest Client
require_once(__DIR__ . '/../vendor/autoload.php');
use \Divinityfound\ChurchMetricsApiPhp\Rest;

// Define API Credentials
define('CHURCH_METRICS_EMAIL', 'XXXXXX@XXXXXXXXX.com');
define('CHURCH_METRICS_AUTH' , 'XXXXXXXXXXXXXXXXXXXX');

//Implement Church Metrics Client
$CM_Client = new Rest(CHURCH_METRICS_EMAIL, CHURCH_METRICS_AUTH);

// Campuses
$params = [];
$CM_Client->campuses($params);

// Categories
$params = [];
$CM_Client->categories($params);

// Churches
$params = [];
$CM_Client->churches($params);

// Events
$params = [];
$CM_Client->events($params);

// Groups
$params = [];
$CM_Client->groups($params);

// Organizations
$params = [];
$CM_Client->organizations($params);

// Projections
$params = [];
$CM_Client->projections($params);

// Records
$params = [];
$CM_Client->records($params);

// Regions
$params = [];
$CM_Client->regions($params);

// Service Times
$params = [];
$CM_Client->service_times($params);

// Users
$params = [];
$CM_Client->users($params);


```