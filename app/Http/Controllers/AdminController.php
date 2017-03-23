<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
       public function showForm(Request $request){
        $users = User::all();
    	return view ('user-registration', compact('users'));
    }


    public function completeForm(Request $request){
    	$name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $users = new user; 
        $users->name = $name;
        $users->email = $email;
        $users->password = $password;
        $users->save();

    	return view ('complete-registration');
    }

    public function showList(){
        $users = User::all();
        return view('show-list', compact('users'));
    }

    public function edit-user(Request $request, $id){
        $users = User::find($id);
        return view('/edit-user', compact('users'));
    }
    public function saveEdit(Request $request){
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $users = User::find($id);
        $users->id = $id;
        $users->name = $name;
        $users->email = $email;
        $users->password = $password;
        $users->save();

        return redirect('/show-list');
    }

    public function toDelete(Request $request, $id){
        $users = User::find($id);
        $users->delete();
        return redirect('/show-list');
        
    }
}
