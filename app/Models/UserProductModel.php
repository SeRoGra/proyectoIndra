<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProductModel extends Model
{
    protected $table = 'user_products';
    protected $fillable = ['user_id', 'product_id'];
}