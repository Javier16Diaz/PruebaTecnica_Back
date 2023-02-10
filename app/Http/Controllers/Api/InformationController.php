<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use Symfony\Component\HttpFoundation\Response;

class InformationController extends Controller
{
    public function guardar(Request $Request){
        $information = new Information();
        $information->name =$request->name;
        $information->phone =$request->phone;
        $information->mail =$request->mail;

        $product->save();
    }
}
