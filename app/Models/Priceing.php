<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Priceing extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function items(){
        return $this->HasMany(Items::class,'priceing_cat_id','id'); //priceing_cat_id & id
    }
}
