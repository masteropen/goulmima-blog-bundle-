Prerequisites
=============

This version of the bundle requires Symfony 4.3+.

Installation
============
 
### Step 1 : Download MidoBlogBundle using composer
 
Open a command console, enter your project directory and execute:
 
```console
$ composer require mido/blog-bundle
```

### Step 2 : Enable the Bundle
 
Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project (if you are using symfony flex, this is done automatically):

```php
// config/bundles.php

return [
    // ...
    Mido\BlogBundle\MidoBlogBundle::class => ['all' => true],
];
```
For applications don't using symfony flex, you need to register the bundle:
```php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Mido\BlogBundle\MidoBlogBundle(),
    );
}
```
