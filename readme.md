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
		"spinegar/sugar7wrapper": "dev-master"
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

```