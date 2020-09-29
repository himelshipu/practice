<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function AllCat(){
        return view('admin.category.index');
    }
    public function AddCat(Request $request){
        $request->validate([
            'category_name'=> 'required|min:3',
        ],
        [
            'category_name.required'=> 'you must enter a Category',
            'category_name.min'=> 'Category must be minimum 3 Characters',
        ]);

        Category::insert([
            'category_name' => $request->category_name,
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);
        return Redirect()->back->with('success','category inserted');
//        return view('admin.category.index');
    }
}
