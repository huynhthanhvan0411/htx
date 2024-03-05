<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "order";
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name',  'email', 'phone', 'address', 'note', 'delivery', 'payment', 'status', 'account_id'
    ];
}
