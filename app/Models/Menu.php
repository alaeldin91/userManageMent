<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public $guarded = [''];
    public function catogry(){
        return $this->belongsTo(catogry::class);
    }
}
