<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 04/06/2019
 * Time: 23:51
 */
declare(strict_types=1);
namespace App\Tenant;


use App\Company;

class TenantManager 
{

    private $tenant;

    /**
     * @return Company
     */
    public function getTenant(): ?Company
    {
        return $this->tenant;
    }

    /**
     * @param Company $tenant
     */
    public function setTenant($tenant): void
    {
        $this->tenant = $tenant;
    }


}
