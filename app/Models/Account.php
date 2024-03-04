<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $table = 'account';

    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name',  'email', 'phone', 'image', 'password', 'address', 'role', 'status'
    ];
}
