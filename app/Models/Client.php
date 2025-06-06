<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * App\Models\Client
 *
 * @property int $id
 * @property int $user_id
 * @property int $country_id
 * @property int $state_id
 * @property int $city_id
 * @property string $postal_code
 *  @property string $country
 * @property string|null $website
 * @property string $address
 * @property string|null $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereWebsite($value)
 *
 * @mixin \Eloquent
 */
class Client extends Model  implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    use \App\Traits\HasClientScoping;

    protected $table = 'clients';

    const ACCOUNT = 'profile';

    public $fillable = [
        'first_name',
        'last_name',
        'user_id',
        'website',
        'company',
        'postal_code',
        'address',
        'note',
        'country_id',
        'state_id',
        'city_id',
        'email',
        'client_id'
    ];

    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'website' => 'string', 
        'company' =>  'string',
        'postal_code' => 'string',
        'address' => 'string',
        'note' => 'string',
        'country_id' => 'integer',
        'state_id' => 'integer',
        'city_id' => 'integer',
        'user_id' => 'integer',
        'client_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'company' => 'required',
        'email' => 'required|email:filter|unique:clients,email',
        // 'password' => 'required|same:password_confirmation|min:6',
        'postal_code' => 'string',
        'address' => 'nullable||string',
        'website' => 'nullable|url',
    ];

     // If you want to include the accessor in array or JSON results
     protected $appends = ['full_name'];

     // Accessor for full_name
     public function getFullNameAttribute()
     {
         return "{$this->first_name} {$this->last_name}";
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

    public function client_contacts()
    {
        return $this->hasMany(ClientContact::class);
    }

  
}
