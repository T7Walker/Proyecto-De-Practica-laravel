<?php

namespace App\Http\Controllers;
use App\Models\provider;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    
    public function store(Request $request){

        $provider= new Provider();

        $provider->name=$request->Nombre;
        $provider->Empresa=$request->Empresa;

        $provider->save();

        return $provider;

    }
    public function show ($id){

        return view('providerPage.show', compact('provider'));

    }

    public function list (){

        return view('providerPage.list');
    }

}
