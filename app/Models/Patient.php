<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'age',
        'phone',
        'address',
    ];

    protected $casts = [
        'name' => 'string',
        'age' => 'integer',
        'phone' => 'string',
        'address' => 'string',
    ];

    public function initialCheckUp() {
        return $this->hasOne(InitialCheckUp::class);
    }

    public function registrations() {
        return $this->hasMany(Registration::class);
    }

    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
}
