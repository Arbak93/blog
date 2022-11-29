<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use App\Models\Identitycard;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
class UserController extends Controller
{
    public function index(Request $request)


    {

    $users =  User::with(['identity'])->get();
   foreach($users as $user){
    echo  $user->name."<br>";
    echo $user->identity?->identity_number;
   }

    }
    public function show($id)
{
//echo "This is User with ID $id";
// $flight = Flight::where('number', 'FR 900')->first();
// $flight->number = 'FR 456';
// $flight->refresh();
// echo $flight->number; // "FR 900"

}

}
