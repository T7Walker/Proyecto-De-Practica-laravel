<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;


class ProviderController extends Controller
{
    public function index(){ //$product=Product::find(2);

        $providers=Provider::all();
 
        return view('provider.list', compact('providers'));
 
     }

     public function create (){

        return view('provider.create');

    }

    public function store(Request $request){

        $provider= new Provider();

        $provider->name=$request->Nombre;
        $provider->Empresa=$request->Empresa;

        $provider->save();

        return $provider;


    }

}
