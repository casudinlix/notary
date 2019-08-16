<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuid;
class ProductModel extends Model
{
    protected $table='product_service';
    protected $fillable = ['product_name','price','created_by'];
}
