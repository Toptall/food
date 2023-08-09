<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    public $fillable = ['name', 'body'];

    public function menus(){
        return $this->hasMany(Menu::class);
    }
}
