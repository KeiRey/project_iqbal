<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table = 'artikels';
    protected $fillable = [
        'solusi',
        'tiket_id',
        'admin_id',
        
    ];
    protected $primaryKey = 'id';
}
