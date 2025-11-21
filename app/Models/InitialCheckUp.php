<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InitialCheckUp extends Model
{
    protected $table = 'initial_check_up';
    protected $timestamps = true;
    protected $fillable = [
        'weight',
        'height',
        'tension',
        'temperature',
    ];
    protected $casts = [
        'weight' => 'float',
        'height' => 'float',
        'tension' => 'string',
        'temperature' => 'float',
    ];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function nurse()
    {
        return $this->belongsTo(Nurse::class);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
