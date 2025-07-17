<?php
// This trait makes a model tenant-aware using Stancl\Tenancy
namespace App\Models\Traits;

use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

trait BelongsToTenantTrait
{
    use BelongsToTenant;
}
