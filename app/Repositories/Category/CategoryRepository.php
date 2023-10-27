<?php

namespace App\Repositories\Category;

interface CategoryRepository
{   
   /**
    * Get All Category Products
    *
    * @return void
    */
   public function getAllCategory();
   
   /**
    * Get Category By Slug
    *
    * @return void
    */
   public function getCategoryBySlug($slug);
}
?>