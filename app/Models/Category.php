<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name', 'status'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'id');
    }
}
