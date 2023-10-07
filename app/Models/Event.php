<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';             
    protected $fillable = [    
        'category_id',   
        'sort_col',    
        'image',    
    ]; 

    public function category()
    {
         return $this->hasOne(Category::class,'id','category_id');  
    }

}
