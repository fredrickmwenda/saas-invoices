<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait HasClientScoping
{
    /**
     * Boot the trait.
     */
    protected static function bootHasClientScoping()
    {
        static::creating(function ($model) {
            if (!$model->client_id && tenant()) {
                $model->client_id = tenant('id');
            }
        });

        static::addGlobalScope('client', function (Builder $builder) {
            if (tenant()) {
                $builder->where('client_id', tenant('id'));
            }
        });
    }

    /**
     * Get the client that owns the model.
     */
    public function client()
    {
        return $this->belongsTo(\App\Models\Tenant::class, 'client_id');
    }
}
