<?php

use App\Models\Category;
use App\Models\JokesCategory;
use App\Models\Status;
use App\Models\Joke;

function get_categories(){
	return Category::all();
}

function get_jokes_categories(){
	return JokesCategory::all();
}

function get_categories_status_count($id){
	return Status::where('cat_id',$id)->count();
}

function get_jokes_categories_status_count($id){
	return Joke::where('cat_id',$id)->count();
}