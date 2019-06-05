<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 04/06/2019
 * Time: 23:56
 */

namespace App\Tenant;


use Illuminate\Support\Facades\Facade;

class TenantFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return TenantManager::class;
    }
}
