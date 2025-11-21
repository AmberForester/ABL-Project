<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    protected $table = 'nurses';
    protected $timestamps = true;
    protected $fillable = [
        'name',
    ];
    protected $casts = [
        'name' => 'string',
    ];

    public function initialCheckUps()
    {
        return $this->hasMany(InitialCheckUp::class);
    }
}
