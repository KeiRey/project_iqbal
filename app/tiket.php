<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    protected $table = 'tikets';
    protected $fillable = [
        'username',
        'kategori',
        'tanggal',
        'message',
        
    ];
    protected $primaryKey = 'id';
}
