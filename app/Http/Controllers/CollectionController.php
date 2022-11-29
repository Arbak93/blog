<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function collection_class()
    {
        //Create a new collection using Collection class
        $collection1 = new Collection([67, 34, 89, 56, 23]);
        //dump the variable content in the browser
        dd($collection1);
    }
    public function search_data()
    {
        $customer = collect(
            [
                ['id' => '894673', 'name' => 'Rahman', 'email' => 'rah@gmail.com'],
                ['id' => '454886', 'name' => 'Janifer', 'email' => 'ganifer@gmail.com'],
                ['id' => '306007', 'name' => 'Micheal', 'email' => 'mic@gmail.com']
            ]
        );
        if ($customer->contains('name', 'Janifer')) {
            echo "Janifer exists in the customer list.<br/>";
        }
        $marks = collect([
            ['ID' => '011176644', 'marks' => ['CSE401' => 87, 'CSE409' => 88]],
            ['ID' => '011176645', 'marks' => ['CSE402' => 69, 'CSE409' => 75]],
        ]);
        echo $marks->where('ID', '011176645') . "<br/>";
        echo $marks->where('marks.CSE409', 88);
    }
    public function filter_data()
    {
        $products = collect([
            ['product' => 'HDD', 'price' => 6000],
            ['product' => 'Mouse', 'price' => 500],
            ['product' => 'Monitor', 'price' => 5000],
            ['product' => 'Printer', 'price' => 4000],
        ]);
        $filter_price = $products->filter(function ($item) {
            return data_get($item, 'price') > 4000;
        });
        dd($filter_price);
    }
}
