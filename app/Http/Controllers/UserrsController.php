<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userrs;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
class UserrsController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|regex:/^[A-Z][^A-Z]*$/',
            'lastname' => 'required|regex:/[A-Z]+\[a-z]/',
    ]);
        $userr = new Userrs;
        $userr->firstname = $request->firstname;
        $userr->lastname = $request->lastname;
        $userr->save();
        return redirect('/redirect')->with('status', 'Blog Post Form Data Has Been inserted');

    }
    public function redirect(){
        $users = DB::select('select * from userrs ORDER BY id DESC limit 1');
        return view('redirect',['user'=>$users]);

        }
    }
