<?php

namespace App;

use App\Tenant\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use TenantModels;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body', 'user_id'
    ];
}
