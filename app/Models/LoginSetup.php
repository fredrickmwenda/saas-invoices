<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Concerns\HasUuid;

class LoginSetup extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = ['key', 'value'];
}
