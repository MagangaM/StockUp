<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    /** @use HasFactory<\Database\Factories\SupplierFactory> */
    use HasFactory;
   
    protected $table = 'suppliers';

    protected $fillable = [
        'company',
        'address',
        'name',
        'phonenumber',
        'email',
    ];

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }

    public function purchases()
{
    return $this->hasMany(Purchase::class);
}


}
