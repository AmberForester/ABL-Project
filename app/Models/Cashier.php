<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    protected $table = 'cashiers';
    protected $timestamps = true;
    protected $fillable = [
        'name',
    ];
    protected $casts = [
        'name' => 'string',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
