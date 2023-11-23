<?php

declare(strict_types=1);

namespace Daycry\Exceptions\Exceptions;

use Daycry\Exceptions\Interfaces\BaseExceptionInterface;

class RuntimeException extends \RuntimeException implements BaseExceptionInterface
{
}
