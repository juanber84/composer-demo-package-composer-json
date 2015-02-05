# composer-demo-package-composer-json


## How load the library

``
{
    "repositories": [
        {
            "type": "package",
            "package": {
                "name": "demo/composer",
                "version": "dev-master",
                "source": {
                    "url": "https://github.com/ElevenPaths/latch-sdk-php.git",
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
}`
```

## Usage

```php
<?php

require 'vendor/autoload.php';

use Demo\Hello;

$object = new Hello();
$object->setName('Juan');
$object->greet();
``