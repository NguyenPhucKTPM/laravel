<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        return view('page.index',[
            'title' => 'Trang chủ'
        ]
    );
    }
}