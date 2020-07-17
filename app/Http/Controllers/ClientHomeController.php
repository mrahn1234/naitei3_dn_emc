<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ClientHomeController extends Controller
{
    public function index(){
        return view('client.layouts.shared.home');
    }
}
