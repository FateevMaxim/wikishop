<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsMainPageModel extends Model
{

    protected $table = "product";
    public function brand()
    {

        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

}
