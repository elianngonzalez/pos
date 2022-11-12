<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseDetails extends Model
{
    use HasFactory;
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */ 
    protected $fillable = [
            'purchase_id',
            'product_id',
            'quantity',
            'price', 
    ];

    /**
     * PurchaseDetails belongs to Purchase.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function purchase()
    {
        // belongsTo(RelatedModel, foreignKey = purchase_id, keyOnRelatedModel = id)
        return $this->belongsTo(Purchase::class);
    }

    /**
     * PurchaseDetails belongs to Product.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        // belongsTo(RelatedModel, foreignKey = product_id, keyOnRelatedModel = id)
        return $this->belongsTo(Product::class);
    }
}
