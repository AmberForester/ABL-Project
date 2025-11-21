<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Queue extends Model
{
    protected $table = 'queues';
    public $timestamps = true;
    protected $fillable = [
        'number'
    ];
    protected $casts = [
        'number' => 'integer'
    ];
    public function registration() {
        return $this->hasOne(Registration::class);
    }
}
