<?php

namespace App\Models;

use App\Models\Traits\BelongsToTenantTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\InteractsWithMedia;

class Service extends Model
{
    use HasFactory, Notifiable, InteractsWithMedia, BelongsToTenantTrait;

     protected $fillable = ['name', 'price', 'description'];
    
      protected $casts = [
        'name' => 'string',
        'price' => 'double',
        'description' => 'string',
    ];

    const Image = 'service';

    protected $appends = ['service_image'];

    public static $rules = [
        'name' => 'required',
        'price' => 'required|numeric',
    ];



    public function getServiceImageAttribute(): string
    {
        /** @var Media $media */
        $media = $this->getMedia(self::Image)->first();
        if (! empty($media)) {
            return $media->getFullUrl();
        }

        return asset('images/default-product.jpg');
    }
}
