<?php
namespace App\Repositories\Category;

use App\Models\Category;

class CategoryRepositoryImplement implements CategoryRepository
{
   private $categoryModel;
   
   /**
    * __construct
    *
    * @param  mixed $categoryModel
    * @return void
    */
   public function __construct(Category $categoryModel) {
      $this->categoryModel = $categoryModel;
   }
   
   /**
    * Get All Category Products
    *
    * @return void
    */
   public function getAllCategory()
   {
      return $this->categoryModel->all();
   }
   
   /**
    * Get Category By Slug
    *
    * @param  mixed $page
    * @return void
    */
   public function getCategoryBySlug($slug)
   {
      return $this->categoryModel->where("slug", $slug)->first();
   }
}
?>