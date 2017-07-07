<?php
/**
 * Created by PhpStorm.
 * User: xyrintech
 * Date: 31/10/15
 * Time: 22:18
 */

namespace XyrinTech\Tenantable\Events;


use XyrinTech\Tenantable\Resolver;

class TenantNotResolvedEvent
{
    public $resolver;

    public function __construct(Resolver $resolver)
    {
        $this->resolver = $resolver;
    }
}