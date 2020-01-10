<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emails;

class EmailController extends Controller
{
    public function create(){
        return view('emails');
    }

    public function store(Request $request){
        $email = new Emails();
        $email->name = $request->first_name . '.' . $request->last_name;
        $email->save();
        return redirect(route('create'))->with('status' , 'Email Was Send To Tec Team :)');
    }

    public function emails_data(){

        $names = Emails::all();
        return view('emails_data' , compact('names'));
    }
}
