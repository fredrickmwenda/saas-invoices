<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class SubscriptionPlan extends Model
{
    use HasFactory;

    protected $keyType = 'string';
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = Str::uuid()->toString();
            }
        });
    }

    public const STATUS_ACTIVE = 'active';
    public const STATUS_INACTIVE = 'inactive';
    public const STATUS_ARCHIVED = 'archived';

    // $table->string('currency')->default('USD');
    // $table->decimal('price', 10, 2)->default(0);
    // $table->integer('duration')->default(1);
    // $table->enum('duration_unit', ['day', 'week', 'month', 'year'])->default('month');
    // $table->integer('trial_period')->default(0);
    // $table->enum('trial_period_unit', ['day', 'week', 'month', 'year'])->default('day');
    // $table->boolean('is_active')->default(true);
//  use above table data
    public $fillable = [
        'name',
        'price',
        'duration',
        'duration_unit',
        'features',
        'status',
        'description',
        'currency',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'duration' => 'integer',
        'status' => 'string',
        'description' => 'string',
        'currency' => 'string',
        'features' => 'array',
    ];

    public const VALID_STATUSES = [
        self::STATUS_ACTIVE,
        self::STATUS_INACTIVE,
        self::STATUS_ARCHIVED,
    ];

    public static $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'duration' => 'required|integer|min:1',
        'duration_unit' => 'required|in:day,week,month,year',
        'status' => 'required|in:' . 'active,inactive,archived',        
        'description' => 'nullable|string|max:1000',
        'currency' => 'required|string|max:3',
        'features' => 'required|array',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
   

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    // number of subscriptions in a plan
    public function numberOfSubscriptions()
    {
        return $this->subscriptions()->count();
    }
}
