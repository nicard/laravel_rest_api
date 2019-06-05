<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 04/06/2019
 * Time: 23:32
 */

namespace App\Tenant;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class TenantScope implements Scope
{

    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $builder
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function apply(Builder $builder, Model $model)
    {
        // TODO: Implement apply() method.
        //$company_id = \Auth::user()->company_id;
        $company = \Tenant::getTenant();
        if ($company)
            $builder->where('company_id', $company->id);
    }
}
