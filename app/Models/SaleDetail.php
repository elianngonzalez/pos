<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    use HasFactory;
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
            'sale_id',
            'product_id',
            'quantity',
            'price',
            'discount',
        ];

        /**
         * SaleDetail belongs to Product.
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function product()
        {
            // belongsTo(RelatedModel, foreignKey = product_id, keyOnRelatedModel = id)
            return $this->belongsTo(Product::class);
        }
}
