<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    public function  category(){
        return $this->belongsTo(category::class);
    }
    use HasFactory;
    public function  commands(){
        return $this->belongsTo(commands::class);
    }
}