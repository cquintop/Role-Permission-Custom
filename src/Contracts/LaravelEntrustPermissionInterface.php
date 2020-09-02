<?php

/**
 * This file is part of Laravel Entrust,
 * Handle Role-based Permissions for Laravel.
 *
 * @license     MIT
 * @package     Jeankex\LaravelEntrust
 * @category    Contracts
 * @author      Jeankex
 */

namespace Jeankex\LaravelEntrust\Contracts;

interface LaravelEntrustPermissionInterface
{
    /**
     * Many-to-Many relations with role model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles();
}
