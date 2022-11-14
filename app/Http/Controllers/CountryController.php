<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CountryController extends Controller
{
  public static  function index()
  {
    //   $countries = DB::table('countries')->get();

    //      echo "<pre>";print_r($countries);
    $roles = DB::table('countries')->orderBy('id')->pluck('name');
    return view('greeting', ['xx'=>$roles]);
  }
}
