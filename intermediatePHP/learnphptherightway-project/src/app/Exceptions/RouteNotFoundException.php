<?php

declare(strict_types=1);

namespace App\Exceptions;

class RouteNotFoundException extends \Exception // This is custom exception which is extended from global Exception class.
{
    protected $message = '404 Not Found';
}
