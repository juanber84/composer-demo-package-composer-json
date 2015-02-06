# Composer demo package without composer.json


## How to load the library

```
{
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "demo/composer",
                "version": "dev-master",
                "source": {
                    "url": "https://github.com/juanber84/composer-demo-package-without-composer-json.git",
                    "type": "git",
                    "reference": "origin/master"
                },
            "autoload": {
                "classmap": ["/"]
                }
            }
        }
    ],
    "require": {
        "demo/composer": "dev-master"
    }
}
```

## Usage

```php
<?php

require 'vendor/autoload.php';

use Demo\Hello;

$object = new Hello();
$object->setName('Juan');
$object->greet();
```
