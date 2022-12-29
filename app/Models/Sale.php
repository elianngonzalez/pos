<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
            'user_id',
            'client_id',
            'sale_date',
            'tax',
            'total',
            'status',
    ];  
 
    /**
     * Sale belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        // belongsTo(RelatedModel, foreignKey = user_id, keyOnRelatedModel = id)
        return $this->belongsTo(User::class);
    }


    /**
     * Sale belongs to Client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        // belongsTo(RelatedModel, foreignKey = client_id, keyOnRelatedModel = id)
        return $this->belongsTo(Client::class);
    }

    /**
     * Sale has many SaleDetails.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function saleDetails()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = sale_id, localKey = id)
        return $this->hasMany(SaleDetail::class);
    }


}
