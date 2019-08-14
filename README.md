Prerequisites
=============

This version of the bundle requires Symfony 4.3 or higher.

Installation
============
 
### Step 1 : Download GoulmimaBlogBundle using composer
 
Open a command console, enter your project directory and execute:
 
```console
$ composer require goulmima/blog-bundle
```

### Step 2 : Enable the Bundle
 
Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project (if you are using symfony flex, this is done automatically):

```php
// config/bundles.php

return [
    // ...
    Goulmima\BlogBundle\GoulmimaBlogBundle::class => ['all' => true],
];
```

### step 3 : import routes

```php
// config/routes.yaml

goulmima_blog:
    resource: '@GoulmimaBlogBundle/Controller/'
    type: annotation
    prefix: /some_prefix 
```