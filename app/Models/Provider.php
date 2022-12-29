<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'ruc_number',
        'address',
        'phone',
    ];

    /**
     * Provider has many Products.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = provider_id, localKey = id)
        return $this->hasMany(Product::class);
    }

}
