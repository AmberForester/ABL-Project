<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnose extends Model
{
    protected $table = 'diagnoses';
    protected $timestamps = true;
    protected $fillable = [
        'description',
        'follow_up',
    ];
    protected $casts = [
        'description' => 'string',
        'follow_up' => 'string',
    ];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
