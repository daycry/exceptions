# exceptions

Exceptions for Codeigniter 4

## Installation via composer

Use the package with composer install

	> composer require daycry/exceptions

```php
<?php

declare(strict_types=1);

namespace App\Exceptions;

use Daycry\Exceptions\Exceptions\RuntimeException;

class ExampleException extends RuntimeException
{

}
```



