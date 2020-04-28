<?php

namespace App\Models;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Product extends Model
{
    use Searchable;
    use Notifiable;
    //
    protected $table = 'product';
    protected $fillable = [
    	'name', 'slug', 'description', 'quantity', 'price', 'promotional', 'idCategory', 'idProductType', 'image', 'status',
    ]; 

    public function productTypes(){
    	return $this->belongsTo('App\Models\ProductTypes','idProductType','id');
    }

    public function categories(){
    	return $this->belongsTo('App\Models\Categories','idCategory','id');
    }
    public function searchableAs()
    {
        return 'products_index';
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    
}
