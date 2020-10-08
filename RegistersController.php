<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Auth;
use App\Candidate;
use Illuminate\Http\Request;

class RegistersController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request,[
           'username'=>'required',
           'email'=>'required',
           'mobile'=>'required',
           'password'=>'required',
           'cpassword'=>'required',
        ]);
        $candidate = new Candidate;
        $candidate->usename = $request->input('username');
        $candidate->email = $request->input('email');
        $candidate->mobile = $request->input('mobile');
        $candidate->password = $request->input('password');
        $candidate->cpassword = $request->input('cpassword');

        $candidate->save();
        return redirect('/')->with('response','Register successfully..');
        //return 'validation passed';
        //return 'successfuly...';
    }
}

?>