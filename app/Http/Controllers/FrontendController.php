<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Category;
use App\Item;

use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function index()
    {
        
        $categories = Category::all();
        $items = Item::all();
      
        return view('frontend.menu',compact('categories','items'));
    }


    public function reserve()
    {
          return view('reserve');
    }
}
