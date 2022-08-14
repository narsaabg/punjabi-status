<?php

use App\Models\Category;

function get_categories(){
	return Category::all();
}