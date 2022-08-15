<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JokesCategory;
use App\Models\Joke;

class JokesController extends Controller
{
    public function index(){
        $statuses = Joke::all();
        return view('Jokes')->with('statuses',$statuses);
    }

    public function single_cat(Request $request , $slug){
        $cat_id = JokesCategory::where('slug',$slug)->pluck('id');
        if(count($cat_id) > 0){
            $statuses = Joke::where('cat_id',$cat_id)->get();
            return view('jokes-single-cat')->with('statuses',$statuses);
        }
        return redirect()->route('index');
    }
}
