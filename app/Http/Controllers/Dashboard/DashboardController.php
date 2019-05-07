<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $data = 'Nazmul';
        return view('deshboard.dashbord')->with(['my' => $data]);
    }
}
