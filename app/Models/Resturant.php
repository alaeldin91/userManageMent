<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    use HasFactory;
    public $guarded =[''];
    public function owner(){
        return $this->belongsTo(User::class,'owner_id');
    }
}
