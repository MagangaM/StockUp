<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BranchBatchInventory extends Model
{
    use HasFactory;

    protected $table = 'branch_batch_inventories';

    protected $fillable = [
        'batch_id',
        'branch_id',
        'quantity_at_branch',
    ];

    /**
     * Relationships
     */

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
