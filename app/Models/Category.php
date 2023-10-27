<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = ['id'];
    
    /**
     * one-to-many relations between the products table and the categories table.
     *
     * @return void
     */
    public function products(){
        return $this->hasMany(Product::class);
    }
}
