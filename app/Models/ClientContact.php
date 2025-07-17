<?php

namespace App\Models;

use App\Models\Traits\BelongsToTenantTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientContact extends Model
{
    use HasFactory, BelongsToTenantTrait;

    protected $guarded = [];
    protected $table = 'client_contacts';


}
