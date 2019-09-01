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

### Step 1 : Configure the bundle

```yaml
# config/packages/goulmima_blog.yaml

goulmima_blog:
    post:
        class: 'App\Entity\MyBlogPost'

```

### Step 2 : Implementation

Use normal Symfony `Dependency Injection` to access the BlogBundle Aggregator services.

Example from a controller :

```php
use App\Entity\Post;
use Goulmima\BlogBundle\Utils\Aggregation\AggregatorInterface;

/**
 * @param AggregatorInterface $aggregator
 * @return Response
 *
 * @Route("/default", name="default")
 */
public function index(AggregatorInterface $aggregator)
{
    $result = $aggregator->getSum(Post::class);
    // do something with returned result.
}
```
