# Container Interop Router for Bernard PHP

* Bernard -> https://github.com/bernardphp/bernard
* Container Interop -> https://github.com/container-interop/container-interop

## Installation

```shell
composer require trash-panda/bernard-container-interop-router
```

## Usage

```php
use TrashPanda\BernardContainerInteropRouter\ContainerInteropAwareRouter;
use Bernard\Consumer;

$router = new ContainerInteropAwareRouter($yourContainer);
$consumer = new Consumer($router, $dispatcher);
```