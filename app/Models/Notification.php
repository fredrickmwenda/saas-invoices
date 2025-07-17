<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Notification
 *
 * @property int $id
 * @property int $type
 * @property int $user_id
 * @property string $title
 * @property string|null $text
 * @property string|null $meta
 * @property string|null $read_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereMeta($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUserId($value)
 *
 * @mixin \Eloquent
 */
class Notification extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    public $table = 'notifications';

    /**
     * @var string[]
     */
    public $fillable = [
        'type',
        'client_id',
        'title',
        'text',
        'meta',
        'read_at',
    ];

    protected $casts = [
        'type' => 'integer',
        'title' => 'string',
        'text' => 'string',
        'meta' => 'json',
        'read_at' => 'datetime',
        'client_id' => 'integer',
    ];

    const NOTIFICATION_TYPE = [
        'Subscription Payment' => 1,
        'Subscription Expiry' => 2,
        'Subscription Change' => 3,
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
