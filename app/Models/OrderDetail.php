<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
     protected $table = "orderdetail";
         protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        '	order_id ',  'product_id ', 'quality', 'price',
    ];
    public function product(){
    	return $this->belongsTo(Product::class, 'product_id');
    }

    public function order(){
    	return $this->belongsTo(Order::class, 'order_id');
    }
}