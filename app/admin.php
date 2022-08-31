<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admins';
    protected $fillable = [
        'nama_lengkap',
        'username',
        'email',
        'telp',
        'password'
        
    ];
    protected $primaryKey = 'id';
}
