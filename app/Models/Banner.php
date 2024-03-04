<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = "banner";
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name',  'site', 'status', 'image'
    ];
}
