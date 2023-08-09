<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    use HasFactory;
    public $fillable = ['plan_id', 'name', 'body', 'price', 'active', 'notactive','picture'];
    
    public function plan(){
        return $this->belongsTo(Plan::class);
    }
    public function dishes(){
        return $this->belongsToMany(Dish::class, 'menu_dish');
       }
}

// <?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
// use Spatie\MediaLibrary\HasMedia;
// use Spatie\MediaLibrary\InteractsWithMedia;

// class Ticket extends Model implements HasMedia
// {
//     use HasFactory, InteractsWithMedia;
//     public $fillable = ['user_id', 'place_id', 'catalog_id', 'subcatalog_id', 'body', 'name', 'event_datetime', 'price', 'active', 'online', 'country_id'];
// }
