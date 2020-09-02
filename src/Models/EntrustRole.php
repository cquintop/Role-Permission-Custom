<?php

/**
 * This file is part of Laravel Entrust,
 * Handle Role-based Permissions for Laravel.
 *
 * @license     MIT
 * @package     Jeankex\LaravelEntrust
 * @category    Models
 * @author      Jeankex
 */

namespace Jeankex\LaravelEntrust\Models;

use Illuminate\Support\Facades\Config;
use Illuminate\Database\Eloquent\Model;
use Jeankex\LaravelEntrust\Traits\LaravelEntrustRoleTrait;
use Jeankex\LaravelEntrust\Contracts\LaravelEntrustRoleInterface;

class EntrustRole extends Model
{
    use LaravelEntrustRoleTrait;
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * Creates a new instance of the model.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('entrust.tables.roles');
    }
}