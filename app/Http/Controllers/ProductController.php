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
}
