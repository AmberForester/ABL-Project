<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';
    public $timestamps = true;
    protected $fillable = [
        'complaint',
        'is_verified',
    ];

    protected $casts = [
        'complaint' => 'string',
        'is_verified' => 'boolean',
    ];

    public function queue() {
        return $this->belongsTo(Queue::class);
    }

    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    public function patient() {
        return $this->belongsTo(Patient::class);
    }
    
}
