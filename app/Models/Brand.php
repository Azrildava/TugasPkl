<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $fillable = ['name_brand'];
    public $visible = ['name_brand'];
    public $timestamp = true;

    public function brand(){
        return $this->HasMany(brand::class, 'id_product');
    }
}
