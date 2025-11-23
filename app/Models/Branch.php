<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    /** @use HasFactory<\Database\Factories\BranchFactory> */
    use HasFactory;
    
    protected $table = 'branches';

    protected $fillable = [
        'name',
        'address',
        'phonenumber',
        'active',
    ];

    public function branchbatchinventories()
    {
        return $this->hasMany(BranchBatchInventory::class);
    }

    public function inventoryMovements()
{
    return $this->hasMany(InventoryMovement::class);
}

}
