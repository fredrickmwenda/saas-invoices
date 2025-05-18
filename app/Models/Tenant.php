<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Tenant extends Model
{
    use HasFactory;
    use InteractsWithMedia;

    
    protected $table = 'tenants';

    const ACCOUNT = 'profile';

    public $fillable = [
        'user_id',
        'country_id',
        'state_id',
        'city_id',
        'website',
        'company',
        'postal_code',
        'address',
        'note',

    ];

    protected $casts = [
        'website' => 'string',
        'company' =>  'string',
        'postal_code' => 'string',
        'address' => 'string',
        'note' => 'string',
        'country_id' => 'integer',
        'state_id' => 'integer',
        'city_id' => 'integer',
       'user_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'company' => 'required',
       // 'email' => 'required|email:filter|unique:clients,email',
        //'password' => 'required|same:password_confirmation|min:6',
        'postal_code' => 'string',
        'address' => 'nullable||string',
        'website' => 'nullable|url',
    ];

     // If you want to include the accessor in array or JSON results
     //protected $appends = ['full_name'];

     // Accessor for full_name
     public function getFullNameAttribute()
     {
         return "{$this->user->first_name} {$this->user->last_name}";
     }

    public function getAccountImageAttribute(): string
    {
        /** @var Media $media */
        $media = $this->getMedia(self::ACCOUNT)->first();
        if (! empty($media)) {
            return $media->getFullUrl();
        }

        return asset('assets/images/avatar.png');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

      //tenant has many clients
    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    //which 

    public function getFullAddressAttribute()
    {
        return $this->address . ', ' . $this->city->name . ', ' . $this->state->name . ', ' . $this->country->name;
    }

    public function getFullAddressWithPostalCodeAttribute()
    {
        return $this->address . ', ' . $this->postal_code . ', ' . $this->city->name . ', ' . $this->state->name . ', ' . $this->country->name;
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    public function subscriptionPlan()
    {
        return $this->hasOneThrough(SubscriptionPlan::class, Subscription::class);
    }

    // active subscription
    public function activeSubscription()
    {
        return $this->hasOne(Subscription::class)->where('status', 'active');
    }
    // active subscription plan
    public function activeSubscriptionPlan()
    {
        return $this->hasOneThrough(SubscriptionPlan::class, Subscription::class)->where('status', 'active');
    }


}
