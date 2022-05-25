<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;


class admin extends Model
{
    // use HasFactory;

    protected $table = 'admin';
    protected $guarded = [];
    // protected $primarykey = 'id_admin';
    // protected $fillable = ['nama_admin', 'username_admin', 'password_admin'];
}
