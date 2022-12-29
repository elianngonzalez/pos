<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
            'code',
            'name',
            'stock',
            'image',
            'sell_price',
            'status',
            'category_id',
            'provider_id',
    ];

    /**
     * Product belongs to Cate.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        // belongsTo(RelatedModel, foreignKey = cate_id, keyOnRelatedModel = id)
        return $this->belongsTo(Category::class);
    }

    /**
     * Product belongs to Provi.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provider()
    {
        // belongsTo(RelatedModel, foreignKey = provi_id, keyOnRelatedModel = id)
        return $this->belongsTo(Provider::class);
    }

}
