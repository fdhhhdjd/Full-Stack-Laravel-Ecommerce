<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = "products";

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'product_id');
    }
    public function subCategory()
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }
    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class, 'product_id');
    }
}
