<?php

namespace App\Http\Controllers;

use App\Models\Priceing;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $priceing=Priceing::all();
        return view('index',compact('priceing'));
    }
}
