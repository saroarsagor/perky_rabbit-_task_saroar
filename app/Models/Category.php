<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
      	protected $fillable = [
        	'name',
            'mketa_title',
            'meta_key_word',
            'details',
            'meta_description',

    	];


    public function product()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}
