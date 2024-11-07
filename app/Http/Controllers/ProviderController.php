<?php

namespace App\Http\Controllers;
use App\Models\provider;

use Illuminate\Http\Request;

class ProviderController extends Controller
{

    public function create(){

        return view("providersPage.create");
    }
    
    public function store(Request $request){

        $provider= new Provider();

        $provider->name = $request->name;
        $provider->Company = $request->Company;


        $provider->save();

        return $provider;

    }
    public function show ($id){

        $provider=provider::find($id);

        return view('providersPage.show', compact('provider'));

    }
    public function list() {
        $providers = Provider::all(); // Obtener todos los proveedores
        return view('providersPage.list', compact('providers')); // Pasarlos a la vista
    }

    public function edit ($id){

        $provider= Provider::find($id);
        return view('providersPage.edit', compact('provider'));
    }

    public function delete ($id){
        $provider= Provider::find($id);

        $provider->delete();

        return redirect('')->route('providerPage.delete');
    }


    public function update (Request $request, $id){

        $provider= Provider::find($id);
        $provider->name=$request->Name;
        $provider->Empresa=$request->Empresa;
        $provider->save();
        
        $provider->save();

        return redirect()->route('providersPage.list');
    }

}
