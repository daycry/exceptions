<?php

declare(strict_types=1);

/**
 * This file is part of CodeIgniter Shield.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

 namespace Daycry\Exceptions\Exceptions;

use Daycry\Exceptions\Interfaces\BaseExceptionInterface;

class LogicException extends \LogicException implements BaseExceptionInterface
{
}