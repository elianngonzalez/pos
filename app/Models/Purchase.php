<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
            'user_id',
            'provider_id',
            'purchase_date',
            'tax',
            'total',
            'status',
            'picture',
    ]; 

    /**
     * Purchase belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        // belongsTo(RelatedModel, foreignKey = user_id, keyOnRelatedModel = id)
        return $this->belongsTo(User::class);
    }


    /**
     * Purchase belongs to Provider.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function provider()
    {
        // belongsTo(RelatedModel, foreignKey = provider_id, keyOnRelatedModel = id)
        return $this->belongsTo(Provider::class);
    }

    /**
     * Purchase has many PurchaseDetails.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchaseDetails()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = purchase_id, localKey = id)
        return $this->hasMany(PurchaseDetails::class);
    }

}
