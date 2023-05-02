<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function priceing(){
        return $this->belongsTo(Priceing::class,'priceing_cat_id','id'); 
    }
}
