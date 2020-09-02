<?php

/**
 * This file is part of Laravel Entrust,
 * Handle Role-based Permissions for Laravel.
 *
 * @license     MIT
 * @package     Jeankex\LaravelEntrust
 * @category    Facades
 * @author      Jeankex
 */

namespace Jeankex\LaravelEntrust\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelEntrustFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel_entrust';
    }
}