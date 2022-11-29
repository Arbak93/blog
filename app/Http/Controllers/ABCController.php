<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
class ABCController extends Controller
{
public function index() {
$countries = DB::table('countries')->paginate(15);
return view(
'countries.index',
['countries' => $countries]
);
}
}
