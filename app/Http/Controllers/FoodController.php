<?php

namespace App\Http\Controllers;

use App\Models\food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function foods(){
        $data = food::all();
        return view('admin.foods',compact('data'));
    }

    public function uploadfood(Request $request){

        $food = new food;

        $image = $request->image;

        $name = time().'.'.$image->getClientOriginalName();
        $request->image->move('foodimage',$name);

        $food->title = $request->title;
        $food->price = $request->price;
        $food->description = $request->description;
        $food->image = $name;

        $food->save();
        return redirect()->back();

    }

    public function deletefood($id){
        $user = food::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function editfood($id){
        $data = Food::find($id);
        return view('admin.editfood',compact('data'));
    }

    public function updatefood(Request $request, $id){
        $food = Food::find($id);
        $image = $request->image;
        $name = time() . '.' . $image->getClientOriginalName();
        $request->image->move('foodimage', $name);
        
        $food->title = isset($request->title) ? $request->title : '';
        $food->price = isset($request->price) ? $request->price : '';
        $food->description = isset($request->description) ? $request->description : '';
        $food->image = isset($name) ? $name : '';

        $food->save();
        return redirect()->back();

    }
}
