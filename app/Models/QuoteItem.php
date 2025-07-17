<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\QuoteItem
 *
 * @property-read \App\Models\Product $product
 * @property-read int|null $quote_item_tax_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QuoteItem query()
 *
 * @mixin \Eloquent
 */
class QuoteItem extends Model
{
    use HasFactory;

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'service_id' => 'required',
        'quantity' => 'required|integer',
        'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $messages = [
        'service_id.required' => 'The product field is required',
    ];

    protected $table = 'quote_items';

    public $fillable = [
        'quote_id',
        'service_id',
        'service_name',
        'quantity',
        'price',
        'total',
    ];

    protected $casts = [
        'quote_id' => 'integer',
        'service_id' => 'integer',
        'service_name' => 'string',
        'quantity' => 'integer',
        'price' => 'double',
        'total' => 'double',
    ];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
