<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return voids
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function addPicture(Request $postdata) {

        $photoName = $postdata->picture->getClientOriginalName();
        $postdata->picture->storeAs('/uploads', $photoName);

        $picture = new User;
        $picture->picturepath = $photoName;
        $picture->save();

        $photo = DB::table('picture')->first();

        return view('/home',['photo' => photo]);
    }

    public function imageUpload()
    {
        return view('image-upload');
    }

     public function imageUploadPost(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        return back()
            ->with('success','Image Uploaded successfully.')
            ->with('path',$imageName);
    }


    public function showList(){
        $users = User::all();
        return view('show-list', compact('users'));
    }
    public function editUser(Request $request, $id){
        $users = User::find($id);
        return view('/updateInfo', compact('users'));
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

        return view('home', compact('users'));
    }
}
