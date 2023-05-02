<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\Priceing;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index(){
        $items=Items::all();
        return view('backend.items.index',compact('items'));
    }
    public function create(){
        $priceing=Priceing::all();
        return view('backend.items.create',compact('priceing'));
    }

    public function store(Request $request){
        $items=Items::create($request->except('_token')+['created_at'=>Carbon::now()]);
        $items->save();
        return back();
    }
    public function edit($id){
        $items=Items::find($id);
        return view('backend.items.edit',compact('items'));
    }

    public function update(Request $request , $id){
        $request->validate([
            'price_category'=>'required',
            'facility'=>'required',

        ]);

        $items=Items::find($id);
        $items->update($request->except('_token')+['update_at'=>Carbon::now()]);
        $items->update();
        return to_route('index.items');
    }

    public function destory($id){
        $items=Items::find($id);
        $items->delete();
        return to_route('index.items');
    }

}
