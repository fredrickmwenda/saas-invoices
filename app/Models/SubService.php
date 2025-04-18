<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubService extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'sub_services';


    public function service(){
        return $this->belongsTo(Service::class, 'id', 'service_id');
    }
}
