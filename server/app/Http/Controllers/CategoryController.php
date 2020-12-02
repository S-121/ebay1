<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory() {
      $filename = public_path('category.json');
      $newcategory = array();
      $category_tree = file_get_contents($filename);      
      // $category_tree_obj =json_decode($category_tree);
      // echo ($category_tree);
      // for ($i = 0; $i < count($category_tree_obj); $i++) {
      //   $newcategory[] = array(
      //     "categoryName"=> $category_tree_obj[$i]["category"]["categoryName"],
      //     "categoryId"=> $category_tree_obj[$i]["category"]["categoryId"]          
      //   );
      //   for ($j = 0;$j < $category_tree_obj[$i]["childCategoryTreeNodes"]["length"];$j++) {
      //     $newcategory[count(newcategory) - 1]["childcategory"][] = array(
      //       "categoryName"=>$category_tree_obj[$i]["childCategoryTreeNodes"][$j]["category"]["categoryName"],
      //       "categoryId"=>$category_tree_obj[$i]["childCategoryTreeNodes"][$j]["category"]["categoryId"]
      //     );
      //   }
      // }

      return response()->json(array('category' => $category_tree));
    }
}