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

By default, this command will download the latest release version of the bundle (the recommended way). 

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

```yaml
# config/routes.yaml

goulmima_blog:
    resource: '@GoulmimaBlogBundle/Controller/'
    type: annotation
    prefix: /some_prefix 
```

Usage
=====

### Step 1 : Make your posts entity

```php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Goulmima\BlogBundle\Entity\Post as GoulmimaBlogPost;

/**
 * @ORM\Entity()
 */
class MyBlogPost extends GoulmimaBlogPost
{
    // you can add your own attributes ...
}
```

### Step 2 : Update the database

``` console
$ php bin/console make:migration
```
``` console
$ php bin/console doctrine:migrations:migrate
```

### Step 3 : Configure the bundle

```yaml
# config/packages/goulmima_blog.yaml

goulmima_blog:
    post:
        class: 'App\Entity\MyBlogPost'

```

### Step 4 : Implementation

You can access to `GoulmimaBlogBundle` services through :

- Normal Symfony `Dependency Injection`.

Example from a controller :

```php
namespace App\Controller;

use Goulmima\BlogBundle\Utils\Aggregation\AggregatorInterface;

/**
 * @param AggregatorInterface $aggregator
 * @return Response
 *
 * @Route("/default", name="default")
 */
public function index(AggregatorInterface $aggregator)
{
    // retrieve sum of registered posts based on given `goulmima_blog.post.class`
    $result = $aggregator->getSum();
}
```
- Using directly the `DefaultController` of the bundle.

Doing like so, you can access to sum of registered posts, by going to `/some_prefix` or whatever the entry point you give to the bundle's routes
without any additional configuration.
