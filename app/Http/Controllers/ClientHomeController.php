<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ClientHomeController extends Controller
{
    public function index(){
        $main_categories = Category::whereNull('parent_id')->get();
        return view('client.layouts.shared.home', compact('main_categories'));
    }
}
