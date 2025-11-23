<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;
    
    protected $table = 'products';

    protected $fillable = [
        
        'code',
        'name',
        'description',
        'image',
        'purchase_price',
        'sale_price',
        'minimum_stock',
        'maximum_stock',
        'unit_of_measurement',
        'status',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }

    public function inventoryMovements()
    {
        return $this->hasMany(InventoryMovement::class);
    }

    public function purchaseDetails()
{
    return $this->hasMany(PurchaseDetail::class);
}



}
