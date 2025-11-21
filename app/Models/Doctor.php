<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $table = 'doctors';
    protected $timestamps = true;
    protected $fillable = [
        'name',
        'specialization',
    ];
    protected $casts = [
        'name' => 'string',
        'specialization' => 'string',
    ];

    public function initialCheckUps()
    {
        return $this->hasMany(InitialCheckUp::class);
    }

    public function diagnoses()
    {
        return $this->hasMany(Diagnose::class);
    }
}
