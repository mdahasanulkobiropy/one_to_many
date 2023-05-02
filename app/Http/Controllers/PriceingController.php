<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Priceing;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PriceingController extends Controller
{
    public function index(){
        $priceing = Priceing::all();
        return view('backend.priceing.index',compact('priceing'));
    }
    public function create(){
        return view('backend.priceing.create');
    }

    public function store(Request $request){
        $request->validate([
            'price_category' => 'required',
            'price_month'    => 'required',
            'price_year'     => 'required',
        ]);
        $priceing=Priceing::create($request->except('_token')+['created_at'=>Carbon::now()]);
        $priceing->save();
        return back();
    }
    public function edit($id){
        $priceing=Priceing::find($id);
        return view('backend.priceing.edit',compact('priceing'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'price_category' => 'required',
            'price_month'    => 'required',
            'price_year'     => 'required',
        ]);
        $priceing=Priceing::find($id);
        $priceing->update($request->except('_token')+['updated_at'=>Carbon::now()]);
        $priceing->update();
        return to_route('index.price');
    }

    public function destory($id){
        $priceing=Priceing::find($id);
        // Items::where('')
        $priceing->delete();
        return to_route('index.price');
    }



}
