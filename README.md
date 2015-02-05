# composer-demo-package-composer-json


## How load the library

    {
        "repositories": [
            {
                "type": "package",
                "package": {
                    "name": "demo/composer",
                    "version": "dev-master",
                    "source": {
                        "url": "https://github.com/juanber84/composer-demo-package-composer-json.git",
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

## Usage
