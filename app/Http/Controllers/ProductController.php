<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
       $products = Product::with(['brand'])->get();
         foreach($products as $product){
           echo 'Product name :'. $product->title . '<br />';
           echo 'Brand        :'. $product->brand->brand_name.'<br />';
          echo '---------------------------------------------'.'<br />';
         }
    }
    public function store()
{
   $category_id = [1,2,3];
   $brand_id = 1;
   $product = Product::create([
     'title' => 'Shoes Futsal Adidas',
     'price' => '230',
     'brand_id' => $brand_id
   ]);
// we can use method sync for update or delete $category_id
  $product->categories()->sync($category_id);
}
// public function showData()
// {
//    $product = Product::with(['categories'])->get();
//    dd($product);
// }
public function showData()
{
  $products = Product::with(['categories'])->get();
    echo '<table>';
     echo '<tr>
      <th>No</th>
      <th>Product</th>
      <th style="width:40%">Category</th>
      <th>Category count</th>
    </tr>';
      $no = 1;
      foreach($products as $product){
        echo '<tr>
       <td>'.$no++.'</td>
       <td>'.$product->title.'</td>
       <td style="text-align:center">';
          foreach($product->categories as $category){
             echo $category->title.'<br/>';
         }
       echo '</td>
       <td>'.$product->categories->count().'</td>
       </tr>';
     }
     echo '</table>';
}
}
