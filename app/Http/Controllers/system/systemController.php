<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class systemController extends Controller {


    public function dashboard(){
        return view('admin.dashboard');
    }

}