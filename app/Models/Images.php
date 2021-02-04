<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = "product_img";
    public function image()
    {
        return $this->hasOne(ProductsMainPageModel::class, 'id', 'product_id');
    }
}
