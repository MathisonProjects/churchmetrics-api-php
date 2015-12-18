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

To view the original API, visit here:
https://github.com/lifechurch/churchmetrics-api

Currently this API only "Gets" data from Church Metrics API. It does not modify any data (as of yet);

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
$params  = [];
$results = $CM_Client->campuses($params);

// Categories
$params  = [];
$results = $CM_Client->categories($params);

// Deprecated
// Churches
$params  = ['url' => 'me'];
$params  = ['url' => 'weekly_totals',
			'category_id'    => '1',  // Required
			'week_reference' => '1']; // Optional
$results = $CM_Client->churches($params);

// Events
$params  = [];
$results = $CM_Client->events($params);

// Groups
$params  = ['url' 			  => 'records',
			'church_id'       => '1',     // Optional
			'tag_id'          => '1',     // Optional
			'start_time'      => '1',     // Optional
			'end_time'        => '1',     // Optional
			'start_week'      => '1',     // Optional
			'end_week'        => '1',     // Optional
			'category_id'     => '1',     // Optional
			'event_id'        => '1',     // Optional
			'campus_id'       => '1',     // Optional
			'week_reference'  => '5275']; // Optional
$params  = ['url' 			  => 'churches',
			'church_id'       => '1',     // Optional
			'tag_id'          => '1',     // Optional
			'pagination'      => true,
			'page'            => '1'];
$params  = ['url'			  => 'tags',
			'church_id'       => '1',     // Optional
			'tag_id'          => '1'];    // Optional
$results = $CM_Client->groups($params);

// Organizations
$params  = [];
$results = $CM_Client->organizations($params);

// Projections
$params  = ['pagination' => true,
			'page'       => '1',
			'category_id'=> '1',
			'campus_id'  => '1',
			'start_week' => '1',
			'end_week'   => '1'];
$params  = ['url'        => '1'];
$results = $CM_Client->projections($params);

// Records
$params  = [];
$results = $CM_Client->records($params);

// Regions
$params  = [];
$params  = ['url' => '1'];
$results = $CM_Client->regions($params);

// Service Times
$params  = ['pagination' => true,
			'page'       => '1',
			'event_id'   => '1']; // Optional
$params  = ['url'        => '1'];
$results = $CM_Client->service_times($params);

// Users
$params  = [];
$params  = ['url' => '1'];
$results = $CM_Client->users($params);

```