Prerequisites
=============

This version of the bundle requires Symfony 4.3+.

Installation
============
 
### Step 1 : Download AcmeBlogBundle using composer
 
Open a command console, enter your project directory and execute:
 
```console
$ composer require acme/blog-bundle
```

### Step 2 : Enable the Bundle
 
Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project (if you are using symfony flex, this is done automatically):

```php
// config/bundles.php

return [
    // ...
    Acme\BlogBundle\AcmeBlogBundle::class => ['all' => true],
];
```
For applications don't using symfony flex, you need to register the bundle:
```php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Acme\BlogBundle\AcmeBlogBundle(),
    );
}
```
