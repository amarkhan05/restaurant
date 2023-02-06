<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class AdminController extends Controller
{
    public function users(){
        $data = User::all();
        return view('admin.user',compact('data'));
    }

    public function deleteusers($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
