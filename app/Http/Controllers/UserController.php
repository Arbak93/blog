<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function index()
    {
        $Armenia = DB::table('countries')
        ->where("name","Armenia")->get();
    $Artsakh = $Armenia[0];
    $Artsakh->name = "Artsakh";
    $new = json_encode($Artsakh);
    $Artsakh = json_decode($new,true);
    array_shift($Artsakh);
    DB::table('countries')
        ->insert(
            $Artsakh
        );
    DB::table('countries')
        ->updateOrInsert(
            $Artsakh);
    }
    public function show($id)
    {
        return "This is User with ID $id";
    }
}
