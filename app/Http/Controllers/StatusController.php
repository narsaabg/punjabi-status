<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\Category;

class StatusController extends Controller
{
    public function index(){
        $statuses = Status::all();
        return view('index')->with('statuses',$statuses);
    }

    public function single_cat(Request $request , $slug){
        $cat_id = Category::where('slug',$slug)->pluck('id');
        if(count($cat_id) > 0){
            $statuses = Status::where('cat_id',$cat_id)->get();
            return view('single-cat')->with('statuses',$statuses);
        }
        return redirect()->route('index');
    }
}
