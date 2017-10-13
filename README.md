# SimpleSSL
<details><summary>SimpleSSL(PHP Web tool).</summary>This is pretty simple.</details>

## Installing with Composer
```composer.json:```
```json:composer.json
{
    "repositories": [
      {
        "type": "vcs",
        "url": "https://github.com/rht0910/SimpleSSL",
        "\\url": "https://github.com/rht0910/SimpleSSL.git"
      }
    ],
    "require": {
        "rht0910/ssl": "*"
    }
}
```

```Install: ```
```sh:run.sh
sh$ composer install
```

## PHP Code Example
### Warning
 Not working in running in CLI! (Return 0)

### Code
```index.php:```
```php:index.php
<?php
require_once( "./vendor/autoload.php" );
use rht0910\ssl\SSL;

$ssl = new SSL();
$ssl->enable(); // Enable SSL(change url to https://...)
$ssl->disable(); // Disable SSL(change url to http://...)

...
```
