<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tenant extends Model
{
    use HasFactory;


    
    protected $table = 'tenants';


    public function getFullAddressAttribute()
    {
        return $this->address . ', ' . $this->city->name . ', ' . $this->state->name . ', ' . $this->country->name;
    }

    public function getFullAddressWithPostalCodeAttribute()
    {
        return $this->address . ', ' . $this->postal_code . ', ' . $this->city->name . ', ' . $this->state->name . ', ' . $this->country->name;
    }




}
