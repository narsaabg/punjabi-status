<?php

use App\Models\Category;
use App\Models\Status;

function get_categories(){
	return Category::all();
}

function get_categories_status_count($id){
	return Status::where('cat_id',$id)->count();
}