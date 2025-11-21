<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $timestamps = true;
    protected $fillable = [
        'date',
        'amount',
        'is_paid'
    ];
    protected $casts = [
        'date' => 'datetime',
        'amount' => 'float',
        'is_paid' => 'boolean',
    ];
    public function cashier()
    {
        return $this->belongsTo(Cashier::class);
    }
    public function patient() {
        return $this->belongsTo(Patient::class);
    }
}
