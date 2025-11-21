<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    public $timestamps = true;
    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'name' => 'string',
    ];
    public function registrations() {
        return $this->hasMany(Registration::class);
    }
}
