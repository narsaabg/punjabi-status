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

    public function addStatus(Request $request){
        $values = $request->only(['status','cat_id']);
        session(['msg' => '']);
        if($values['status'] !='' && $values['cat_id'] !=''){
            $isStatusAdded = Status::create([
                'status' => $values['status'],
                'cat_id' => $values['cat_id']
            ]);

            if($isStatusAdded){
                $msg = 'Status Added';
                session(['msg' => 'Status Added']);
            }
        }
        return redirect()->route('dashboard');
    }
}
