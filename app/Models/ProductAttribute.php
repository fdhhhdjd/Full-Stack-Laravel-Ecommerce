<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $table = "product_attributes";

    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class);
    }
}
