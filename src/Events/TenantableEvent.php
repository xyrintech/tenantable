<?php
/**
 * Created by PhpStorm.
 * User: xyrintech
 * Date: 31/10/15
 * Time: 22:10
 */

namespace XyrinTech\Tenantable\Events;

use Illuminate\Queue\SerializesModels;
use XyrinTech\Tenantable\Tenant;

abstract class TenantableEvent
{
    use SerializesModels;

    public $tenant;

    public function __construct(Tenant $tenant)
    {
        $this->tenant = $tenant;
    }

}