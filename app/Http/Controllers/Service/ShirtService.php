<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shirts;

class ShirtService extends Controller
{
    public static function getAll(){
        return Shirts::all();
    }
    public static function AddShirt(Request $request){
        $add = new Shirts();
        $add->brand_name = $request->brand_name;
        $add->size = $request->size;
        $add->qty = $request->qty;

        $add->save();

        return Shirts::all();
    }
    public static function updateShirt(Request $request){
        $add = Shirts::find($request->id);
        $add->brand_name = $request->brand_name;
        $add->size = $request->size;
        $add->qty = $request->qty;

        $add->save();

        return Shirts::all();
    }
    public static function deleteShirt(Request $request){
        $add = Shirts::find($request->id);
       
        $add->delete();

        return Shirts::all();
    }
}
