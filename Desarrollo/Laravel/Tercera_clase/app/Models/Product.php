<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table ='products';
    protected $primaryKey ='id';
    protected $fillable =
        [
            'name','description','price','company_id','product_type_id'
        ];
    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function product_type(){
        return $this->belongsTo(ProductsTypes::class);
    }
}
