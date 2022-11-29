<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\form;


class FormtController extends Controller
{
    public function index()
    {
        return view('add-form');
    }
    public function store(Request $request)
    {

        $this->validate($request,[
            'addres'=>'alpha_num',
            'name'=>'required|alpha',
            'email' => 'required|email:rfc,dns',
            'password'=>'required|min:3|max:30'
            ],
            [
                'name.required'=>' name обязательно',
                'name.alpha'=>'name обязательно, разрешены только буквы',
                 'email.email'=>'email обязательно, должна быть действующая электронная почта',
                 'password.required'=>'password обязательно, минимум 8 и максимум 30 символов',
                 'password.min'=>'password обязательно, минимум 8 символов',
                ' password.max'=>'password обязательно,максимум 30 символов',
                'addres.alpha_num'=>'adres обязательно, разрешены только буквы cifri'
            ]
        );


        $form = new form;
        $form->name = $request->name;
        $form->email = $request->email;
        $form->addres = $request->addres;
        $form->password = $request->password;

        $form->save();
        return redirect('add-form')->with('status', 'Blog  Form Data Has Been inserted');
    }
}
