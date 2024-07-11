<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        return view('admin.index',[
            'title' => '',
        ]);
    }
    public function dashboard(){
        return view('admin.components.dashboard',[
            'title' => 'Thống kê',
        ]);
    }
}