<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    /** @use HasFactory<\Database\Factories\BatchFactory> */
    use HasFactory;

    protected $table = 'batches';

    protected $fillable = [
        'product_id',
        'supplier_id',
        'batch_code',
        'entry_date',
        'expiration_date',
        'initial_quantity',
        'current_quantity',
        'purchase_price',
        'sale_price',
        'status',
    ];

    /**
     * Relationships
     */

    // Each batch belongs to one product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Each batch belongs to one supplier
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function branchbatchinventories()
    {
        return $this->hasMany(BranchBatchInventory::class);
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
