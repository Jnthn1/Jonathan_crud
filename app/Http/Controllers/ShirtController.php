<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\controllers\Service\ShirtService;

class ShirtController extends Controller
{
    public function getAll(){
        return ShirtService::getAll();
    }
    public function AddShirt(Request $request){
        return ShirtService::AddShirt($request);
    }
    public function updateShirt(Request $request){
        return ShirtService::updateShirt($request);
    }
    public function deleteShirt(Request $request){
        return ShirtService::deleteShirt($request);
    }
}
